<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pecahan_emisi_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_pecahan_emisi.id as id,
			app_pecahan_emisi.jenis_uang_id as jenis_uang_id,
			app_pecahan_emisi.pecahan_id as pecahan_id,
			app_pecahan_emisi.emisi_id as emisi_id,
			app_pecahan_emisi.input_time as input_time,
			app_pecahan_emisi.update_time as update_time,
			j.jenis_uang as jenis_uang,
			p.pecahan as pecahan,			
			e.emisi as emisi,
			userinput.nama_lengkap as nama_lengkap,
			userupdate.nama_lengkap as userupdate_nama_lengkap,			
		');
		
		$this->datatables->from('app_pecahan_emisi');
	
		$this->datatables->join('app_jenis_uang j','j.id=app_pecahan_emisi.jenis_uang_id','LEFT'); 
	
		$this->datatables->join('app_pecahan p','p.id=app_pecahan_emisi.pecahan_id','LEFT'); 
	
		$this->datatables->join('app_emisi e','e.id=app_pecahan_emisi.emisi_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_pecahan_emisi.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_pecahan_emisi.user_update','LEFT'); 

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_pecahan_emisi.id as id',
			'app_pecahan_emisi.jenis_uang_id as jenis_uang_id',
			'app_pecahan_emisi.pecahan_id as pecahan_id',
			'app_pecahan_emisi.emisi_id as emisi_id',
			'app_pecahan_emisi.user_input as user_input',
			'app_pecahan_emisi.input_time as input_time',
			'app_pecahan_emisi.user_update as user_update',
			'app_pecahan_emisi.update_time as update_time',
			'j.jenis_uang as jenis_uang',
			'p.pecahan as pecahan',
			'e.emisi as emisi',
			'userinput.nama_lengkap as nama_lengkap',
			'userupdate.nama_lengkap as userupdate_nama_lengkap',		
		
		);
		$this->db->select($afield);
		$this->db->join('app_jenis_uang j','j.id=app_pecahan_emisi.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_pecahan_emisi.pecahan_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_pecahan_emisi.emisi_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_pecahan_emisi.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_pecahan_emisi.user_update','LEFT'); 

		$this->db->order_by('app_pecahan_emisi.id', 'ASC');
		return $this->db->get('app_pecahan_emisi')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_pecahan_emisi.id as id',
			'app_pecahan_emisi.jenis_uang_id as jenis_uang_id',
			'app_pecahan_emisi.pecahan_id as pecahan_id',
			'app_pecahan_emisi.emisi_id as emisi_id',
			'app_pecahan_emisi.user_input as user_input',
			'app_pecahan_emisi.input_time as input_time',
			'app_pecahan_emisi.user_update as user_update',
			'app_pecahan_emisi.update_time as update_time',
			'j.jenis_uang as jenis_uang',
			'p.pecahan as pecahan',
			'e.emisi as emisi',
			'userinput.nama_lengkap as nama_lengkap',
			'userupdate.nama_lengkap as userupdate_nama_lengkap',
		);
		$this->db->select($afield);
		$this->db->join('app_jenis_uang j','j.id=app_pecahan_emisi.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_pecahan_emisi.pecahan_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_pecahan_emisi.emisi_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_pecahan_emisi.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_pecahan_emisi.user_update','LEFT'); 

		$this->db->where('app_pecahan_emisi.id', $id);
		$this->db->order_by('app_pecahan_emisi.id', 'ASC');
		return $this->db->get('app_pecahan_emisi')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_pecahan_emisi.id <>',$id);

		$q = $this->db->get_where('app_pecahan_emisi', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_pecahan_emisi', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_pecahan_emisi.id', $id);
		$this->db->update('app_pecahan_emisi', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_pecahan_emisi.id',$data);	
	
			$this->db->delete('app_pecahan_emisi');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_pecahan_emisi', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
