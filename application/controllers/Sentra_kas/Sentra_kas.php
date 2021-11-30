<?php
require APPPATH. '/controllers/Sentra_kas/Sentra_kas_config.php';

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sentra_kas extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Sentra_kas/Sentra_kas_model','tmodel');
		$this->log_key ='log_Sentra_kas';
		$this->title = new Sentra_kas_config();
   }


	public function index(){
		$data = array(
			'title_page_big'		=> 'DAFTAR',
			'title'					=> $this->title,
			'link_refresh_table'	=> site_url().'Sentra_kas/Sentra_kas/refresh_table/'.$this->_token,
			'link_create'			=> site_url().'Sentra_kas/Sentra_kas/create',
			'link_update'			=> site_url().'Sentra_kas/Sentra_kas/update',
			'link_delete'			=> site_url().'Sentra_kas/Sentra_kas/delete_multiple',
			'link_create_multiple'			=> site_url().'Sentra_kas/Sentra_kas/create_multiple',
		);
		
		$this->template->load('Sentra_kas/Sentra_kas_list',$data);
	}

	public function refresh_table($token){
		if($token==$this->_token){
			$row = $this->tmodel->get_all();
			
			//encode id 
			$tm = time();
			$this->session->set_userdata($this->log_key,$tm);
			$x = 0;
			foreach($row as $val){
				$idgenerate = _encode_id($val['id'],$tm);
				$row[$x]['id'] = $idgenerate;
				$x++;
			}
			
			
			$o = new Outputview();
			$o->success	= 'true';
			$o->message	= $row;
			
			echo $o->result();
			

		}else{
			redirect('Auth');
		}
	}

	public function create(){
		$data = array(
			'title_page_big'		=> 'Buat Baru',
			'title'					=> $this->title,
			'link_save'				=> site_url().'Sentra_kas/Sentra_kas/create_action',
			'link_back'				=> $this->agent->referrer(),			
		);
		
		$this->template->load('Sentra_kas/Sentra_kas_form',$data);

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
		if(!$o->not_empty($val['kode_sentra'],'#kode_sentra')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('kode_sentra'=>$val['kode_sentra']);
		$exist = $this->tmodel->if_exist('',$field);
		if(!$o->not_exist($exist,'#kode_sentra')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['sentra'],'#sentra')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('sentra'=>$val['sentra']);
		$exist = $this->tmodel->if_exist('',$field);
		if(!$o->not_exist($exist,'#sentra')){
			echo $o->result();	
			return;
		}
		$val['user_input']= $this->_user_id;
		
		unset($val['id']);
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
				'link_save'				=> site_url().'Sentra_kas/Sentra_kas/update_action',
				'link_back'				=> $this->agent->referrer(),
				'data'					=> $row,
				'id'					=> $id_generate,
			);
			
			$this->template->load('Sentra_kas/Sentra_kas_form',$data);
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
		if(!$o->not_empty($val['kode_sentra'],'#kode_sentra')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('kode_sentra'=>$val['kode_sentra']);
		$exist = $this->tmodel->if_exist($val['id'],$field);
		if(!$o->not_exist($exist,'#kode_sentra')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['sentra'],'#sentra')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('sentra'=>$val['sentra']);
		$exist = $this->tmodel->if_exist($val['id'],$field);
		if(!$o->not_exist($exist,'#sentra')){
			echo $o->result();	
			return;
		}

		$val['user_update']= $this->_user_id;
		$val['update_time']= now_db();

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

	public function  create_multiple(){
		$data = array(
			'title_page_big'			=> 'Import data pengguna dari excel',
			'link_download_template'	=> site_url().'Sentra_kas/Sentra_kas/download_template/'.$this->_token,
			'link_upload_template'		=> site_url().'Sentra_kas/Sentra_kas/upload_template/'.$this->_token,
			'link_back'					=> $this->agent->referrer(),			
		);
		
		$this->template->load('share/Form_multiple',$data);
	}

	public function  download_template($token){
		if ($token == $this->_token) {
			//Buat template upload
		}else {
			redirect('Auth');
		}
	}

	public function  upload_template($token){
		if ($token == $this->_token) {
			//Buat template upload
		}else {
			redirect('Auth');
		}
	}



};

