<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_keluar_tas_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json($uang_keluar_id=null){
		$this->datatables->select('
			app_uang_keluar_tas.id as id,
			app_uang_keluar_tas.uang_keluar_id as uang_keluar_id,
			app_uang_keluar_tas.no_segel as no_segel,
			app_uang_keluar_tas.no_tas as no_tas,
			app_uang_keluar_tas.keterangan as keterangan,
			app_uang_keluar_tas.user_input as user_input,
			app_uang_keluar_tas.input_time as input_time,
			app_uang_keluar_tas.user_update as user_update,
			app_uang_keluar_tas.update_time as update_time,
			u.id as u_id,
			u.no as no,
			u.cabang_id as cabang_id,
			u.sentra_kas_id as sentra_kas_id,
			u.jumlah_global as jumlah_global,
			u.status_penerimaan as status_penerimaan,
			u.tanggal_penerimaan as tanggal_penerimaan,
			u.waktu_tiba as waktu_tiba,
			u.waktu_serah_terima as waktu_serah_terima,
			u.detail_tas as detail_tas,
			u.keterangan as u_keterangan,
			u.user_input as u_user_input,
			u.input_time as u_input_time,
			u.user_update as u_user_update,
			u.update_time as u_update_time,
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
		
		$this->datatables->from('app_uang_keluar_tas');
	
		$this->datatables->join('app_uang_keluar u','u.id=app_uang_keluar_tas.uang_keluar_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_uang_keluar_tas.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_uang_keluar_tas.user_update','LEFT'); 

		if($uang_keluar_id!==null){
			$this->datatables->where('uang_keluar_id',$uang_keluar_id);
		}
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all($uang_keluar_id=null){
		$afield = array(
			'app_uang_keluar_tas.id as id',
			'app_uang_keluar_tas.uang_keluar_id as uang_keluar_id',
			'app_uang_keluar_tas.no_segel as no_segel',
			'app_uang_keluar_tas.no_tas as no_tas',
			'app_uang_keluar_tas.keterangan as keterangan',
			'app_uang_keluar_tas.user_input as user_input',
			'app_uang_keluar_tas.input_time as input_time',
			'app_uang_keluar_tas.user_update as user_update',
			'app_uang_keluar_tas.update_time as update_time',
			'u.id as u_id',
			'u.no as no',
			'u.cabang_id as cabang_id',
			'u.sentra_kas_id as sentra_kas_id',
			'u.jumlah_global as jumlah_global',
			'u.status_penerimaan as status_penerimaan',
			'u.tanggal_penerimaan as tanggal_penerimaan',
			'u.waktu_tiba as waktu_tiba',
			'u.waktu_serah_terima as waktu_serah_terima',
			'u.detail_tas as detail_tas',
			'u.keterangan as u_keterangan',
			'u.user_input as u_user_input',
			'u.input_time as u_input_time',
			'u.user_update as u_user_update',
			'u.update_time as u_update_time',
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
		$this->db->join('app_uang_keluar u','u.id=app_uang_keluar_tas.uang_keluar_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_keluar_tas.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_keluar_tas.user_update','LEFT'); 
		
		if($uang_keluar_id!==null){
			$this->db->where('app_uang_keluar_tas.uang_keluar_id',$uang_keluar_id);
		}
		$this->db->order_by('app_uang_keluar_tas.id', 'ASC');
		if($data=$this->db->get('app_uang_keluar_tas')){
			return $data->result_array();
		}
		return false;		
   }


	public function get_by_id($id){
		$afield = array(
			'app_uang_keluar_tas.id as id',
			'app_uang_keluar_tas.uang_keluar_id as uang_keluar_id',
			'app_uang_keluar_tas.no_segel as no_segel',
			'app_uang_keluar_tas.no_tas as no_tas',
			'app_uang_keluar_tas.keterangan as keterangan',
			'app_uang_keluar_tas.user_input as user_input',
			'app_uang_keluar_tas.input_time as input_time',
			'app_uang_keluar_tas.user_update as user_update',
			'app_uang_keluar_tas.update_time as update_time',
			'u.id as u_id',
			'u.no as no',
			'u.cabang_id as cabang_id',
			'u.sentra_kas_id as sentra_kas_id',
			'u.jumlah_global as jumlah_global',
			'u.status_penerimaan as status_penerimaan',
			'u.tanggal_penerimaan as tanggal_penerimaan',
			'u.waktu_tiba as waktu_tiba',
			'u.waktu_serah_terima as waktu_serah_terima',
			'u.detail_tas as detail_tas',
			'u.keterangan as u_keterangan',
			'u.user_input as u_user_input',
			'u.input_time as u_input_time',
			'u.user_update as u_user_update',
			'u.update_time as u_update_time',
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
		$this->db->join('app_uang_keluar u','u.id=app_uang_keluar_tas.uang_keluar_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_keluar_tas.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_keluar_tas.user_update','LEFT'); 

		$this->db->where('app_uang_keluar_tas.id', $id);
		$this->db->order_by('app_uang_keluar_tas.id', 'ASC');
		return $this->db->get('app_uang_keluar_tas')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_uang_keluar_tas.id <>',$id);

		$q = $this->db->get_where('app_uang_keluar_tas', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){

		//Mencegah proses jika sudah ada data yang di proses
		
		$this->db->select('sum(app_journal_proses.jumlah) as jumlah');
		$this->db->join('app_journal_proses','app_journal_proses.uang_keluar_detail_id=app_uang_keluar_detail.id','LEFT');
		$this->db->where('app_uang_keluar_detail.uang_keluar_id',$data['uang_keluar_id']);
		$cek=$this->db->get('app_uang_keluar_detail')->row();
		if($cek->jumlah>0){
			return false;
		}
	

	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_uang_keluar_tas', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		$this->db->select('sum(app_journal_proses.jumlah) as jumlah');
		$this->db->join('app_journal_proses','app_journal_proses.uang_keluar_detail_id=app_uang_keluar_detail.id','LEFT');
		$this->db->where('app_uang_keluar_detail.uang_keluar_id',$data['uang_keluar_id']);
		$cek=$this->db->get('app_uang_keluar_detail')->row();
		if($cek->jumlah>0){
			return false;
		}

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_uang_keluar_tas.id', $id);
		$this->db->update('app_uang_keluar_tas', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){

		$this->db->select('sum(app_journal_proses.jumlah) as jumlah');
		$this->db->join('app_uang_keluar','app_uang_keluar_tas.uang_keluar_id=app_uang_keluar.id','INNER');
		$this->db->join('app_uang_keluar_detail','app_uang_keluar_detail.uang_keluar_id=app_uang_keluar.id','LEFT');
		$this->db->join('app_journal_proses','app_journal_proses.uang_keluar_detail_id=app_uang_keluar_detail.id','LEFT');
		$this->db->where_in('app_uang_keluar_tas.id',$data);
		$cek=$this->db->get('app_uang_keluar_tas')->row();
		if($cek->jumlah>0){
			return false;
		}
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_uang_keluar_tas.id',$data);	
	
			$this->db->delete('app_uang_keluar_tas');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_uang_keluar_tas', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
