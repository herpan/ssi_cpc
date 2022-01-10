<?php
require APPPATH. '/controllers/Uang_masuk_detail/Uang_masuk_detail_config.php';

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_masuk_detail extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Uang_masuk_detail/Uang_masuk_detail_model','tmodel');
		$this->load->model('Pecahan/Pecahan_model','pecahan');
		$this->log_key ='log_Uang_masuk_detail';		
   }
   public function index(){	
   }
	public function refresh_table($token,$uang_masuk_id=null,$kategori_selisih_id=0){
		if($token==$this->_token){
			
			$row = $this->tmodel->json($uang_masuk_id,$kategori_selisih_id);
			
			
			$o = new Outputview();
			$o->success	= 'true';
			$o->serverside	= 'true';
			$o->message	= $row;
			
			echo $o->result();
			

		}else{
			redirect('Auth');
		}
	}

	public function refresh_table2($token,$uang_masuk_id=null){
		if($token==$this->_token){
			
			$row = $this->tmodel->json2($uang_masuk_id);
			
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
		$o->message = 'Silahkan simpan Form utama terlebih dahulu';

		if(!$o->not_empty($val['uang_masuk_id'],'#no')){
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

		

		//mencegah data double
		$field=[
			'uang_masuk_id'=>$val['uang_masuk_id'],
			'jenis_uang_id'=>$val['jenis_uang_id'],
			'pecahan_id'=>$val['pecahan_id'],
			'kategori_selisih_id'=>$val['kategori_selisih_id'],
			];

		$exist = $this->tmodel->if_exist('',$field);
		$o->message = 'Jenis uang dan pecahan yang di input sudah ada';
		if(!$o->not_exist($exist,'#jumlah')){
			echo $o->result();	
			return;
		}


		

		//mencegah data kosong
		if(!$o->not_empty($val['jumlah'],'#jumlah')){
			echo $o->result();	
			return;
		}


        //mencegah jumlah tidak valid

		$pecahan = $this->pecahan->get_by_id($val['pecahan_id']);	
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
		}

		//Mencegah input selisih lebih dari jumlah belum di proses

		if($val['kategori_selisih_id']!=='0' && $val['kategori_selisih_id']!=='4'){
			$cek_jumlah=$this->tmodel->cek_input_proses(['jenis_uang_id'=>$val['jenis_uang_id'],'pecahan_id'=>$val['pecahan_id']]);
			if(!$cek_jumlah){
				$val['jumlah']='';
				$o->message = 'Jenis uang dengan pecahan yang dipilih tidak ada pada daftar uang masuk';
				if(!$o->not_empty($val['jumlah'],'#jumlah2')){
					echo $o->result();	
					return;
				}
			}
			elseif($val['jumlah']>@$cek_jumlah->jumlah_belum_diproses){
				$val['jumlah']='';
				$o->message = 'Jumlah selisih kurang tidak boleh lebih besar dari sisa yang belum di proses';
				if(!$o->not_empty($val['jumlah'],'#jumlah2')){
					echo $o->result();	
					return;
				}	
			}
		}

		unset($val['id']);
	
		$val['user_input']= $this->_user_id;

		$success = $this->tmodel->insert($val);
		echo $o->auto_result($success);

	}

	public function update_action(){
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
		if(!$o->not_empty($val['uang_masuk_id'],'#uang_masuk_id')){
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

		//mencegah data double
		$field=[
			'uang_masuk_id'=>$val['uang_masuk_id'],
			'jenis_uang_id'=>$val['jenis_uang_id'],
			'pecahan_id'=>$val['pecahan_id'],
			'kategori_selisih_id'=>$val['kategori_selisih_id'],
			];

		$exist = $this->tmodel->if_exist($val['id'],$field);
		$o->message = 'Jenis uang dan pecahan yang di input sudah ada';
		if(!$o->not_exist($exist,'#pecahan_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['jumlah'],'#jumlah')){
			echo $o->result();	
			return;
		}

		$pecahan = $this->pecahan->get_by_id($val['pecahan_id']);	

		if(($val['jumlah'] % $pecahan->pecahan) !== 0){
			$val['jumlah']='';
            $o->message = 'Jumlah tidak sesuai dengan pecahan';
			if(!$o->not_empty($val['jumlah'],'#jumlah')){
				echo $o->result();	
				return;
			}			
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

