<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_selisih extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Uang_selisih/Uang_selisih_model','tmodel');
		$this->log_key ='log_Uang_selisih';
   }
   public function index(){	
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
		if(!$o->not_empty($val['uang_masuk_id'],'#uang_masuk_id')){
			echo $o->result();	
			return;
		}

		
		//mencegah data kosong
		// if(!$o->not_empty($val['up'],'#up')){
		// 	echo $o->result();	
		// 	return;
		// }

		//mencegah data kosong
		if(!$o->not_empty($val['mulai_proses'],'#mulai_proses')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['selesai_proses'],'#selesai_proses')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['nama_oa'],'#nama_oa')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['kasir_ttp'],'#kasir_ttp')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['ditemukan_oleh'],'#ditemukan_oleh')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['ditemukan_id'],'#ditemukan_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['disaksikan_oleh'],'#disaksikan_oleh')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['disaksikan_id'],'#disaksikan_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['diketahui_oleh'],'#diketahui_oleh')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['diketahui_id'],'#diketahui_id')){
			echo $o->result();	
			return;
		}
		$kode_sentra=$val['kode_sentra'];
		unset($val['kode_sentra']);
		//mencegah data double
		$field=array('uang_masuk_id'=>$val['uang_masuk_id']);
		$exist = $this->tmodel->if_exist('',$field);
		if($exist){
			
			$val['user_update']=$this->_user_id;	
			$val['update_time']=date('Y-m-d H:i:s', now());
			$success = $this->tmodel->update($val['id'],$val);
		}
		else{		
			$val['no']=$this->create_auto_number($kode_sentra);
			$val['user_input']= $this->_user_id;
			unset($val['id']);
			$success = $this->tmodel->insert($val);	
		}
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
	private function create_auto_number($sentra){
		$year=date('Y', now());
		$count=$this->tmodel->get_count("no like '%".$sentra."%' and no like '%$year'");
		$i= $count->jumlah + 1;
		$j = str_pad($i, 4, '0', STR_PAD_LEFT);
		$str='SSI/'.$sentra.'/'. $j  .'/'. date('Y', now());
		return $str;
	}
};

