<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Journal_cpc_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_journal_cpc.id as id,
			app_journal_cpc.bank_wilayah_id as bank_wilayah_id,
			app_journal_cpc.jenis_uang_id as jenis_uang_id,
			app_journal_cpc.pecahan_id as pecahan_id,
			app_journal_cpc.emisi_id as emisi_id,
			app_journal_cpc.kondisi_id as kondisi_id,
			app_journal_cpc.jumlah as jumlah,
			app_journal_cpc.status as status,
			app_journal_cpc.tanggal_penerimaan as tanggal_penerimaan,
			app_journal_cpc.tanggal_pencatatan as tanggal_pencatatan,
			app_journal_cpc.keterangan as keterangan,
			app_journal_cpc.user_input as user_input,
			app_journal_cpc.input_time as input_time,
			app_journal_cpc.user_update as user_update,
			app_journal_cpc.update_time as update_time,
			w.id as w_id,
			w.bank_id as bank_id,
			w.kode_wilayah as kode_wilayah,
			w.nama_wilayah as nama_wilayah,
			w.deskripsi as deskripsi,
			w.user_input as w_user_input,
			w.input_time as w_input_time,
			w.user_update as w_user_update,
			w.update_time as w_update_time,
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
			e.id as e_id,
			e.emisi as emisi,
			e.keterangan as e_keterangan,
			e.user_input as e_user_input,
			e.input_time as e_input_time,
			e.user_update as e_user_update,
			e.update_time as e_update_time,
			k.id as k_id,
			k.kategori_id as kategori_id,
			kat.nama_kategori as kategori,
			k.kondisi as kondisi,
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
			b.id as b_id,
			b.kode_bank as kode_bank,
			b.bank as bank,
			b.deskripsi as b_deskripsi,
			b.user_input as b_user_input,
			b.input_time as b_input_time,
			b.user_update as b_user_update,
			b.update_time as b_update_time,
		');
		
		$this->datatables->from('app_journal_cpc');
	
		$this->datatables->join('app_bank_wilayah w','w.id=app_journal_cpc.bank_wilayah_id','LEFT'); 
	
		$this->datatables->join('app_jenis_uang j','j.id=app_journal_cpc.jenis_uang_id','LEFT'); 
	
		$this->datatables->join('app_pecahan p','p.id=app_journal_cpc.pecahan_id','LEFT'); 
	
		$this->datatables->join('app_emisi e','e.id=app_journal_cpc.emisi_id','LEFT'); 
	
		$this->datatables->join('app_kondisi k','k.id=app_journal_cpc.kondisi_id','LEFT'); 

		$this->datatables->join('app_kategori_kondisi kat','k.kategori_id=kat.id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_journal_cpc.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_journal_cpc.user_update','LEFT'); 
	
		$this->datatables->join('app_bank b','b.id=w.bank_id','LEFT'); 

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_journal_cpc.id as id',
			'app_journal_cpc.bank_wilayah_id as bank_wilayah_id',
			'app_journal_cpc.jenis_uang_id as jenis_uang_id',
			'app_journal_cpc.pecahan_id as pecahan_id',
			'app_journal_cpc.emisi_id as emisi_id',
			'app_journal_cpc.kondisi_id as kondisi_id',
			'app_journal_cpc.jumlah as jumlah',
			'app_journal_cpc.status as status',			
			'app_journal_cpc.tanggal_penerimaan as tanggal_penerimaan',
			'app_journal_cpc.tanggal_pencatatan as tanggal_pencatatan',
			'app_journal_cpc.keterangan as keterangan',
			'app_journal_cpc.user_input as user_input',
			'app_journal_cpc.input_time as input_time',
			'app_journal_cpc.user_update as user_update',
			'app_journal_cpc.update_time as update_time',
			'w.id as w_id',
			'w.bank_id as bank_id',
			'w.kode_wilayah as kode_wilayah',
			'w.nama_wilayah as nama_wilayah',
			'w.deskripsi as deskripsi',
			'w.user_input as w_user_input',
			'w.input_time as w_input_time',
			'w.user_update as w_user_update',
			'w.update_time as w_update_time',
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
			'e.id as e_id',
			'e.emisi as emisi',
			'e.keterangan as e_keterangan',
			'e.user_input as e_user_input',
			'e.input_time as e_input_time',
			'e.user_update as e_user_update',
			'e.update_time as e_update_time',
			'k.id as k_id',
			'k.kategori_id as kategori_id',
			'kat.nama_kategori as kategori',
			'k.kondisi as kondisi',
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
		$this->db->join('app_bank_wilayah w','w.id=app_journal_cpc.bank_wilayah_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=app_journal_cpc.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_journal_cpc.pecahan_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_journal_cpc.emisi_id','LEFT'); 
		$this->db->join('app_kondisi k','k.id=app_journal_cpc.kondisi_id','LEFT'); 
		$this->db->join('app_kategori_kondisi kat','k.kategori_id=kat.id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_journal_cpc.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_journal_cpc.user_update','LEFT'); 
		$this->db->join('app_bank b','b.id=w.bank_id','LEFT'); 

		$this->db->order_by('app_journal_cpc.id', 'ASC');
		return $this->db->get('app_journal_cpc')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_journal_cpc.id as id',
			'app_journal_cpc.bank_wilayah_id as bank_wilayah_id',
			'app_journal_cpc.jenis_uang_id as jenis_uang_id',
			'app_journal_cpc.pecahan_id as pecahan_id',
			'app_journal_cpc.emisi_id as emisi_id',
			'app_journal_cpc.kondisi_id as kondisi_id',
			'app_journal_cpc.jumlah as jumlah',
			'app_journal_cpc.status as status',
			'app_journal_cpc.tanggal_penerimaan as tanggal_penerimaan',
			'app_journal_cpc.tanggal_pencatatan as tanggal_pencatatan',
			'app_journal_cpc.keterangan as keterangan',
			'app_journal_cpc.user_input as user_input',
			'app_journal_cpc.input_time as input_time',
			'app_journal_cpc.user_update as user_update',
			'app_journal_cpc.update_time as update_time',
			'w.id as w_id',
			'w.bank_id as bank_id',
			'w.kode_wilayah as kode_wilayah',
			'w.nama_wilayah as nama_wilayah',
			'w.deskripsi as deskripsi',
			'w.user_input as w_user_input',
			'w.input_time as w_input_time',
			'w.user_update as w_user_update',
			'w.update_time as w_update_time',
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
			'e.id as e_id',
			'e.emisi as emisi',
			'e.keterangan as e_keterangan',
			'e.user_input as e_user_input',
			'e.input_time as e_input_time',
			'e.user_update as e_user_update',
			'e.update_time as e_update_time',
			'k.id as k_id',
			'k.kategori_id as kategori_id',
			'kat.nama_kategori as kategori',
			'k.kondisi as kondisi',
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
		$this->db->join('app_bank_wilayah w','w.id=app_journal_cpc.bank_wilayah_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=app_journal_cpc.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_journal_cpc.pecahan_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_journal_cpc.emisi_id','LEFT'); 
		$this->db->join('app_kondisi k','k.id=app_journal_cpc.kondisi_id','LEFT'); 
		$this->db->join('app_kategori_kondisi kat','k.kategori_id=kat.id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_journal_cpc.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_journal_cpc.user_update','LEFT'); 
		$this->db->join('app_bank b','b.id=w.bank_id','LEFT'); 

		$this->db->where('app_journal_cpc.id', $id);
		$this->db->order_by('app_journal_cpc.id', 'ASC');
		return $this->db->get('app_journal_cpc')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_journal_cpc.id <>',$id);

		$q = $this->db->get_where('app_journal_cpc', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_journal_cpc', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_journal_cpc.id', $id);
		$this->db->update('app_journal_cpc', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_journal_cpc.id',$data);	
	
			$this->db->delete('app_journal_cpc');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_journal_cpc', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
