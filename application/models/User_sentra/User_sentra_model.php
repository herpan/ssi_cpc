<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_sentra_model extends CI_Model {
   public $id;
 	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		if(!$this->session->userdata('sks')){
			$this->load->model('Sentra_kas/Sentra_kas_model','sentra');
			$s=$this->sentra->get_all();
			$data=array();
			foreach($s as $row){
				$data[$row['id']]=$row['sentra'];
			}
			$sk=json_encode($data);
			$this->session->set_userdata('sks', $sk);
	   }
		$this->datatables->select('
			app_user_sentra.id as id,
			app_user_sentra.user_id as user_id,
			app_user_sentra.sentra_kas as sentra_kas,
			app_user_sentra.user_input as user_input,
			app_user_sentra.input_time as input_time,
			app_user_sentra.user_update as user_update,
			app_user_sentra.update_time as update_time,
			u.id as u_id,
			u.nmuser as nmuser,
			u.passuser as passuser,
			u.nama_lengkap as nama_lengkap,
			u.tanda_tangan as tanda_tangan,
			u.opt_level as opt_level,
			u.opt_status as opt_status,
			u.picture as picture,
			userinput.id as userinput_id,
			userinput.nmuser as userinput_nmuser,
			userinput.passuser as userinput_passuser,
			userinput.nama_lengkap as userinput_nama_lengkap,
			userinput.tanda_tangan as userinput_tanda_tangan,
			userinput.opt_level as userinput_opt_level,
			userinput.opt_status as userinput_opt_status,
			userinput.picture as userinput_picture,
			userupdate.id as userupdate_id,
			userupdate.nmuser as userupdate_nmuser,
			userupdate.passuser as userupdate_passuser,
			userupdate.nama_lengkap as userupdate_nama_lengkap,
			userupdate.tanda_tangan as userupdate_tanda_tangan,
			userupdate.opt_level as userupdate_opt_level,
			userupdate.opt_status as userupdate_opt_status,
			userupdate.picture as userupdate_picture,
		');
		
		$this->datatables->from('app_user_sentra');
	
		$this->datatables->join('sys_user u','u.id=app_user_sentra.user_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_user_sentra.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_user_sentra.user_update','LEFT'); 

		$this->datatables->edit_column('sentra_kas','$1','$this->ids_to_sentras(sentra_kas)');
		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		$this->session->unset_userdata('sks');
		return $q;
		
	}
	

   public function get_all(){
		$afield = array(
			'app_user_sentra.id as id',
			'app_user_sentra.user_id as user_id',
			'app_user_sentra.sentra_kas as sentra_kas',
			'app_user_sentra.user_input as user_input',
			'app_user_sentra.input_time as input_time',
			'app_user_sentra.user_update as user_update',
			'app_user_sentra.update_time as update_time',
			'u.id as u_id',
			'u.nmuser as nmuser',
			'u.passuser as passuser',
			'u.nama_lengkap as nama_lengkap',
			'u.tanda_tangan as tanda_tangan',
			'u.opt_level as opt_level',
			'u.opt_status as opt_status',
			'u.picture as picture',
			'userinput.id as userinput_id',
			'userinput.nmuser as userinput_nmuser',
			'userinput.passuser as userinput_passuser',
			'userinput.nama_lengkap as userinput_nama_lengkap',
			'userinput.tanda_tangan as userinput_tanda_tangan',
			'userinput.opt_level as userinput_opt_level',
			'userinput.opt_status as userinput_opt_status',
			'userinput.picture as userinput_picture',
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
		$this->db->join('sys_user u','u.id=app_user_sentra.user_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_user_sentra.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_user_sentra.user_update','LEFT'); 

		$this->db->order_by('app_user_sentra.id', 'ASC');
		return $this->db->get('app_user_sentra')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_user_sentra.id as id',
			'app_user_sentra.user_id as user_id',
			'app_user_sentra.sentra_kas as sentra_kas',
			'app_user_sentra.user_input as user_input',
			'app_user_sentra.input_time as input_time',
			'app_user_sentra.user_update as user_update',
			'app_user_sentra.update_time as update_time',
			'u.id as u_id',
			'u.nmuser as nmuser',
			'u.passuser as passuser',
			'u.nama_lengkap as nama_lengkap',
			'u.tanda_tangan as tanda_tangan',
			'u.opt_level as opt_level',
			'u.opt_status as opt_status',
			'u.picture as picture',
			'userinput.id as userinput_id',
			'userinput.nmuser as userinput_nmuser',
			'userinput.passuser as userinput_passuser',
			'userinput.nama_lengkap as userinput_nama_lengkap',
			'userinput.tanda_tangan as userinput_tanda_tangan',
			'userinput.opt_level as userinput_opt_level',
			'userinput.opt_status as userinput_opt_status',
			'userinput.picture as userinput_picture',
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
		$this->db->join('sys_user u','u.id=app_user_sentra.user_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_user_sentra.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_user_sentra.user_update','LEFT'); 

		$this->db->where('app_user_sentra.id', $id);
		$this->db->order_by('app_user_sentra.id', 'ASC');
		return $this->db->get('app_user_sentra')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_user_sentra.id <>',$id);

		$q = $this->db->get_where('app_user_sentra', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_user_sentra', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_user_sentra.id', $id);
		$this->db->update('app_user_sentra', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_user_sentra.id',$data);	
	
			$this->db->delete('app_user_sentra');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_user_sentra', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
