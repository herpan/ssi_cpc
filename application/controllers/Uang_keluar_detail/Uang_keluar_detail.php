<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_keluar_detail extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Uang_keluar_detail/Uang_keluar_detail_model','tmodel');
		$this->load->model('Pecahan/Pecahan_model','pecahan');
		$this->load->model('Uang_keluar/Uang_keluar_model','uang_keluar');
		$this->log_key ='log_Uang_keluar_detail';
		
   }
   public function index(){	
   }

	public function refresh_table($token,$uang_keluar_id=null){
		if($token==$this->_token){
			$row = $this->tmodel->json($uang_keluar_id);
			
			
			$o = new Outputview();
			$o->success	= 'true';
			$o->serverside	= 'true';
			$o->message	= $row;
			
			echo $o->result();
			

		}else{
			redirect('Auth');
		}
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
		if(!$o->not_empty($val['uang_keluar_id'],'#uang_keluar_id')){
			echo $o->result();	
			return;
		}


		$uk=$this->uang_keluar->get_by_id($val['uang_keluar_id']);
		

		//mencegah data kosong
		if(!$o->not_empty($val['jenis_uang_id'],'#jenis_uang_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['pecahan_id'],'#pecahan_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['emisi_id'],'#emisi_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['kondisi_id'],'#kondisi_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['jumlah'],'#jumlah')){
			echo $o->result();	
			return;
		}

		//mencegah data double
		$field=[
			'uang_keluar_id'=>$val['uang_keluar_id'],
			'jenis_uang_id'=>$val['jenis_uang_id'],
			'pecahan_id'=>$val['pecahan_id'],
			'emisi_id'=>$val['emisi_id'],
			'kondisi_id'=>$val['kondisi_id'],
			];

		$exist = $this->tmodel->if_exist('',$field);
		$o->message = 'Jenis uang dan pecahan dengan emisi dan kondisi yang di input sudah ada';
		if(!$o->not_exist($exist,'#jumlah')){
			echo $o->result();	
			return;
		}

		$pecahan = $this->pecahan->get_by_id($val['pecahan_id']);	

		$w=['bank_id'=>$uk->bank_id,
			'jenis_uang_id'=>$val['jenis_uang_id'],
			'pecahan_id'=>$val['pecahan_id'],
			'emisi_id'=>$val['emisi_id'],			
		   ];

		$saldo=$this->tmodel->saldo($w,$uk->sentra_kas_id);

		if(($val['jenis_uang_id']==1) && ($pecahan->pecahan<500)){
			$val['pecahan_id']='';
            $o->message = 'Jenis uang kertas hanya untuk pecahan lebih dari 500';
			if(!$o->not_empty($val['pecahan_id'],'#pecahan_id')){
				echo $o->result();	
				return;
			}			
		}
		elseif(($val['jenis_uang_id']==2) && ($pecahan->pecahan>1000)){
			$val['pecahan_id']='';
            $o->message = 'Jenis uang logam hanya untuk pecahan lebih kecil dari 1.000';
			if(!$o->not_empty($val['pecahan_id'],'#pecahan_id')){
				echo $o->result();	
				return;
			}			
		}
		elseif(($val['jumlah'] % $pecahan->pecahan) !== 0){
			$val['jumlah']='';
            $o->message = 'Jumlah tidak sesuai dengan pecahan';
			if(!$o->not_empty($val['jumlah'],'#jumlah')){
				echo $o->result();	
				return;
			}			
		}elseif($saldo-$val['jumlah']<0){
			$val['jumlah']='';
            $o->message = 'Saldo tidak mencukupi';
			if(!$o->not_empty($val['jumlah'],'#jumlah')){
				echo $o->result();	
				return;
			}
		}

		

		unset($val['id']);
		unset($val['bank_id']);			
		unset($val['sentra_kas_id']);

		$val['user_input']= $this->_user_id;
		   
		$success = $this->tmodel->insert($val);
		echo $o->auto_result($success);

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
		if(!$o->not_empty($val['uang_keluar_id'],'#uang_keluar_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['jenis_uang_id'],'#jenis_uang_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['pecahan_id'],'#pecahan_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['emisi_id'],'#emisi_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['kondisi_id'],'#kondisi_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['jumlah'],'#jumlah')){
			echo $o->result();	
			return;
		}


		$success = $this->tmodel->update($val['id'],$val);
		echo $o->auto_result($success);

	}

	public function delete_multiple(){
		$data=$this->input->get('data_ajax',true);
		$val=json_decode($data,true);
		$data = explode(',',$val['data_delete']);

		//get key generate
		// $log_id = $this->session->userdata($this->log_key);
		// $xx=0;
		// foreach($data as $value){
		// 	$value =  _decode_id($value,$log_id);
		// 	//menganti ke id asli
		// 	$data[$xx] = $value;
		// 	$xx++;	
		// }
		
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

};

