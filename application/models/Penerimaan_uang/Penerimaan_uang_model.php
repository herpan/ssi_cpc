<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penerimaan_uang_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_penerimaan_uang.id as id,
			app_penerimaan_uang.cabang_id as cabang_id,
			app_penerimaan_uang.jumlah_global as jumlah_global,
			app_penerimaan_uang.status_penerimaan as status_penerimaan,
			app_penerimaan_uang.tanggal_penerimaan as tanggal_penerimaan,
			app_penerimaan_uang.keterangan as keterangan,
			app_penerimaan_uang.user_input as user_input,
			app_penerimaan_uang.input_time as input_time,
			app_penerimaan_uang.user_update as user_update,
			app_penerimaan_uang.update_time as update_time,
			cab.id as cab_id,
			cab.bank_wilayah_id as bank_wilayah_id,
			cab.nama_cabang as nama_cabang,
			cab.alamat as alamat,
			cab.deskripsi as deskripsi,
			cab.sentra_kas_id as sentra_kas_id,
			cab.user_input as cab_user_input,
			cab.input_time as cab_input_time,
			cab.user_update as cab_user_update,
			cab.update_time as cab_update_time,
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
			wilayah.id as wilayah_id,
			wilayah.bank_id as bank_id,
			wilayah.kode_wilayah as kode_wilayah,
			wilayah.nama_wilayah as nama_wilayah,
			wilayah.deskripsi as wilayah_deskripsi,
			wilayah.user_input as wilayah_user_input,
			wilayah.input_time as wilayah_input_time,
			wilayah.user_update as wilayah_user_update,
			wilayah.update_time as wilayah_update_time,
			sentra.id as sentra_id,
			sentra.kode_sentra as kode_sentra,
			sentra.sentra as sentra,
			sentra.nama_sentra as nama_sentra,
			sentra.alamat as sentra_alamat,
			sentra.user_input as sentra_user_input,
			sentra.input_time as sentra_input_time,
			sentra.user_update as sentra_user_update,
			sentra.update_time as sentra_update_time,
			b.id as b_id,
			b.kode_bank as kode_bank,
			b.bank as bank,
			b.deskripsi as b_deskripsi,
			b.user_input as b_user_input,
			b.input_time as b_input_time,
			b.user_update as b_user_update,
			b.update_time as b_update_time,
		');
		
		$this->datatables->from('app_penerimaan_uang');
	
		$this->datatables->join('app_cabang_cpc cab','cab.id=app_penerimaan_uang.cabang_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_penerimaan_uang.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_penerimaan_uang.user_update','LEFT'); 
	
		$this->datatables->join('app_bank_wilayah wilayah','wilayah.id=cab.bank_wilayah_id','LEFT'); 
	
		$this->datatables->join('app_sentra_kas sentra','sentra.id=cab.sentra_kas_id','LEFT'); 
	
		$this->datatables->join('app_bank b','b.id=wilayah.bank_id','LEFT'); 

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_penerimaan_uang.id as id',
			'app_penerimaan_uang.cabang_id as cabang_id',
			'app_penerimaan_uang.jumlah_global as jumlah_global',
			'app_penerimaan_uang.status_penerimaan as status_penerimaan',
			'app_penerimaan_uang.tanggal_penerimaan as tanggal_penerimaan',
			'app_penerimaan_uang.keterangan as keterangan',
			'app_penerimaan_uang.user_input as user_input',
			'app_penerimaan_uang.input_time as input_time',
			'app_penerimaan_uang.user_update as user_update',
			'app_penerimaan_uang.update_time as update_time',
			'cab.id as cab_id',
			'cab.bank_wilayah_id as bank_wilayah_id',
			'cab.nama_cabang as nama_cabang',
			'cab.alamat as alamat',
			'cab.deskripsi as deskripsi',
			'cab.sentra_kas_id as sentra_kas_id',
			'cab.user_input as cab_user_input',
			'cab.input_time as cab_input_time',
			'cab.user_update as cab_user_update',
			'cab.update_time as cab_update_time',
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
			'wilayah.id as wilayah_id',
			'wilayah.bank_id as bank_id',
			'wilayah.kode_wilayah as kode_wilayah',
			'wilayah.nama_wilayah as nama_wilayah',
			'wilayah.deskripsi as wilayah_deskripsi',
			'wilayah.user_input as wilayah_user_input',
			'wilayah.input_time as wilayah_input_time',
			'wilayah.user_update as wilayah_user_update',
			'wilayah.update_time as wilayah_update_time',
			'sentra.id as sentra_id',
			'sentra.kode_sentra as kode_sentra',
			'sentra.sentra as sentra',
			'sentra.nama_sentra as nama_sentra',
			'sentra.alamat as sentra_alamat',
			'sentra.user_input as sentra_user_input',
			'sentra.input_time as sentra_input_time',
			'sentra.user_update as sentra_user_update',
			'sentra.update_time as sentra_update_time',
			'b.id as b_id',
			'b.kode_bank as kode_bank',
			'b.bank as bank',
			'b.deskripsi as b_deskripsi',
			'b.user_input as b_user_input',
			'b.input_time as b_input_time',
			'b.user_update as b_user_update',
			'b.update_time as b_update_time',
		
		);
		$this->db->select($afield);
		$this->db->join('app_cabang_cpc cab','cab.id=app_penerimaan_uang.cabang_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_penerimaan_uang.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_penerimaan_uang.user_update','LEFT'); 
		$this->db->join('app_bank_wilayah wilayah','wilayah.id=cab.bank_wilayah_id','LEFT'); 
		$this->db->join('app_sentra_kas sentra','sentra.id=cab.sentra_kas_id','LEFT'); 
		$this->db->join('app_bank b','b.id=wilayah.bank_id','LEFT'); 

		$this->db->order_by('app_penerimaan_uang.id', 'ASC');
		return $this->db->get('app_penerimaan_uang')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_penerimaan_uang.id as id',
			'app_penerimaan_uang.cabang_id as cabang_id',
			'app_penerimaan_uang.jumlah_global as jumlah_global',
			'app_penerimaan_uang.status_penerimaan as status_penerimaan',
			'app_penerimaan_uang.tanggal_penerimaan as tanggal_penerimaan',
			'app_penerimaan_uang.keterangan as keterangan',
			'app_penerimaan_uang.user_input as user_input',
			'app_penerimaan_uang.input_time as input_time',
			'app_penerimaan_uang.user_update as user_update',
			'app_penerimaan_uang.update_time as update_time',
			'cab.id as cab_id',
			'cab.bank_wilayah_id as bank_wilayah_id',
			'cab.nama_cabang as nama_cabang',
			'cab.alamat as alamat',
			'cab.deskripsi as deskripsi',
			'cab.sentra_kas_id as sentra_kas_id',
			'cab.user_input as cab_user_input',
			'cab.input_time as cab_input_time',
			'cab.user_update as cab_user_update',
			'cab.update_time as cab_update_time',
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
			'wilayah.id as wilayah_id',
			'wilayah.bank_id as bank_id',
			'wilayah.kode_wilayah as kode_wilayah',
			'wilayah.nama_wilayah as nama_wilayah',
			'wilayah.deskripsi as wilayah_deskripsi',
			'wilayah.user_input as wilayah_user_input',
			'wilayah.input_time as wilayah_input_time',
			'wilayah.user_update as wilayah_user_update',
			'wilayah.update_time as wilayah_update_time',
			'sentra.id as sentra_id',
			'sentra.kode_sentra as kode_sentra',
			'sentra.sentra as sentra',
			'sentra.nama_sentra as nama_sentra',
			'sentra.alamat as sentra_alamat',
			'sentra.user_input as sentra_user_input',
			'sentra.input_time as sentra_input_time',
			'sentra.user_update as sentra_user_update',
			'sentra.update_time as sentra_update_time',
			'b.id as b_id',
			'b.kode_bank as kode_bank',
			'b.bank as bank',
			'b.deskripsi as b_deskripsi',
			'b.user_input as b_user_input',
			'b.input_time as b_input_time',
			'b.user_update as b_user_update',
			'b.update_time as b_update_time',
		
		);
		$this->db->select($afield);
		$this->db->join('app_cabang_cpc cab','cab.id=app_penerimaan_uang.cabang_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_penerimaan_uang.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_penerimaan_uang.user_update','LEFT'); 
		$this->db->join('app_bank_wilayah wilayah','wilayah.id=cab.bank_wilayah_id','LEFT'); 
		$this->db->join('app_sentra_kas sentra','sentra.id=cab.sentra_kas_id','LEFT'); 
		$this->db->join('app_bank b','b.id=wilayah.bank_id','LEFT'); 

		$this->db->where('app_penerimaan_uang.id', $id);
		$this->db->order_by('app_penerimaan_uang.id', 'ASC');
		return $this->db->get('app_penerimaan_uang')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_penerimaan_uang.id <>',$id);

		$q = $this->db->get_where('app_penerimaan_uang', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_penerimaan_uang', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_penerimaan_uang.id', $id);
		$this->db->update('app_penerimaan_uang', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_penerimaan_uang.id',$data);	
	
			$this->db->delete('app_penerimaan_uang');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_penerimaan_uang', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
