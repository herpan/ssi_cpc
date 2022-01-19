<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Proses_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json($uang_masuk_id=null){
		$this->datatables->select('
			app_journal_proses.id as id,
			app_journal_proses.uang_masuk_detail_id as uang_masuk_detail_id,
			app_journal_proses.emisi_id as emisi_id,
			app_journal_proses.kondisi_id as kondisi_id,
			app_journal_proses.jumlah as jumlah,
			app_journal_proses.status as status,
			app_journal_proses.tanggal_pencatatan as tanggal_pencatatan,
			app_journal_proses.keterangan as keterangan,
			app_journal_proses.user_input as user_input,
			app_journal_proses.input_time as input_time,
			app_journal_proses.user_update as user_update,
			app_journal_proses.update_time as update_time,
			umd.id as umd_id,
			umd.uang_masuk_id as uang_masuk_id,
			umd.jenis_uang_id as jenis_uang_id,
			umd.pecahan_id as pecahan_id,
			umd.jumlah as umd_jumlah,
			umd.user_input as umd_user_input,
			umd.input_time as umd_input_time,
			umd.user_update as umd_user_update,
			umd.update_time as umd_update_time,
			e.id as e_id,
			e.emisi as emisi,
			e.keterangan as e_keterangan,
			e.user_input as e_user_input,
			e.input_time as e_input_time,
			e.user_update as e_user_update,
			e.update_time as e_update_time,
			k.id as k_id,
			k.kategori_id as kategori_id,
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
			um.id as um_id,
			um.no as no,
			um.cabang_id as cabang_id,
			um.sentra_kas_id as sentra_kas_id,
			um.jumlah_global as jumlah_global,
			um.status_penerimaan as status_penerimaan,
			um.tanggal_penerimaan as tanggal_penerimaan,
			um.waktu_tiba as waktu_tiba,
			um.waktu_serah_terima as waktu_serah_terima,
			um.no_kendaraan as no_kendaraan,
			um.diserahkan_oleh as diserahkan_oleh,
			um.diterima_oleh as diterima_oleh,
			um.detail_tas as detail_tas,
			um.keterangan as um_keterangan,
			um.user_input as um_user_input,
			um.input_time as um_input_time,
			um.user_update as um_user_update,
			um.update_time as um_update_time,
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
			kk.id as kk_id,
			kk.nama_kategori as nama_kategori,
			kk.user_input as kk_user_input,
			kk.input_time as kk_input_time,
			kk.user_update as kk_user_update,
			kk.update_time as kk_update_time,
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
			b.id as b_id,
			b.kode_bank as kode_bank,
			b.bank as bank,
			b.deskripsi as b_deskripsi,
			b.user_input as b_user_input,
			b.input_time as b_input_time,
			b.user_update as b_user_update,
			b.update_time as b_update_time,
		');
		
		$this->datatables->from('app_journal_proses');
	
		$this->datatables->join('app_uang_masuk_detail umd','umd.id=app_journal_proses.uang_masuk_detail_id','LEFT'); 
	
		$this->datatables->join('app_emisi e','e.id=app_journal_proses.emisi_id','LEFT'); 
	
		$this->datatables->join('app_kondisi k','k.id=app_journal_proses.kondisi_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_journal_proses.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_journal_proses.user_update','LEFT'); 
	
		$this->datatables->join('app_uang_masuk um','um.id=umd.uang_masuk_id','LEFT'); 
	
		$this->datatables->join('app_jenis_uang j','j.id=umd.jenis_uang_id','LEFT'); 
	
		$this->datatables->join('app_pecahan p','p.id=umd.pecahan_id','LEFT'); 
	
		$this->datatables->join('app_kategori_kondisi kk','kk.id=k.kategori_id','LEFT'); 
	
		$this->datatables->join('app_cabang_cpc c','c.id=um.cabang_id','LEFT'); 
	
		$this->datatables->join('app_sentra_kas s','s.id=um.sentra_kas_id','LEFT'); 
	
		$this->datatables->join('app_bank b','b.id=c.bank_id','LEFT'); 

		if($uang_masuk_id!==null){
			$this->datatables->where('umd.uang_masuk_id',$uang_masuk_id);
		}
		

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all($w=null){
		$afield = array(
			'app_journal_proses.id as id',
			'app_journal_proses.uang_masuk_detail_id as uang_masuk_detail_id',
			'app_journal_proses.emisi_id as emisi_id',
			'app_journal_proses.kondisi_id as kondisi_id',
			'app_journal_proses.jumlah as jumlah',
			'app_journal_proses.status as status',
			'app_journal_proses.tanggal_pencatatan as tanggal_pencatatan',
			'app_journal_proses.keterangan as keterangan',
			'app_journal_proses.user_input as user_input',
			'app_journal_proses.input_time as input_time',
			'app_journal_proses.user_update as user_update',
			'app_journal_proses.update_time as update_time',
			'umd.id as umd_id',
			'umd.uang_masuk_id as uang_masuk_id',
			'umd.jenis_uang_id as jenis_uang_id',
			'umd.pecahan_id as pecahan_id',
			'umd.jumlah as umd_jumlah',
			'umd.user_input as umd_user_input',
			'umd.input_time as umd_input_time',
			'umd.user_update as umd_user_update',
			'umd.update_time as umd_update_time',
			'e.id as e_id',
			'e.emisi as emisi',
			'e.keterangan as e_keterangan',
			'e.user_input as e_user_input',
			'e.input_time as e_input_time',
			'e.user_update as e_user_update',
			'e.update_time as e_update_time',
			'k.id as k_id',
			'k.kategori_id as kategori_id',
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
			'um.id as um_id',
			'um.no as no',
			'um.cabang_id as cabang_id',
			'um.sentra_kas_id as sentra_kas_id',
			'um.jumlah_global as jumlah_global',
			'um.status_penerimaan as status_penerimaan',
			'um.tanggal_penerimaan as tanggal_penerimaan',
			'um.waktu_tiba as waktu_tiba',
			'um.waktu_serah_terima as waktu_serah_terima',
			'um.no_kendaraan as no_kendaraan',
			'um.diserahkan_oleh as diserahkan_oleh',
			'um.diterima_oleh as diterima_oleh',
			'um.detail_tas as detail_tas',
			'um.keterangan as um_keterangan',
			'um.user_input as um_user_input',
			'um.input_time as um_input_time',
			'um.user_update as um_user_update',
			'um.update_time as um_update_time',
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
			'kk.id as kk_id',
			'kk.nama_kategori as nama_kategori',
			'kk.user_input as kk_user_input',
			'kk.input_time as kk_input_time',
			'kk.user_update as kk_user_update',
			'kk.update_time as kk_update_time',
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
		$this->db->join('app_uang_masuk_detail umd','umd.id=app_journal_proses.uang_masuk_detail_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_journal_proses.emisi_id','LEFT'); 
		$this->db->join('app_kondisi k','k.id=app_journal_proses.kondisi_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_journal_proses.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_journal_proses.user_update','LEFT'); 
		$this->db->join('app_uang_masuk um','um.id=umd.uang_masuk_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=umd.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=umd.pecahan_id','LEFT'); 
		$this->db->join('app_kategori_kondisi kk','kk.id=k.kategori_id','LEFT'); 
		$this->db->join('app_cabang_cpc c','c.id=um.cabang_id','LEFT'); 
		$this->db->join('app_sentra_kas s','s.id=um.sentra_kas_id','LEFT'); 
		$this->db->join('app_bank b','b.id=c.bank_id','LEFT'); 
		if($w!=null){
			$this->db->where($w);
		}

		$this->db->order_by('app_journal_proses.id', 'ASC');
		return $this->db->get('app_journal_proses')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_journal_proses.id as id',
			'app_journal_proses.uang_masuk_detail_id as uang_masuk_detail_id',
			'app_journal_proses.emisi_id as emisi_id',
			'app_journal_proses.kondisi_id as kondisi_id',
			'app_journal_proses.jumlah as jumlah',
			'app_journal_proses.status as status',
			'app_journal_proses.tanggal_pencatatan as tanggal_pencatatan',
			'app_journal_proses.keterangan as keterangan',
			'app_journal_proses.user_input as user_input',
			'app_journal_proses.input_time as input_time',
			'app_journal_proses.user_update as user_update',
			'app_journal_proses.update_time as update_time',
			'umd.id as umd_id',
			'umd.uang_masuk_id as uang_masuk_id',
			'umd.jenis_uang_id as jenis_uang_id',
			'umd.pecahan_id as pecahan_id',
			'umd.jumlah as umd_jumlah',
			'umd.user_input as umd_user_input',
			'umd.input_time as umd_input_time',
			'umd.user_update as umd_user_update',
			'umd.update_time as umd_update_time',
			'e.id as e_id',
			'e.emisi as emisi',
			'e.keterangan as e_keterangan',
			'e.user_input as e_user_input',
			'e.input_time as e_input_time',
			'e.user_update as e_user_update',
			'e.update_time as e_update_time',
			'k.id as k_id',
			'k.kategori_id as kategori_id',
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
			'um.id as um_id',
			'um.no as no',
			'um.cabang_id as cabang_id',
			'um.sentra_kas_id as sentra_kas_id',
			'um.jumlah_global as jumlah_global',
			'um.status_penerimaan as status_penerimaan',
			'um.tanggal_penerimaan as tanggal_penerimaan',
			'um.waktu_tiba as waktu_tiba',
			'um.waktu_serah_terima as waktu_serah_terima',
			'um.no_kendaraan as no_kendaraan',
			'um.diserahkan_oleh as diserahkan_oleh',
			'um.diterima_oleh as diterima_oleh',
			'um.detail_tas as detail_tas',
			'um.keterangan as um_keterangan',
			'um.user_input as um_user_input',
			'um.input_time as um_input_time',
			'um.user_update as um_user_update',
			'um.update_time as um_update_time',
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
			'kk.id as kk_id',
			'kk.nama_kategori as nama_kategori',
			'kk.user_input as kk_user_input',
			'kk.input_time as kk_input_time',
			'kk.user_update as kk_user_update',
			'kk.update_time as kk_update_time',
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
		$this->db->join('app_uang_masuk_detail umd','umd.id=app_journal_proses.uang_masuk_detail_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_journal_proses.emisi_id','LEFT'); 
		$this->db->join('app_kondisi k','k.id=app_journal_proses.kondisi_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_journal_proses.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_journal_proses.user_update','LEFT'); 
		$this->db->join('app_uang_masuk um','um.id=umd.uang_masuk_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=umd.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=umd.pecahan_id','LEFT'); 
		$this->db->join('app_kategori_kondisi kk','kk.id=k.kategori_id','LEFT'); 
		$this->db->join('app_cabang_cpc c','c.id=um.cabang_id','LEFT'); 
		$this->db->join('app_sentra_kas s','s.id=um.sentra_kas_id','LEFT'); 
		$this->db->join('app_bank b','b.id=c.bank_id','LEFT'); 

		$this->db->where('app_journal_proses.id', $id);
		$this->db->order_by('app_journal_proses.id', 'ASC');
		return $this->db->get('app_journal_proses')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_journal_proses.id <>',$id);

		$q = $this->db->get_where('app_journal_proses', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_journal_proses', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_journal_proses.id', $id);
		$this->db->update('app_journal_proses', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){

		$this->db->select('pecahan_id,
		emisi_id,
		kondisi_id,
		app_uang_masuk.sentra_kas_id,
		bank_id,
		CASE WHEN app_journal_proses.update_time IS NULL THEN app_journal_proses.input_time ELSE app_journal_proses.update_time END as input_time',false);		
		$this->db->join('app_uang_masuk_detail','app_uang_masuk_detail.id=app_journal_proses.uang_masuk_detail_id','INNER');
		$this->db->join('app_uang_masuk','app_uang_masuk_detail.uang_masuk_id=app_uang_masuk.id','INNER');
		$this->db->join('app_cabang_cpc','app_cabang_cpc.id=app_uang_masuk.cabang_id','INNER');
		$this->db->where_in('app_journal_proses.id',$data);	
		
		$to_delete=$this->db->get('app_journal_proses')->row_array();

		
		

		$input_time=$to_delete['input_time'];
		$sentra_kas=$to_delete['sentra_kas_id'];
		unset($to_delete['input_time']);
		unset($to_delete['sentra_kas_id']);
		
		$this->db->select('pecahan_id,
		emisi_id,
		kondisi_id,
		app_uang_keluar.sentra_kas_id,
		bank_id,
		CASE WHEN app_uang_keluar_detail.update_time IS NULL THEN app_uang_keluar_detail.input_time ELSE app_uang_keluar_detail.update_time END as input_time',false);
		$this->db->join('app_uang_keluar','app_uang_keluar_detail.uang_keluar_id=app_uang_keluar.id','INNER');
		$this->db->join('app_cabang_cpc','app_cabang_cpc.id=app_uang_keluar.cabang_id','INNER');
		$this->db->where($to_delete);
		$this->db->where('app_uang_keluar_detail.input_time<=',$input_time);
		$this->db->where('app_uang_keluar.sentra_kas_id',$sentra_kas);
		$uang_keluar=$this->db->get('app_uang_keluar_detail')->result_array();

		if(count($uang_keluar)>0){
			return false;
		}		
		
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_journal_proses.id',$data);	
	
			$this->db->delete('app_journal_proses');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_journal_proses', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
