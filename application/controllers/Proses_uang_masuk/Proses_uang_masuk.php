<?php
require APPPATH. '/controllers/Uang_masuk/Uang_masuk_config.php';

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Proses_uang_masuk extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Uang_masuk/Uang_masuk_model','tmodel');
		$this->log_key ='log_Uang_masuk';
		$this->title = new Uang_masuk_config();
   }


	public function index(){
		$data = array(
			'title_page_big'		=> 'DAFTAR PROSES UANG MASUK',
			'title'					=> $this->title,
			'link_refresh_table'	=> site_url().'Proses_uang_masuk/Proses_uang_masuk/refresh_table/'.$this->_token,
			'link_update'			=> site_url().'Proses_uang_masuk/Proses_uang_masuk/update',
			'link_delete'			=> site_url().'Proses_uang_masuk/Proses_uang_masuk/delete_multiple',
			'link_view'				=> site_url().'Proses_uang_masuk/Proses_uang_masuk/view',			
		);
		
		$this->template->load('Proses_uang_masuk/Proses_uang_masuk_list',$data);
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

		$this->load->model('Uang_selisih/Uang_selisih_model','selisih');

		$row_selisih=$this->selisih->get_by_id($id,true);
		
		if($row){
			$data = array(
				'title_page_big'		=> 'Proses Uang Masuk',
				'title'					=> $this->title,
				'link_save'				=> site_url().'Proses_uang_masuk/Proses_uang_masuk/update_action',
				'link_back'				=> $this->agent->referrer(),
				'data'					=> $row,
				'data_selisih'			=> $row_selisih,
				'id'					=> $id_generate,
				'uang_masuk_id'			=> $id,
				'link_refresh_table'	=> site_url().'Uang_masuk_detail/Uang_masuk_detail/refresh_table2/'.$this->_token.'/'.$id,
				'link_refresh_proses'	=> site_url().'Proses/Proses/refresh_table/'.$this->_token.'/'.$id,
				'link_refresh_selisih'	=> site_url().'Uang_masuk_detail/Uang_masuk_detail/refresh_table/'.$this->_token.'/'.$id.'/selisih',
				'link_refresh_penjelasan'	=> site_url().'Penjelasan_selisih/Penjelasan_selisih/refresh_table/'.$this->_token.'/'.$id,
				'link_delete_proses'	=> site_url().'Proses/Proses/delete_multiple',
				'link_save_proses'		=> site_url().'Proses/Proses/create_action',
				'link_update_proses'	=> site_url().'Proses/Proses/update_action',
				'link_save_ba_selisih'				=> site_url().'Uang_selisih/Uang_selisih/update_action',
				'action_link_selisih_detail'		=> site_url().'Uang_masuk_detail/Uang_masuk_detail/create_action',
				'link_delete_selisih_detail'		=> site_url().'Uang_masuk_detail/Uang_masuk_detail/delete_multiple',
				'action_link_penjelasan'		=> site_url().'Penjelasan_selisih/Penjelasan_selisih/create_action',
				'link_delete_penjelasan'		=> site_url().'Penjelasan_selisih/Penjelasan_selisih/delete_multiple',		
			);
			
			$this->template->load('Proses_uang_masuk/Proses_uang_masuk_form',$data);
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
		if(!$o->not_empty($val['tanggal_penerimaan'],'#tanggal_penerimaan')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['waktu_tiba'],'#waktu_tiba')){
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
		echo $o->auto_result($success);

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

		$this->load->model('Penjelasan_selisih/Penjelasan_selisih_model','penjelasan');

		$this->load->model('Uang_masuk_tas/Uang_masuk_tas_model','tas');

		$this->load->model('Uang_selisih/Uang_selisih_model','selisih');

				
		$row = $this->tmodel->get_by_id($id);

		
		
		if($row){

			$row2 = $this->penjelasan->get_all($id);

			$row3=$this->tas->get_all($id);

			$row4=$this->selisih->get_by_id($id,true);
		
			foreach($row3 as $tas){
				$data['no_segel'][]=$tas['no_segel'];
				$data['no_tas'][]=$tas['no_tas'];
				$data['keterangan_tas'][]=$tas['keterangan'];
			}

			$row5=$this->tmodel->get_selisih($id);

			foreach($row5 as $s){
				$data['s'.$s->jenis_uang_id.$s->pecahan.$s->kategori_selisih_id]=$s->jumlah;
			}
			
			
			


			// Segel 			

			$data['row']=$row;
			$data['row2']=$row2;
			$data['row4']=$row4;		
			
			
			$this->load->view('Proses_uang_masuk/Berita_acara_selisih',$data);
		}else{
			redirect($this->agent->referrer());
		}
	}
};