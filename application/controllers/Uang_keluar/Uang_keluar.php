<?php
require APPPATH. '/controllers/Uang_keluar/Uang_keluar_config.php';

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_keluar extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Uang_keluar/Uang_keluar_model','tmodel');
		$this->log_key ='log_Uang_keluar';
		$this->title = new Uang_keluar_config();
   }


	public function index(){
		$data = array(
			'title_page_big'		=> 'DAFTAR',
			'title'					=> $this->title,
			'link_refresh_table'	=> site_url().'Uang_keluar/Uang_keluar/refresh_table/'.$this->_token,
			'link_create'			=> site_url().'Uang_keluar/Uang_keluar/create',
			'link_update'			=> site_url().'Uang_keluar/Uang_keluar/update',
			'link_delete'			=> site_url().'Uang_keluar/Uang_keluar/delete_multiple',
			'link_view'				=> site_url().'Uang_keluar/Uang_keluar/view',			
		);
		
		$this->template->load('Uang_keluar/Uang_keluar_list',$data);
	}

	public function refresh_table($token){
		if($token==$this->_token){
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
			

		}else{
			redirect('Auth');
		}
	}

	public function create(){
		$data = array(
			'title_page_big'		=> 'Buat Baru',
			'title'					=> $this->title,
			'link_save'				=> site_url().'Uang_keluar/Uang_keluar/create_action',
			'link_save_update'		=> site_url().'Uang_keluar/Uang_keluar/update_action',
			'link_refresh_table'	=> site_url().'Uang_keluar_detail/Uang_keluar_detail/refresh_table/'.$this->_token,
			'link_back'				=> $this->agent->referrer(),'link_refresh_table'	=> site_url().'Uang_keluar_detail/Uang_keluar_detail/refresh_table/'.$this->_token.'/xxxx',
			'link_delete'			=> site_url().'Uang_keluar_detail/Uang_keluar_detail/delete_multiple',
			'link_save_detail'		=> site_url().'Uang_keluar_detail/Uang_keluar_detail/create_action',
			'link_update_detail'			=> site_url().'Uang_keluar_detail/Uang_keluar_detail/update_action',
			'link_refresh_table_tas'	=> site_url().'Uang_keluar_tas/Uang_keluar_tas/refresh_table/'.$this->_token.'/xxxx',
			'link_delete_tas'			=> site_url().'Uang_keluar_tas/Uang_keluar_tas/delete_multiple',
			'link_save_detail_tas'		=> site_url().'Uang_keluar_tas/Uang_keluar_tas/create_action',
			'link_update_detail_tas'			=> site_url().'Uang_keluar_tas/Uang_keluar_tas/update_action',			
		);
		
		$this->template->load('Uang_keluar/Uang_keluar_form',$data);

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
		if(!$o->not_empty($val['no'],'#no')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('no'=>$val['no']);
		$exist = $this->tmodel->if_exist('',$field);
		if(!$o->not_exist($exist,'#no')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['cabang_id'],'#cabang_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['tanggal_pengiriman'],'#tanggal_pengiriman')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['waktu_kirim'],'#waktu_kirim')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['waktu_serah_terima'],'#waktu_serah_terima')){
			echo $o->result();	
			return;
		}

		unset($val['id']);
		unset($val['bank_id']);

		//ambil sentra pengelola dari cabang yang dipilih

		$this->load->model('Cabang_cpc/Cabang_cpc_model','cabang');
		$cb=$this->cabang->get_by_id($val['cabang_id']);
		$val['sentra_kas_id']= $cb->sentra_kas_id;

		
		$val['user_input']= $this->_user_id;


		$success = $this->tmodel->insert($val);
		
		echo $o->auto_result($success,'',$this->tmodel->id);

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
				'title_page_big'		=> 'Edit Penerimaan Uang',
				'title'					=> $this->title,
				'link_save'				=> site_url().'Uang_keluar/Uang_keluar/update_action',
				'link_back'				=> $this->agent->referrer(),
				'data'					=> $row,
				'id'					=> $id_generate,
				'uang_keluar_id'			=> $id,
				'link_refresh_table'	=> site_url().'Uang_keluar_detail/Uang_keluar_detail/refresh_table/'.$this->_token.'/'.$id,
				'link_delete'			=> site_url().'Uang_keluar_detail/Uang_keluar_detail/delete_multiple',
				'link_save_detail'		=> site_url().'Uang_keluar_detail/Uang_keluar_detail/create_action',
				'link_update_detail'			=> site_url().'Uang_keluar_detail/Uang_keluar_detail/update_action',
				'link_refresh_table_tas'	=> site_url().'Uang_keluar_tas/Uang_keluar_tas/refresh_table/'.$this->_token.'/'.$id,
				'link_delete_tas'			=> site_url().'Uang_keluar_tas/Uang_keluar_tas/delete_multiple',
				'link_save_detail_tas'		=> site_url().'Uang_keluar_tas/Uang_keluar_tas/create_action',
				'link_update_detail_tas'			=> site_url().'Uang_keluar_tas/Uang_keluar_tas/update_action',
			);
			
			$this->template->load('Uang_keluar/Uang_keluar_form',$data);
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
		if(!$o->not_empty($val['no'],'#no')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=array('no'=>$val['no']);
		$exist = $this->tmodel->if_exist($val['id'],$field);
		if(!$o->not_exist($exist,'#no')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['cabang_id'],'#cabang_id')){
			echo $o->result();	
			return;
		}

		//ambil sentra pengelola dari cabang yang dipilih

		$this->load->model('Cabang_cpc/Cabang_cpc_model','cabang');
		$cb=$this->cabang->get_by_id($val['cabang_id']);
		$val['sentra_kas_id']= $cb->sentra_kas_id;

		//mencegah data kosong
		if(!$o->not_empty($val['tanggal_pengiriman'],'#tanggal_pengiriman')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['waktu_kirim'],'#waktu_kirim')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['waktu_serah_terima'],'#waktu_serah_terima')){
			echo $o->result();	
			return;
		}

		unset($val['bank_id']);

		$val['user_update']=$this->_user_id;	
		$val['update_time']=date('Y-m-d H:i:s', now());
	


		$success = $this->tmodel->update($val['id'],$val);
		echo $o->auto_result($success,'',$val['id']);

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
			$o->message	= 'Opps..Gagal menghapus data, pastikan data yang akan dihapus belum ada yang di proses !!';
		}
		
		
		echo $o->result();
	
	}

	public function view($id){
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

			//Pecahan kertas
			
			$pecahan['1-100000']=0;
			$pecahan['1-75000']=0;
			$pecahan['1-50000']=0;
			$pecahan['1-20000']=0;
			$pecahan['1-10000']=0;
			$pecahan['1-5000']=0;
			$pecahan['1-2000']=0;
			$pecahan['1-1000']=0;
			$pecahan['1-500']=0;

			$pecahan['L-1-100000']=0;
			$pecahan['L-1-75000']=0;
			$pecahan['L-1-50000']=0;
			$pecahan['L-1-20000']=0;
			$pecahan['L-1-10000']=0;
			$pecahan['L-1-5000']=0;
			$pecahan['L-1-2000']=0;
			$pecahan['L-1-1000']=0;
			$pecahan['L-1-500']=0;

			//Pecahan logam

			$pecahan['2-1000']=0;
			$pecahan['2-500']=0;
			$pecahan['2-200']=0;
			$pecahan['2-100']=0;

			$pecahan['L-2-1000']=0;
			$pecahan['L-2-500']=0;
			$pecahan['L-2-200']=0;
			$pecahan['L-2-100']=0;

			//Total lembaran/koin

			$pecahan['L-1']=0;
			$pecahan['L-2']=0;

			$p=$this->tmodel->get_pecahan($id);
			
			
			foreach($p as $r){

				//Pecahan				
				$pecahan[$r->jenis_uang_id.'-'.$r->pecahan]=$r->jumlah;
				//Lembaran/koin
				$pecahan['L-'.$r->jenis_uang_id.'-'.$r->pecahan]=$r->jumlah/$r->pecahan;
				//Total lembaran/koin
				$pecahan['L-'.$r->jenis_uang_id]+=$pecahan['L-'.$r->jenis_uang_id.'-'.$r->pecahan];
			}

			
			$pecahan['L']=$pecahan['L-1']+$pecahan['L-2'];


			// Segel 

			$this->load->model('Uang_keluar_tas/Uang_keluar_tas_model','tas');

			$t=$this->tas->get_all($id);

			$data['row']=$row;	
			$data['pecahan']=$pecahan;
			$data['tas']=$t;
			$data['total']=$this->tmodel->get_summary($id);
			
			$this->load->view('Uang_keluar/Berita_acara',$data);
		}else{
			redirect($this->agent->referrer());
		}
	}

};

