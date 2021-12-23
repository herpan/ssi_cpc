<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_masuk_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_uang_masuk.id as id,
			app_uang_masuk.no as no,
			app_uang_masuk.cabang_id as cabang_id,
			app_uang_masuk.sentra_kas_id as sentra_kas_id,
			d.jumlah as jumlah_global,
			app_uang_masuk.status_penerimaan as status_penerimaan,
			app_uang_masuk.tanggal_penerimaan as tanggal_penerimaan,
			app_uang_masuk.waktu_tiba as waktu_tiba,
			app_uang_masuk.waktu_serah_terima as waktu_serah_terima,
			app_uang_masuk.no_kendaraan as no_kendaraan,
			app_uang_masuk.diserahkan_oleh as diserahkan_oleh,
			app_uang_masuk.diterima_oleh as diterima_oleh,
			app_uang_masuk.detail_tas as detail_tas,
			app_uang_masuk.keterangan as keterangan,
			app_uang_masuk.user_input as user_input,
			app_uang_masuk.input_time as input_time,
			app_uang_masuk.user_update as user_update,
			app_uang_masuk.update_time as update_time,
			c.id as c_id,
			c.bank_id as bank_id,
			c.kategori_cabang_id as kategori_cabang_id,
			c.nama_cabang as nama_cabang,
			c.alamat as alamat,
			c.deskripsi as deskripsi,
			c.sentra_kas_id as c_sentra_kas_id,
			c.user_input as c_user_input,
			c.input_time as c_input_time,
			c.user_update as c_user_update,
			c.update_time as c_update_time,
			s.id as s_id,
			s.kode_sentra as kode_sentra,
			s.sentra as sentra,
			s.nama_sentra as nama_sentra,
			s.alamat as s_alamat,
			s.user_input as s_user_input,
			s.input_time as s_input_time,
			s.user_update as s_user_update,
			s.update_time as s_update_time,
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
		
		$this->datatables->from('app_uang_masuk');

		$this->datatables->join('(select uang_masuk_id,sum(jumlah) as jumlah from app_uang_masuk_detail group by uang_masuk_id) d','d.uang_masuk_id=app_uang_masuk.id','LEFT'); 
	
		$this->datatables->join('app_cabang_cpc c','c.id=app_uang_masuk.cabang_id','LEFT'); 
	
		$this->datatables->join('app_sentra_kas s','s.id=app_uang_masuk.sentra_kas_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_uang_masuk.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_uang_masuk.user_update','LEFT'); 
	
		$this->datatables->join('app_bank b','b.id=c.bank_id','LEFT'); 

			
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_uang_masuk.id as id',
			'app_uang_masuk.no as no',
			'app_uang_masuk.cabang_id as cabang_id',
			'app_uang_masuk.sentra_kas_id as sentra_kas_id',
			'app_uang_masuk.jumlah_global as jumlah_global',
			'app_uang_masuk.status_penerimaan as status_penerimaan',
			'app_uang_masuk.tanggal_penerimaan as tanggal_penerimaan',
			'app_uang_masuk.waktu_tiba as waktu_tiba',
			'app_uang_masuk.waktu_serah_terima as waktu_serah_terima',
			'app_uang_masuk.no_kendaraan as no_kendaraan',
			'app_uang_masuk.diserahkan_oleh as diserahkan_oleh',
			'app_uang_masuk.diterima_oleh as diterima_oleh',
			'app_uang_masuk.detail_tas as detail_tas',
			'app_uang_masuk.keterangan as keterangan',
			'app_uang_masuk.user_input as user_input',
			'app_uang_masuk.input_time as input_time',
			'app_uang_masuk.user_update as user_update',
			'app_uang_masuk.update_time as update_time',
			'c.id as c_id',
			'c.bank_id as bank_id',
			'c.kategori_cabang_id as kategori_cabang_id',
			'c.nama_cabang as nama_cabang',
			'c.alamat as alamat',
			'c.deskripsi as deskripsi',
			'c.sentra_kas_id as c_sentra_kas_id',
			'c.user_input as c_user_input',
			'c.input_time as c_input_time',
			'c.user_update as c_user_update',
			'c.update_time as c_update_time',
			's.id as s_id',
			's.kode_sentra as kode_sentra',
			's.sentra as sentra',
			's.nama_sentra as nama_sentra',
			's.alamat as s_alamat',
			's.user_input as s_user_input',
			's.input_time as s_input_time',
			's.user_update as s_user_update',
			's.update_time as s_update_time',
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
		$this->db->join('app_cabang_cpc c','c.id=app_uang_masuk.cabang_id','LEFT'); 
		$this->db->join('app_sentra_kas s','s.id=app_uang_masuk.sentra_kas_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_masuk.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_masuk.user_update','LEFT'); 
		$this->db->join('app_bank b','b.id=c.bank_id','LEFT'); 

		$this->db->order_by('app_uang_masuk.id', 'ASC');
		return $this->db->get('app_uang_masuk')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_uang_masuk.id as id',
			'app_uang_masuk.no as no',
			'app_uang_masuk.cabang_id as cabang_id',
			'app_uang_masuk.sentra_kas_id as sentra_kas_id',
			'app_uang_masuk.jumlah_global as jumlah_global',
			'app_uang_masuk.status_penerimaan as status_penerimaan',
			'app_uang_masuk.tanggal_penerimaan as tanggal_penerimaan',
			'app_uang_masuk.waktu_tiba as waktu_tiba',
			'app_uang_masuk.waktu_serah_terima as waktu_serah_terima',
			'app_uang_masuk.no_kendaraan as no_kendaraan',
			'app_uang_masuk.diserahkan_oleh as diserahkan_oleh',
			'app_uang_masuk.diterima_oleh as diterima_oleh',
			'app_uang_masuk.detail_tas as detail_tas',
			'app_uang_masuk.keterangan as keterangan',
			'app_uang_masuk.user_input as user_input',
			'app_uang_masuk.input_time as input_time',
			'app_uang_masuk.user_update as user_update',
			'app_uang_masuk.update_time as update_time',
			'c.id as c_id',
			'c.bank_id as bank_id',
			'c.kategori_cabang_id as kategori_cabang_id',
			'c.nama_cabang as nama_cabang',
			'c.alamat as alamat',
			'c.deskripsi as deskripsi',
			'c.sentra_kas_id as c_sentra_kas_id',
			'c.user_input as c_user_input',
			'c.input_time as c_input_time',
			'c.user_update as c_user_update',
			'c.update_time as c_update_time',
			's.id as s_id',
			's.kode_sentra as kode_sentra',
			's.sentra as sentra',
			's.nama_sentra as nama_sentra',
			's.alamat as s_alamat',
			's.user_input as s_user_input',
			's.input_time as s_input_time',
			's.user_update as s_user_update',
			's.update_time as s_update_time',
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
		$this->db->join('app_cabang_cpc c','c.id=app_uang_masuk.cabang_id','LEFT'); 
		$this->db->join('app_sentra_kas s','s.id=app_uang_masuk.sentra_kas_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_masuk.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_masuk.user_update','LEFT'); 
		$this->db->join('app_bank b','b.id=c.bank_id','LEFT'); 

		$this->db->where('app_uang_masuk.id', $id);
		$this->db->order_by('app_uang_masuk.id', 'ASC');
		return $this->db->get('app_uang_masuk')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_uang_masuk.id <>',$id);

		$q = $this->db->get_where('app_uang_masuk', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_uang_masuk', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_uang_masuk.id', $id);
		$this->db->update('app_uang_masuk', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_uang_masuk.id',$data);	
	
			$this->db->delete('app_uang_masuk');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_uang_masuk', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 	}
	
	function get_summary($id){
		$this->db->select("
		SUM(CASE WHEN jenis_uang_id = 1 then jumlah ELSE 0 END) as total_kertas,
		SUM(CASE WHEN jenis_uang_id = 2 then jumlah ELSE 0 END) as total_logam,
		SUM(jumlah) as total
		");
		$this->db->where('uang_masuk_id',$id);
		$this->db->group_by('uang_masuk_id');
		if($data=$this->db->get('app_uang_masuk_detail')){
			return $data->row();
		}
		return false;
	}

	public function get_pecahan($id){
		$afield = array(
			'app_uang_masuk_detail.jenis_uang_id as jenis_uang_id',			
			'p.pecahan as pecahan',
			'app_uang_masuk_detail.jumlah as jumlah',		
		);
		$this->db->select($afield);		
		$this->db->join('app_pecahan p','p.id=app_uang_masuk_detail.pecahan_id','LEFT'); 				
		$this->db->where('app_uang_masuk_detail.uang_masuk_id',$id);
		return $this->db->get('app_uang_masuk_detail')->result();
   }


};
