<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_selisih_detail_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json($uang_masuk_id=null){
		$this->datatables->select('
			app_uang_selisih_detail.id as id,
			app_uang_selisih_detail.uang_masuk_id as uang_masuk_id,
			app_uang_selisih_detail.jenis_uang_id as jenis_uang_id,
			app_uang_selisih_detail.pecahan_id as pecahan_id,
			app_uang_selisih_detail.kategori_selisih_id as kategori_selisih_id,
			app_uang_selisih_detail.jumlah as jumlah,
			app_uang_selisih_detail.status as status,
			app_uang_selisih_detail.tanggal_pencatatan as tanggal_pencatatan,
			app_uang_selisih_detail.keterangan as keterangan,
			app_uang_selisih_detail.user_input as user_input,
			app_uang_selisih_detail.input_time as input_time,
			app_uang_selisih_detail.user_update as user_update,
			app_uang_selisih_detail.update_time as update_time,
			um.id as um_id,
			um.no as no,
			um.cabang_id as cabang_id,
			um.sentra_kas_id as sentra_kas_id,
			um.jumlah_global as jumlah_global,
			um.status_penerimaan as status_penerimaan,
			um.tanggal_penerimaan as tanggal_penerimaan,
			um.waktu_tiba as waktu_tiba,
			um.waktu_serah_terima as waktu_serah_terima,
			um.no_kendaraan as no_kendaraan,
			um.diserahkan_oleh as diserahkan_oleh,
			um.diterima_oleh as diterima_oleh,
			um.detail_tas as detail_tas,
			um.keterangan as um_keterangan,
			um.user_input as um_user_input,
			um.input_time as um_input_time,
			um.user_update as um_user_update,
			um.update_time as um_update_time,
			j.id as j_id,
			j.jenis_uang as jenis_uang,
			j.keterangan as j_keterangan,
			j.user_input as j_user_input,
			j.input_time as j_input_time,
			j.user_update as j_user_update,
			j.update_time as j_update_time,
			p.id as p_id,
			p.pecahan as pecahan,
			p.keterangan as p_keterangan,
			p.user_input as p_user_input,
			p.input_time as p_input_time,
			p.user_update as p_user_update,
			p.update_time as p_update_time,
			k.id as k_id,
			k.nama_selisih as nama_selisih,
			k.jenis_selisih as jenis_selisih,
			k.user_input as k_user_input,
			k.input_time as k_input_time,
			k.user_update as k_user_update,
			k.update_time as k_update_time,
			userinput.id as userinput_id,
			userinput.nmuser as nmuser,
			userinput.passuser as passuser,
			userinput.nama_lengkap as nama_lengkap,
			userinput.tanda_tangan as tanda_tangan,
			userinput.opt_level as opt_level,
			userinput.opt_status as opt_status,
			userinput.picture as picture,
			userupdate.id as userupdate_id,
			userupdate.nmuser as userupdate_nmuser,
			userupdate.passuser as userupdate_passuser,
			userupdate.nama_lengkap as userupdate_nama_lengkap,
			userupdate.tanda_tangan as userupdate_tanda_tangan,
			userupdate.opt_level as userupdate_opt_level,
			userupdate.opt_status as userupdate_opt_status,
			userupdate.picture as userupdate_picture,
		');
		
		$this->datatables->from('app_uang_selisih_detail');
	
		$this->datatables->join('app_uang_masuk um','um.id=app_uang_selisih_detail.uang_masuk_id','LEFT'); 
	
		$this->datatables->join('app_jenis_uang j','j.id=app_uang_selisih_detail.jenis_uang_id','LEFT'); 
	
		$this->datatables->join('app_pecahan p','p.id=app_uang_selisih_detail.pecahan_id','LEFT'); 
	
		$this->datatables->join('app_kategori_selisih k','k.id=app_uang_selisih_detail.kategori_selisih_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_uang_selisih_detail.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_uang_selisih_detail.user_update','LEFT'); 

		if($uang_masuk_id!==null){
			$this->datatables->where('uang_masuk_id',$uang_masuk_id);
		}
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all($w=null){
		$afield = array(
			'app_uang_selisih_detail.id as id',
			'app_uang_selisih_detail.uang_masuk_id as uang_masuk_id',
			'app_uang_selisih_detail.jenis_uang_id as jenis_uang_id',
			'app_uang_selisih_detail.pecahan_id as pecahan_id',
			'app_uang_selisih_detail.kategori_selisih_id as kategori_selisih_id',
			'app_uang_selisih_detail.jumlah as jumlah',
			'app_uang_selisih_detail.status as status',
			'app_uang_selisih_detail.tanggal_pencatatan as tanggal_pencatatan',
			'app_uang_selisih_detail.keterangan as keterangan',
			'app_uang_selisih_detail.user_input as user_input',
			'app_uang_selisih_detail.input_time as input_time',
			'app_uang_selisih_detail.user_update as user_update',
			'app_uang_selisih_detail.update_time as update_time',
			'um.id as um_id',
			'um.no as no',
			'um.cabang_id as cabang_id',
			'um.sentra_kas_id as sentra_kas_id',
			'um.jumlah_global as jumlah_global',
			'um.status_penerimaan as status_penerimaan',
			'um.tanggal_penerimaan as tanggal_penerimaan',
			'um.waktu_tiba as waktu_tiba',
			'um.waktu_serah_terima as waktu_serah_terima',
			'um.no_kendaraan as no_kendaraan',
			'um.diserahkan_oleh as diserahkan_oleh',
			'um.diterima_oleh as diterima_oleh',
			'um.detail_tas as detail_tas',
			'um.keterangan as um_keterangan',
			'um.user_input as um_user_input',
			'um.input_time as um_input_time',
			'um.user_update as um_user_update',
			'um.update_time as um_update_time',
			'j.id as j_id',
			'j.jenis_uang as jenis_uang',
			'j.keterangan as j_keterangan',
			'j.user_input as j_user_input',
			'j.input_time as j_input_time',
			'j.user_update as j_user_update',
			'j.update_time as j_update_time',
			'p.id as p_id',
			'p.pecahan as pecahan',
			'p.keterangan as p_keterangan',
			'p.user_input as p_user_input',
			'p.input_time as p_input_time',
			'p.user_update as p_user_update',
			'p.update_time as p_update_time',
			'k.id as k_id',
			'k.nama_selisih as nama_selisih',
			'k.jenis_selisih as jenis_selisih',
			'k.user_input as k_user_input',
			'k.input_time as k_input_time',
			'k.user_update as k_user_update',
			'k.update_time as k_update_time',
			'userinput.id as userinput_id',
			'userinput.nmuser as nmuser',
			'userinput.passuser as passuser',
			'userinput.nama_lengkap as nama_lengkap',
			'userinput.tanda_tangan as tanda_tangan',
			'userinput.opt_level as opt_level',
			'userinput.opt_status as opt_status',
			'userinput.picture as picture',
			'userupdate.id as userupdate_id',
			'userupdate.nmuser as userupdate_nmuser',
			'userupdate.passuser as userupdate_passuser',
			'userupdate.nama_lengkap as userupdate_nama_lengkap',
			'userupdate.tanda_tangan as userupdate_tanda_tangan',
			'userupdate.opt_level as userupdate_opt_level',
			'userupdate.opt_status as userupdate_opt_status',
			'userupdate.picture as userupdate_picture',
		
		);
		$this->db->select($afield);
		$this->db->join('app_uang_masuk um','um.id=app_uang_selisih_detail.uang_masuk_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=app_uang_selisih_detail.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_uang_selisih_detail.pecahan_id','LEFT'); 
		$this->db->join('app_kategori_selisih k','k.id=app_uang_selisih_detail.kategori_selisih_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_selisih_detail.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_selisih_detail.user_update','LEFT'); 

		if($w !== null){
			$this->db->where($w);
		}
		
		$this->db->order_by('app_uang_selisih_detail.id', 'ASC');
		return $this->db->get('app_uang_selisih_detail')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_uang_selisih_detail.id as id',
			'app_uang_selisih_detail.uang_masuk_id as uang_masuk_id',
			'app_uang_selisih_detail.jenis_uang_id as jenis_uang_id',
			'app_uang_selisih_detail.pecahan_id as pecahan_id',
			'app_uang_selisih_detail.kategori_selisih_id as kategori_selisih_id',
			'app_uang_selisih_detail.jumlah as jumlah',
			'app_uang_selisih_detail.status as status',
			'app_uang_selisih_detail.tanggal_pencatatan as tanggal_pencatatan',
			'app_uang_selisih_detail.keterangan as keterangan',
			'app_uang_selisih_detail.user_input as user_input',
			'app_uang_selisih_detail.input_time as input_time',
			'app_uang_selisih_detail.user_update as user_update',
			'app_uang_selisih_detail.update_time as update_time',
			'um.id as um_id',
			'um.no as no',
			'um.cabang_id as cabang_id',
			'um.sentra_kas_id as sentra_kas_id',
			'um.jumlah_global as jumlah_global',
			'um.status_penerimaan as status_penerimaan',
			'um.tanggal_penerimaan as tanggal_penerimaan',
			'um.waktu_tiba as waktu_tiba',
			'um.waktu_serah_terima as waktu_serah_terima',
			'um.no_kendaraan as no_kendaraan',
			'um.diserahkan_oleh as diserahkan_oleh',
			'um.diterima_oleh as diterima_oleh',
			'um.detail_tas as detail_tas',
			'um.keterangan as um_keterangan',
			'um.user_input as um_user_input',
			'um.input_time as um_input_time',
			'um.user_update as um_user_update',
			'um.update_time as um_update_time',
			'j.id as j_id',
			'j.jenis_uang as jenis_uang',
			'j.keterangan as j_keterangan',
			'j.user_input as j_user_input',
			'j.input_time as j_input_time',
			'j.user_update as j_user_update',
			'j.update_time as j_update_time',
			'p.id as p_id',
			'p.pecahan as pecahan',
			'p.keterangan as p_keterangan',
			'p.user_input as p_user_input',
			'p.input_time as p_input_time',
			'p.user_update as p_user_update',
			'p.update_time as p_update_time',
			'k.id as k_id',
			'k.nama_selisih as nama_selisih',
			'k.jenis_selisih as jenis_selisih',
			'k.user_input as k_user_input',
			'k.input_time as k_input_time',
			'k.user_update as k_user_update',
			'k.update_time as k_update_time',
			'userinput.id as userinput_id',
			'userinput.nmuser as nmuser',
			'userinput.passuser as passuser',
			'userinput.nama_lengkap as nama_lengkap',
			'userinput.tanda_tangan as tanda_tangan',
			'userinput.opt_level as opt_level',
			'userinput.opt_status as opt_status',
			'userinput.picture as picture',
			'userupdate.id as userupdate_id',
			'userupdate.nmuser as userupdate_nmuser',
			'userupdate.passuser as userupdate_passuser',
			'userupdate.nama_lengkap as userupdate_nama_lengkap',
			'userupdate.tanda_tangan as userupdate_tanda_tangan',
			'userupdate.opt_level as userupdate_opt_level',
			'userupdate.opt_status as userupdate_opt_status',
			'userupdate.picture as userupdate_picture',
		
		);
		$this->db->select($afield);
		$this->db->join('app_uang_masuk um','um.id=app_uang_selisih_detail.uang_masuk_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=app_uang_selisih_detail.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_uang_selisih_detail.pecahan_id','LEFT'); 
		$this->db->join('app_kategori_selisih k','k.id=app_uang_selisih_detail.kategori_selisih_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_selisih_detail.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_selisih_detail.user_update','LEFT'); 

		$this->db->where('app_uang_selisih_detail.id', $id);
		$this->db->order_by('app_uang_selisih_detail.id', 'ASC');
		return $this->db->get('app_uang_selisih_detail')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_uang_selisih_detail.id <>',$id);

		$q = $this->db->get_where('app_uang_selisih_detail', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_uang_selisih_detail', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_uang_selisih_detail.id', $id);
		$this->db->update('app_uang_selisih_detail', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_uang_selisih_detail.id',$data);	
	
			$this->db->delete('app_uang_selisih_detail');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_uang_selisih_detail', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
