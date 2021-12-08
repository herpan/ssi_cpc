<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kategori_cabang_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_kategori_cabang.id as id,
			app_kategori_cabang.kategori_cabang as kategori_cabang,
			app_kategori_cabang.user_input as user_input,
			app_kategori_cabang.input_time as input_time,
			app_kategori_cabang.user_update as user_update,
			app_kategori_cabang.update_time as update_time,
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
		
		$this->datatables->from('app_kategori_cabang');
	
		$this->datatables->join('sys_user userinput','userinput.id=app_kategori_cabang.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_kategori_cabang.user_update','LEFT'); 

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_kategori_cabang.id as id',
			'app_kategori_cabang.kategori_cabang as kategori_cabang',
			'app_kategori_cabang.user_input as user_input',
			'app_kategori_cabang.input_time as input_time',
			'app_kategori_cabang.user_update as user_update',
			'app_kategori_cabang.update_time as update_time',
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
		$this->db->join('sys_user userinput','userinput.id=app_kategori_cabang.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_kategori_cabang.user_update','LEFT'); 

		$this->db->order_by('app_kategori_cabang.id', 'ASC');
		return $this->db->get('app_kategori_cabang')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_kategori_cabang.id as id',
			'app_kategori_cabang.kategori_cabang as kategori_cabang',
			'app_kategori_cabang.user_input as user_input',
			'app_kategori_cabang.input_time as input_time',
			'app_kategori_cabang.user_update as user_update',
			'app_kategori_cabang.update_time as update_time',
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
		$this->db->join('sys_user userinput','userinput.id=app_kategori_cabang.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_kategori_cabang.user_update','LEFT'); 

		$this->db->where('app_kategori_cabang.id', $id);
		$this->db->order_by('app_kategori_cabang.id', 'ASC');
		return $this->db->get('app_kategori_cabang')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_kategori_cabang.id <>',$id);

		$q = $this->db->get_where('app_kategori_cabang', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_kategori_cabang', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_kategori_cabang.id', $id);
		$this->db->update('app_kategori_cabang', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_kategori_cabang.id',$data);	
	
			$this->db->delete('app_kategori_cabang');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_kategori_cabang', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
