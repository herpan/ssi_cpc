<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_keluar_detail_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json($uang_keluar_id=null,$kategori_selisih_id=null){
		$this->datatables->select('
			app_uang_keluar_detail.id as id,
			app_uang_keluar_detail.uang_keluar_id as uang_keluar_id,
			app_uang_keluar_detail.jenis_uang_id as jenis_uang_id,
			app_uang_keluar_detail.pecahan_id as pecahan_id,
			app_uang_keluar_detail.jumlah as jumlah,
			COALESCE(pr.jumlah_proses, 0) as jumlah_proses,
			(app_uang_keluar_detail.jumlah - COALESCE(pr.jumlah_proses, 0)) as jumlah_belum_proses,
			app_uang_keluar_detail.user_input as user_input,
			app_uang_keluar_detail.input_time as input_time,
			app_uang_keluar_detail.user_update as user_update,
			app_uang_keluar_detail.update_time as update_time,
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
			u.keterangan as keterangan,
			u.user_input as u_user_input,
			u.input_time as u_input_time,
			u.user_update as u_user_update,
			u.update_time as u_update_time,
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
			k.nama_selisih as nama_selisih,
		');
		
		$this->datatables->from('app_uang_keluar_detail');		
	
		$this->datatables->join('app_uang_keluar u','u.id=app_uang_keluar_detail.uang_keluar_id','LEFT');
		
		$this->datatables->join('(select uang_keluar_detail_id,sum(jumlah) as jumlah_proses from app_journal_proses group by uang_keluar_detail_id) pr','pr.uang_keluar_detail_id=app_uang_keluar_detail.id','LEFT'); 
	
		$this->datatables->join('app_jenis_uang j','j.id=app_uang_keluar_detail.jenis_uang_id','LEFT'); 
	
		$this->datatables->join('app_pecahan p','p.id=app_uang_keluar_detail.pecahan_id','LEFT'); 
	
		$this->datatables->join('app_kategori_selisih k','k.id=app_uang_keluar_detail.kategori_selisih_id','LEFT');

		$this->datatables->join('sys_user userinput','userinput.id=app_uang_keluar_detail.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_uang_keluar_detail.user_update','LEFT'); 

		if($uang_keluar_id!==null){
			$this->datatables->where('uang_keluar_id',$uang_keluar_id);
		}

		if($kategori_selisih_id=='0'){
			$this->datatables->where('kategori_selisih_id=0');
		}
		else{
			$this->datatables->where('kategori_selisih_id<>0');	
		}
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}

	public function json2($uang_keluar_id=null){
		$this->datatables->select('
			id,
			uang_keluar_id,
			jenis_uang_id,
			pecahan_id,
			jumlah,
			selisih_kurang,
			selisih_lebih,
			jumlah_proses,
			jumlah_belum_diproses,
			jenis_uang,
			pecahan		
		');
		
		$this->datatables->from('proses_list_view');			
		if($uang_keluar_id!==null){
			$this->datatables->where('uang_keluar_id',$uang_keluar_id);
		}
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);

		
		return $q;
	}
	

   public function get_all($w=null){
		$afield = array(
			'app_uang_keluar_detail.id as id',
			'app_uang_keluar_detail.uang_keluar_id as uang_keluar_id',
			'app_uang_keluar_detail.jenis_uang_id as jenis_uang_id',
			'app_uang_keluar_detail.pecahan_id as pecahan_id',
			'app_uang_keluar_detail.jumlah as jumlah',
			'app_uang_keluar_detail.user_input as user_input',
			'app_uang_keluar_detail.input_time as input_time',
			'app_uang_keluar_detail.user_update as user_update',
			'app_uang_keluar_detail.update_time as update_time',
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
			'u.keterangan as keterangan',
			'u.user_input as u_user_input',
			'u.input_time as u_input_time',
			'u.user_update as u_user_update',
			'u.update_time as u_update_time',
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
		$this->db->join('app_uang_keluar u','u.id=app_uang_keluar_detail.uang_keluar_id','LEFT'); 
		$this->db->join('app_jenis_uang j','j.id=app_uang_keluar_detail.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_uang_keluar_detail.pecahan_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_keluar_detail.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_keluar_detail.user_update','LEFT'); 

		if($w !== null){
			$this->db->where($w);
		}

		$this->db->order_by('app_uang_keluar_detail.id', 'ASC');
		return $this->db->get('app_uang_keluar_detail')->result_array();
   }


	public function get_by_id($id){
		$afield = array(
			'app_uang_keluar_detail.id as id',
			'app_uang_keluar_detail.uang_keluar_id as uang_keluar_id',
			'app_uang_keluar_detail.jenis_uang_id as jenis_uang_id',
			'app_uang_keluar_detail.pecahan_id as pecahan_id',
			'app_uang_keluar_detail.jumlah as jumlah',
			'COALESCE(pr.jumlah_proses, 0) as jumlah_proses',
			'(app_uang_keluar_detail.jumlah - COALESCE(pr.jumlah_proses, 0)) as jumlah_belum_proses',
			'app_uang_keluar_detail.user_input as user_input',
			'app_uang_keluar_detail.input_time as input_time',
			'app_uang_keluar_detail.user_update as user_update',
			'app_uang_keluar_detail.update_time as update_time',
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
			'u.keterangan as keterangan',
			'u.user_input as u_user_input',
			'u.input_time as u_input_time',
			'u.user_update as u_user_update',
			'u.update_time as u_update_time',
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
		$this->db->join('app_uang_keluar u','u.id=app_uang_keluar_detail.uang_keluar_id','LEFT'); 
		$this->db->join('(select uang_keluar_detail_id,sum(jumlah) as jumlah_proses from app_journal_proses group by uang_keluar_detail_id) pr','pr.uang_keluar_detail_id=app_uang_keluar_detail.id','LEFT');
		$this->db->join('app_jenis_uang j','j.id=app_uang_keluar_detail.jenis_uang_id','LEFT'); 
		$this->db->join('app_pecahan p','p.id=app_uang_keluar_detail.pecahan_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_keluar_detail.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_keluar_detail.user_update','LEFT'); 

		$this->db->where('app_uang_keluar_detail.id', $id);
		$this->db->order_by('app_uang_keluar_detail.id', 'ASC');
		return $this->db->get('app_uang_keluar_detail')->row();
   }

   function cek_input_proses($where){
	    $this->db->select('jumlah_belum_diproses');
		return $this->db->get_where('proses_list_view',$where)->row();
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

		//Mencegah proses jika sudah ada data yang di proses
		if($data['kategori_selisih_id']=='0'){
			$this->db->select('sum(COALESCE(app_journal_proses.jumlah, 0)) as jumlah');
			$this->db->join('app_journal_proses','app_journal_proses.uang_keluar_detail_id=app_uang_keluar_detail.id','LEFT');
			$this->db->where('app_uang_keluar_detail.uang_keluar_id',$data['uang_keluar_id']);
			$cek=$this->db->get('app_uang_keluar_detail')->row();
			if($cek->jumlah!==0 && $cek->jumlah!==NULL){
				return false;
			}
		}		
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_uang_keluar_detail', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){


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

		$this->db->where('app_uang_keluar_detail.id', $id);
		$this->db->update('app_uang_keluar_detail', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){

		//Mencegah proses jika sudah ada data yang di proses

			$this->db->select('sum(COALESCE(app_journal_proses.jumlah, 0)) as jumlah, sum(app_uang_keluar_detail.kategori_selisih_id) as app_uang_keluar_detail');
			$this->db->join('app_journal_proses','app_journal_proses.uang_keluar_detail_id=app_uang_keluar_detail.id','LEFT');
			$this->db->where('app_uang_keluar_detail.uang_keluar_id',$data['uang_keluar_id']);
			$cek=$this->db->get('app_uang_keluar_detail')->row();
			if($cek->jumlah!=='0' && $cek->kategori_selisih_id=='0'){
				return false;
			}
		

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


};
