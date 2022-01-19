<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bank_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_bank.id as id,
			app_bank.kode_bank as kode_bank,
			app_bank.bank as bank,
			app_bank.dashboard as dashboard,
			app_bank.deskripsi as deskripsi,
			app_bank.user_input as user_input,
			app_bank.input_time as input_time,
			app_bank.user_update as user_update,
			app_bank.update_time as update_time,
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
		
		$this->datatables->from('app_bank');
	
		$this->datatables->join('sys_user userinput','userinput.id=app_bank.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_bank.user_update','LEFT'); 

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_bank.id as id',
			'app_bank.kode_bank as kode_bank',
			'app_bank.bank as bank',
			'app_bank.dashboard as dashboard',
			'app_bank.deskripsi as deskripsi',
			'app_bank.user_input as user_input',
			'app_bank.input_time as input_time',
			'app_bank.user_update as user_update',
			'app_bank.update_time as update_time',
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
		$this->db->join('sys_user userinput','userinput.id=app_bank.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_bank.user_update','LEFT'); 

		$this->db->order_by('app_bank.id', 'ASC');
		return $this->db->get('app_bank')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_bank.id as id',
			'app_bank.kode_bank as kode_bank',
			'app_bank.bank as bank',
			'app_bank.dashboard as dashboard',
			'app_bank.deskripsi as deskripsi',
			'app_bank.user_input as user_input',
			'app_bank.input_time as input_time',
			'app_bank.user_update as user_update',
			'app_bank.update_time as update_time',
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
		$this->db->join('sys_user userinput','userinput.id=app_bank.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_bank.user_update','LEFT'); 

		$this->db->where('app_bank.id', $id);
		$this->db->order_by('app_bank.id', 'ASC');
		return $this->db->get('app_bank')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_bank.id <>',$id);

		$q = $this->db->get_where('app_bank', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_bank', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_bank.id', $id);
		$this->db->update('app_bank', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_bank.id',$data);	
	
			$this->db->delete('app_bank');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_bank', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
