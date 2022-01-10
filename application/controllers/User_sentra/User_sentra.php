<?php
require APPPATH. '/controllers/User_sentra/User_sentra_config.php';

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_sentra extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('User_sentra/User_sentra_model','tmodel');
		$this->log_key ='log_User_sentra';
		$this->title = new User_sentra_config();
   }


	public function index(){
		$data = array(
			'title_page_big'		=> 'DAFTAR',
			'title'					=> $this->title,
			'link_refresh_table'	=> site_url().'User_sentra/User_sentra/refresh_table/'.$this->_token,
			'link_create'			=> site_url().'User_sentra/User_sentra/create',
			'link_update'			=> site_url().'User_sentra/User_sentra/update',
			'link_delete'			=> site_url().'User_sentra/User_sentra/delete_multiple',
			'link_create_multiple'			=> site_url().'User_sentra/User_sentra/create_multiple',
		);
		
		$this->template->load('User_sentra/User_sentra_list',$data);
	}

	public function refresh_table($token=null){
		//if($token==$this->_token){
			$row = $this->tmodel->json();
			
			//encode id 
			$tm = time();
			$this->session->set_userdata($this->log_key,$tm);
			$x = 0;
			foreach($row['data'] as $val){
				$idgenerate = _encode_id($val['id'],$tm);
				$row['data'][$x]['id'] = $idgenerate;
				$x++;
			}
			
			$o = new Outputview();
			$o->success	= 'true';
			$o->serverside	= 'true';
			$o->message	= $row;
			
			echo $o->result();
			

		// }else{
		// 	redirect('Auth');
		// }
	}

	public function create(){
		$data = array(
			'title_page_big'		=> 'Buat Baru',
			'title'					=> $this->title,
			'link_save'				=> site_url().'User_sentra/User_sentra/create_action',
			'link_back'				=> $this->agent->referrer(),
			'data_sentra'				=> $this->get_table_sentra(),			
		);
		
		$this->template->load('User_sentra/User_sentra_form',$data);

	}

	public function create_action(){
		$data 	= $this->input->post('data_ajax',true);
		$val	= json_decode($data,true);
		$o		= new Outputview(); 

		/* 
		*	untuk mengganti message output
		* tambahkan perintah : $o->message = 'isi pesan'; 
 		* sebelum perintah validasi.
		* ex.
		* 	$o->message = 'halo ini pesan baru';
		* 	if(!$o->not_empty($val['descriptions'],'#descriptions')){
		*		echo $o->result();	
		*		return;
		*  	}
		*
		*/	

		//mencegah data kosong
		if(!$o->not_empty($val['user_id'],'#user_id')){
			echo $o->result();	
			return;
		}

		unset($val['id']);

		$val['user_input']=$this->_user_id;
	
		$success = $this->tmodel->insert($val);
		echo $o->auto_result($success);

	}

	public function update($id){
		$id 				= $this->security->xss_clean($id);
		$id_generate		= $id;
		
		/** proses decode id 
		* important !! tempdata digunakan sbagai antisipasi
		* perubahan session saat membuka tab baru secara bersamaan
		**/
		$this->log_temp	= $this->session->userdata($this->log_key);
		$this->session->set_tempdata($id,$this->log_temp,300);
		
		//mengembalikan id asli
		$id = _decode_id($id,$this->log_temp);
		
		$row = $this->tmodel->get_by_id($id);
		
		if($row){
			$data = array(
				'title_page_big'		=> 'Buat Baru',
				'title'					=> $this->title,
				'link_save'				=> site_url().'User_sentra/User_sentra/update_action',
				'link_back'				=> $this->agent->referrer(),
				'data'					=> $row,
				'id'					=> $id_generate,
				'data_sentra'			=> $this->get_table_sentra($id),
			);
			
			$this->template->load('User_sentra/User_sentra_form',$data);
		}else{
			redirect($this->agent->referrer());
		}
	}

	public function update_action(){
		$data 	= $this->input->post('data_ajax',true);
		$val	= json_decode($data,true);
		$this->log_temp		= $this->session->tempdata($val['id']);
		$val['id']				= _decode_id($val['id'],$this->log_temp);
		
		$o		= new Outputview(); 
			
		/* 
		*	untuk mengganti message output
		* tambahkan perintah : $o->message = 'isi pesan'; 
 		* sebelum perintah validasi.
		* ex.
		* 	$o->message = 'halo ini pesan baru';
		* 	if(!$o->not_empty($val['descriptions'],'#descriptions')){
		*		echo $o->result();	
		*		return;
		*  	}
		*
		*/			

		//mencegah data kosong
		if(!$o->not_empty($val['user_id'],'#user_id')){
			echo $o->result();	
			return;
		}

		$val['user_update']=$this->_user_id;	
		$val['update_time']=date('Y-m-d H:i:s', now());

	
		$success = $this->tmodel->update($val['id'],$val);
		echo $o->auto_result($success);

	}

	public function delete_multiple(){
		$data=$this->input->get('data_ajax',true);
		$val=json_decode($data,true);
		$data = explode(',',$val['data_delete']);

		//get key generate
		$log_id = $this->session->userdata($this->log_key);
		$xx=0;
		foreach($data as $value){
			$value =  _decode_id($value,$log_id);
			//menganti ke id asli
			$data[$xx] = $value;
			$xx++;	
		}
		
		$success = $this->tmodel->delete_multiple($data);
		
		$o = new Outputview();
		
		//create message
		if($success){
			$o->success 	= 'true';
			$o->message	= 'Data berhasil di hapus !';
		}else{
			$o->success 	= 'false';
			$o->message	= 'Opps..Gagal menghapus data !!';
		}
		
		
		echo $o->result();
	
	}

	private function get_table_sentra($id=null){
		$auth_form=array();
		$sk=array();
		if($id !==null){			
			$auth_form = $this->tmodel->get_by_id($id);	
			$sk=explode(	",",$auth_form->sentra_kas);	 
		}

		$this->load->model('Sentra_kas/Sentra_kas_model','sk');
		$row = $this->sk->get_all();

		
		$x=0;
		foreach($row as $val_form){
			$row[$x]['no']		 = $x+1;
			$row[$x]['checked'] = " ";

			if(in_array($val_form['id'],$sk)){
				$row[$x]['checked'] = " checked ";	
			}
			
			$x++;
		}
		
		return json_encode($row);
	}



};

