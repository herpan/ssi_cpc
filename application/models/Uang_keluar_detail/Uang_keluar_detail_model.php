<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_keluar_detail_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json($uang_keluar_id=null){
		$this->datatables->select('
			app_uang_keluar_detail.id as id,
			app_uang_keluar_detail.uang_keluar_id as uang_keluar_id,
			app_uang_keluar_detail.jenis_uang_id as jenis_uang_id,
			app_uang_keluar_detail.pecahan_id as pecahan_id,
			app_uang_keluar_detail.emisi_id as emisi_id,
			app_uang_keluar_detail.kondisi_id as kondisi_id,
			app_uang_keluar_detail.jumlah as jumlah,
			app_uang_keluar_detail.user_input as user_input,
			app_uang_keluar_detail.input_time as input_time,
			app_uang_keluar_detail.user_update as user_update,
			app_uang_keluar_detail.update_time as update_time,
			uk.id as uk_id,
			uk.no as no,
			uk.cabang_id as cabang_id,
			uk.sentra_kas_id as sentra_kas_id,
			uk.jumlah_global as jumlah_global,
			uk.status_pengiriman as status_pengiriman,
			uk.tanggal_pengiriman as tanggal_pengiriman,
			uk.waktu_kirim as waktu_kirim,
			uk.waktu_serah_terima as waktu_serah_terima,
			uk.no_kendaraan as no_kendaraan,
			uk.diserahkan_oleh as diserahkan_oleh,
			uk.diterima_oleh as diterima_oleh,
			uk.detail_tas as detail_tas,
			uk.keterangan as keterangan,
			uk.user_input as uk_user_input,
			uk.input_time as uk_input_time,
			uk.user_update as uk_user_update,
			uk.update_time as uk_update_time,
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
		');
		
		$this->datatables->from('app_uang_keluar_detail');
	
		$this->datatables->join('app_uang_keluar uk','uk.id=app_uang_keluar_detail.uang_keluar_id','LEFT'); 
	
		$this->datatables->join('app_jenis_uang j','j.id=app_uang_keluar_detail.jenis_uang_id','LEFT'); 
	
		$this->datatables->join('app_pecahan p','p.id=app_uang_keluar_detail.pecahan_id','LEFT'); 
	
		$this->datatables->join('app_emisi e','e.id=app_uang_keluar_detail.emisi_id','LEFT'); 
	
		$this->datatables->join('app_kondisi k','k.id=app_uang_keluar_detail.kondisi_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_uang_keluar_detail.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_uang_keluar_detail.user_update','LEFT'); 
 

		if($uang_keluar_id!==null){
			$this->datatables->where('uang_keluar_id',$uang_keluar_id);
		}
		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_uang_keluar_detail.id as id',
			'app_uang_keluar_detail.uang_keluar_id as uang_keluar_id',
			'app_uang_keluar_detail.jenis_uang_id as jenis_uang_id',
			'app_uang_keluar_detail.pecahan_id as pecahan_id',
			'app_uang_keluar_detail.emisi_id as emisi_id',
			'app_uang_keluar_detail.kondisi_id as kondisi_id',
			'app_uang_keluar_detail.jumlah as jumlah',
			'app_uang_keluar_detail.user_input as user_input',
			'app_uang_keluar_detail.input_time as input_time',
			'app_uang_keluar_detail.user_update as user_update',
			'app_uang_keluar_detail.update_time as update_time',
			'uk.id as uk_id',
			'uk.no as no',
			'uk.cabang_id as cabang_id',
			'uk.sentra_kas_id as sentra_kas_id',
			'uk.jumlah_global as jumlah_global',
			'uk.status_pengiriman as status_pengiriman',
			'uk.tanggal_pengiriman as tanggal_pengiriman',
			'uk.waktu_kirim as waktu_kirim',
			'uk.waktu_serah_terima as waktu_serah_terima',
			'uk.no_kendaraan as no_kendaraan',
			'uk.diserahkan_oleh as diserahkan_oleh',
			'uk.diterima_oleh as diterima_oleh',
			'uk.detail_tas as detail_tas',
			'uk.keterangan as keterangan',
			'uk.user_input as uk_user_input',
			'uk.input_time as uk_input_time',
			'uk.user_update as uk_user_update',
			'uk.update_time as uk_update_time',
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
		
		);
		$this->db->select($afield);
		$this->db->join('app_uang_keluar uk','uk.id=app_uang_keluar_detail.uang_keluar_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=app_uang_keluar_detail.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_uang_keluar_detail.pecahan_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_uang_keluar_detail.emisi_id','LEFT'); 
		$this->db->join('app_kondisi k','k.id=app_uang_keluar_detail.kondisi_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_keluar_detail.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_keluar_detail.user_update','LEFT'); 

		$this->db->order_by('app_uang_keluar_detail.id', 'ASC');
		return $this->db->get('app_uang_keluar_detail')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_uang_keluar_detail.id as id',
			'app_uang_keluar_detail.uang_keluar_id as uang_keluar_id',
			'app_uang_keluar_detail.jenis_uang_id as jenis_uang_id',
			'app_uang_keluar_detail.pecahan_id as pecahan_id',
			'app_uang_keluar_detail.emisi_id as emisi_id',
			'app_uang_keluar_detail.kondisi_id as kondisi_id',
			'app_uang_keluar_detail.jumlah as jumlah',
			'app_uang_keluar_detail.user_input as user_input',
			'app_uang_keluar_detail.input_time as input_time',
			'app_uang_keluar_detail.user_update as user_update',
			'app_uang_keluar_detail.update_time as update_time',
			'uk.id as uk_id',
			'uk.no as no',
			'uk.cabang_id as cabang_id',
			'uk.sentra_kas_id as sentra_kas_id',
			'uk.jumlah_global as jumlah_global',
			'uk.status_pengiriman as status_pengiriman',
			'uk.tanggal_pengiriman as tanggal_pengiriman',
			'uk.waktu_kirim as waktu_kirim',
			'uk.waktu_serah_terima as waktu_serah_terima',
			'uk.no_kendaraan as no_kendaraan',
			'uk.diserahkan_oleh as diserahkan_oleh',
			'uk.diterima_oleh as diterima_oleh',
			'uk.detail_tas as detail_tas',
			'uk.keterangan as keterangan',
			'uk.user_input as uk_user_input',
			'uk.input_time as uk_input_time',
			'uk.user_update as uk_user_update',
			'uk.update_time as uk_update_time',
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
		
		);
		$this->db->select($afield);
		$this->db->join('app_uang_keluar uk','uk.id=app_uang_keluar_detail.uang_keluar_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=app_uang_keluar_detail.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_uang_keluar_detail.pecahan_id','LEFT'); 
		$this->db->join('app_emisi e','e.id=app_uang_keluar_detail.emisi_id','LEFT'); 
		$this->db->join('app_kondisi k','k.id=app_uang_keluar_detail.kondisi_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_keluar_detail.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_keluar_detail.user_update','LEFT'); 

		$this->db->where('app_uang_keluar_detail.id', $id);
		$this->db->order_by('app_uang_keluar_detail.id', 'ASC');
		return $this->db->get('app_uang_keluar_detail')->row();
   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_uang_keluar_detail.id <>',$id);

		$q = $this->db->get_where('app_uang_keluar_detail', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_uang_keluar_detail', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_uang_keluar_detail.id', $id);
		$this->db->update('app_uang_keluar_detail', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){

		
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_uang_keluar_detail.id',$data);	
	
			$this->db->delete('app_uang_keluar_detail');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_uang_keluar_detail', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 	}

	function saldo($w,$sentra_kas_id){		
		$m=0;
		$k=0;
		$this->db->select('sum(app_journal_proses.jumlah) as jumlah');
		$this->db->join('app_uang_masuk_detail','app_uang_masuk_detail.id=app_journal_proses.uang_masuk_detail_id','LEFT');
		$this->db->join('app_uang_masuk','app_uang_masuk.id=app_uang_masuk_detail.uang_masuk_id','LEFT');
		$this->db->join('app_cabang_cpc','app_cabang_cpc.id=app_uang_masuk.cabang_id','LEFT');
		//$this->db->group_by('app_uang_masuk.id');

		$this->db->where('app_uang_masuk.sentra_kas_id',$sentra_kas_id);

		$masuk=$this->db->get_where('app_journal_proses',$w)->row();

		$this->db->select('sum(app_uang_keluar_detail.jumlah) as jumlah');
		$this->db->join('app_uang_keluar','app_uang_keluar.id=app_uang_keluar_detail.uang_keluar_id','LEFT');
		$this->db->join('app_cabang_cpc','app_cabang_cpc.id=app_uang_keluar.cabang_id','LEFT');
		//$this->db->group_by('app_uang_keluar.id');

		$this->db->where('app_uang_keluar.sentra_kas_id',$sentra_kas_id);

		$keluar=$this->db->get_where('app_uang_keluar_detail',$w)->row();

		if($masuk){
			$m=$masuk->jumlah;
		}

		if($keluar){
			$k=$keluar->jumlah;
		}

		return $m-$k;
	
	}


};
