<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cabang_cpc_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_cabang_cpc.id as id,
			app_cabang_cpc.bank_wilayah_id as bank_wilayah_id,
			app_cabang_cpc.nama_cabang as nama_cabang,
			app_cabang_cpc.alamat as alamat,
			app_cabang_cpc.deskripsi as deskripsi,
			app_cabang_cpc.sentra_kas_id as sentra_kas_id,
			app_cabang_cpc.user_input as user_input,
			app_cabang_cpc.input_time as input_time,
			app_cabang_cpc.user_update as user_update,
			app_cabang_cpc.update_time as update_time,
			wilayah.id as wilayah_id,
			wilayah.bank_id as bank_id,
			wilayah.kode_wilayah as kode_wilayah,
			wilayah.nama_wilayah as nama_wilayah,
			wilayah.deskripsi as wilayah_deskripsi,
			wilayah.user_input as wilayah_user_input,
			wilayah.input_time as wilayah_input_time,
			wilayah.user_update as wilayah_user_update,
			wilayah.update_time as wilayah_update_time,
			sentrakas.id as sentrakas_id,
			sentrakas.kode_sentra as kode_sentra,
			sentrakas.sentra as sentra,
			sentrakas.nama_sentra as nama_sentra,
			sentrakas.alamat as sentrakas_alamat,
			sentrakas.user_input as sentrakas_user_input,
			sentrakas.input_time as sentrakas_input_time,
			sentrakas.user_update as sentrakas_user_update,
			sentrakas.update_time as sentrakas_update_time,
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
		
		$this->datatables->from('app_cabang_cpc');
	
		$this->datatables->join('app_bank_wilayah wilayah','wilayah.id=app_cabang_cpc.bank_wilayah_id','LEFT'); 
	
		$this->datatables->join('app_sentra_kas sentrakas','sentrakas.id=app_cabang_cpc.sentra_kas_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_cabang_cpc.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_cabang_cpc.user_update','LEFT'); 

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_cabang_cpc.id as id',
			'app_cabang_cpc.bank_wilayah_id as bank_wilayah_id',
			'app_cabang_cpc.nama_cabang as nama_cabang',
			'app_cabang_cpc.alamat as alamat',
			'app_cabang_cpc.deskripsi as deskripsi',
			'app_cabang_cpc.sentra_kas_id as sentra_kas_id',
			'app_cabang_cpc.user_input as user_input',
			'app_cabang_cpc.input_time as input_time',
			'app_cabang_cpc.user_update as user_update',
			'app_cabang_cpc.update_time as update_time',
			'wilayah.id as wilayah_id',
			'wilayah.bank_id as bank_id',
			'wilayah.kode_wilayah as kode_wilayah',
			'wilayah.nama_wilayah as nama_wilayah',
			'wilayah.deskripsi as wilayah_deskripsi',
			'wilayah.user_input as wilayah_user_input',
			'wilayah.input_time as wilayah_input_time',
			'wilayah.user_update as wilayah_user_update',
			'wilayah.update_time as wilayah_update_time',
			'sentrakas.id as sentrakas_id',
			'sentrakas.kode_sentra as kode_sentra',
			'sentrakas.sentra as sentra',
			'sentrakas.nama_sentra as nama_sentra',
			'sentrakas.alamat as sentrakas_alamat',
			'sentrakas.user_input as sentrakas_user_input',
			'sentrakas.input_time as sentrakas_input_time',
			'sentrakas.user_update as sentrakas_user_update',
			'sentrakas.update_time as sentrakas_update_time',
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
		$this->db->join('app_bank_wilayah wilayah','wilayah.id=app_cabang_cpc.bank_wilayah_id','LEFT'); 
		$this->db->join('app_sentra_kas sentrakas','sentrakas.id=app_cabang_cpc.sentra_kas_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_cabang_cpc.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_cabang_cpc.user_update','LEFT'); 

		$this->db->order_by('app_cabang_cpc.id', 'ASC');
		return $this->db->get('app_cabang_cpc')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_cabang_cpc.id as id',
			'app_cabang_cpc.bank_wilayah_id as bank_wilayah_id',
			'app_cabang_cpc.nama_cabang as nama_cabang',
			'app_cabang_cpc.alamat as alamat',
			'app_cabang_cpc.deskripsi as deskripsi',
			'app_cabang_cpc.sentra_kas_id as sentra_kas_id',
			'app_cabang_cpc.user_input as user_input',
			'app_cabang_cpc.input_time as input_time',
			'app_cabang_cpc.user_update as user_update',
			'app_cabang_cpc.update_time as update_time',
			'wilayah.id as wilayah_id',
			'wilayah.bank_id as bank_id',
			'wilayah.kode_wilayah as kode_wilayah',
			'wilayah.nama_wilayah as nama_wilayah',
			'wilayah.deskripsi as wilayah_deskripsi',
			'wilayah.user_input as wilayah_user_input',
			'wilayah.input_time as wilayah_input_time',
			'wilayah.user_update as wilayah_user_update',
			'wilayah.update_time as wilayah_update_time',
			'sentrakas.id as sentrakas_id',
			'sentrakas.kode_sentra as kode_sentra',
			'sentrakas.sentra as sentra',
			'sentrakas.nama_sentra as nama_sentra',
			'sentrakas.alamat as sentrakas_alamat',
			'sentrakas.user_input as sentrakas_user_input',
			'sentrakas.input_time as sentrakas_input_time',
			'sentrakas.user_update as sentrakas_user_update',
			'sentrakas.update_time as sentrakas_update_time',
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
		$this->db->join('app_bank_wilayah wilayah','wilayah.id=app_cabang_cpc.bank_wilayah_id','LEFT'); 
		$this->db->join('app_sentra_kas sentrakas','sentrakas.id=app_cabang_cpc.sentra_kas_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_cabang_cpc.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_cabang_cpc.user_update','LEFT'); 

		$this->db->where('app_cabang_cpc.id', $id);
		$this->db->order_by('app_cabang_cpc.id', 'ASC');
		return $this->db->get('app_cabang_cpc')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_cabang_cpc.id <>',$id);

		$q = $this->db->get_where('app_cabang_cpc', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_cabang_cpc', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_cabang_cpc.id', $id);
		$this->db->update('app_cabang_cpc', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_cabang_cpc.id',$data);	
	
			$this->db->delete('app_cabang_cpc');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_cabang_cpc', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
