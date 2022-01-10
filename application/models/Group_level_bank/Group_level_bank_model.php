<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Group_level_bank_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_level_bank.id as id,
			app_level_bank.level_id as level_id,
			app_level_bank.bank_id as bank_id,
			app_level_bank.user_input as user_input,
			app_level_bank.input_time as input_time,
			app_level_bank.user_update as user_update,
			app_level_bank.update_time as update_time,
			l.id as l_id,
			l.nmlevel as nmlevel,
			l.opt_status as opt_status,
			b.id as b_id,
			b.kode_bank as kode_bank,
			b.bank as bank,
			b.deskripsi as deskripsi,
			b.user_input as b_user_input,
			b.input_time as b_input_time,
			b.user_update as b_user_update,
			b.update_time as b_update_time,
			userinput.id as userinput_id,
			userinput.nmuser as nmuser,
			userinput.passuser as passuser,
			userinput.nama_lengkap as nama_lengkap,
			userinput.tanda_tangan as tanda_tangan,
			userinput.opt_level as opt_level,
			userinput.opt_status as userinput_opt_status,
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
		
		$this->datatables->from('app_level_bank');
	
		$this->datatables->join('sys_level l','l.id=app_level_bank.level_id','LEFT'); 
	
		$this->datatables->join('app_bank b','b.id=app_level_bank.bank_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_level_bank.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_level_bank.user_update','LEFT'); 

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_level_bank.id as id',
			'app_level_bank.level_id as level_id',
			'app_level_bank.bank_id as bank_id',
			'app_level_bank.user_input as user_input',
			'app_level_bank.input_time as input_time',
			'app_level_bank.user_update as user_update',
			'app_level_bank.update_time as update_time',
			'l.id as l_id',
			'l.nmlevel as nmlevel',
			'l.opt_status as opt_status',
			'b.id as b_id',
			'b.kode_bank as kode_bank',
			'b.bank as bank',
			'b.deskripsi as deskripsi',
			'b.user_input as b_user_input',
			'b.input_time as b_input_time',
			'b.user_update as b_user_update',
			'b.update_time as b_update_time',
			'userinput.id as userinput_id',
			'userinput.nmuser as nmuser',
			'userinput.passuser as passuser',
			'userinput.nama_lengkap as nama_lengkap',
			'userinput.tanda_tangan as tanda_tangan',
			'userinput.opt_level as opt_level',
			'userinput.opt_status as userinput_opt_status',
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
		$this->db->join('sys_level l','l.id=app_level_bank.level_id','LEFT'); 
		$this->db->join('app_bank b','b.id=app_level_bank.bank_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_level_bank.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_level_bank.user_update','LEFT'); 

		$this->db->order_by('app_level_bank.id', 'ASC');
		return $this->db->get('app_level_bank')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_level_bank.id as id',
			'app_level_bank.level_id as level_id',
			'app_level_bank.bank_id as bank_id',
			'app_level_bank.user_input as user_input',
			'app_level_bank.input_time as input_time',
			'app_level_bank.user_update as user_update',
			'app_level_bank.update_time as update_time',
			'l.id as l_id',
			'l.nmlevel as nmlevel',
			'l.opt_status as opt_status',
			'b.id as b_id',
			'b.kode_bank as kode_bank',
			'b.bank as bank',
			'b.deskripsi as deskripsi',
			'b.user_input as b_user_input',
			'b.input_time as b_input_time',
			'b.user_update as b_user_update',
			'b.update_time as b_update_time',
			'userinput.id as userinput_id',
			'userinput.nmuser as nmuser',
			'userinput.passuser as passuser',
			'userinput.nama_lengkap as nama_lengkap',
			'userinput.tanda_tangan as tanda_tangan',
			'userinput.opt_level as opt_level',
			'userinput.opt_status as userinput_opt_status',
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
		$this->db->join('sys_level l','l.id=app_level_bank.level_id','LEFT'); 
		$this->db->join('app_bank b','b.id=app_level_bank.bank_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_level_bank.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_level_bank.user_update','LEFT'); 

		$this->db->where('app_level_bank.id', $id);
		$this->db->order_by('app_level_bank.id', 'ASC');
		return $this->db->get('app_level_bank')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_level_bank.id <>',$id);

		$q = $this->db->get_where('app_level_bank', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_level_bank', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_level_bank.id', $id);
		$this->db->update('app_level_bank', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_level_bank.id',$data);	
	
			$this->db->delete('app_level_bank');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_level_bank', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
