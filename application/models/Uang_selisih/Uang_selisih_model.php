<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_selisih_model extends CI_Model {
   public $id;	
   function __construct(){
        parent::__construct();
   }	
	
	public function json(){
		$this->datatables->select('
			app_uang_selisih.id as id,
			app_uang_selisih.uang_masuk_id as uang_masuk_id,
			app_uang_selisih.no as no,
			app_uang_selisih.up as up,
			app_uang_selisih.mulai_proses as mulai_proses,
			app_uang_selisih.selesai_proses as selesai_proses,
			app_uang_selisih.nama_oa as nama_oa,
			app_uang_selisih.kasir_ttp as kasir_ttp,
			app_uang_selisih.nama_kasir_bank_client as nama_kasir_bank_client,
			app_uang_selisih.ditemukan_oleh as ditemukan_oleh,
			app_uang_selisih.ditemukan_id as ditemukan_id,
			app_uang_selisih.disaksikan_oleh as disaksikan_oleh,
			app_uang_selisih.disaksikan_id as disaksikan_id,
			app_uang_selisih.diketahui_oleh as diketahui_oleh,
			app_uang_selisih.diketahui_id as diketahui_id,
			app_uang_selisih.catatan as catatan,
			app_uang_selisih.lampiran as lampiran,
			app_uang_selisih.user_input as user_input,
			app_uang_selisih.input_time as input_time,
			app_uang_selisih.user_update as user_update,
			app_uang_selisih.update_time as update_time,
			um.id as um_id,
			um.no as um_no,
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
			um.keterangan as keterangan,
			um.user_input as um_user_input,
			um.input_time as um_input_time,
			um.user_update as um_user_update,
			um.update_time as um_update_time,
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
		
		$this->datatables->from('app_uang_selisih');
	
		$this->datatables->join('app_uang_masuk um','um.id=app_uang_selisih.uang_masuk_id','LEFT'); 
	
		$this->datatables->join('sys_user userinput','userinput.id=app_uang_selisih.user_input','LEFT'); 
	
		$this->datatables->join('sys_user userupdate','userupdate.id=app_uang_selisih.user_update','LEFT'); 

		
		
		//mengembalikan dalam bentuk array
		$q =  json_decode($this->datatables->generate(),true);
		return $q;
	}
	

   public function get_all(){
		$afield = array(
			'app_uang_selisih.id as id',
			'app_uang_selisih.uang_masuk_id as uang_masuk_id',
			'app_uang_selisih.no as no',
			'app_uang_selisih.up as up',
			'app_uang_selisih.mulai_proses as mulai_proses',
			'app_uang_selisih.selesai_proses as selesai_proses',
			'app_uang_selisih.nama_oa as nama_oa',
			'app_uang_selisih.kasir_ttp as kasir_ttp',
			'app_uang_selisih.nama_kasir_bank_client as nama_kasir_bank_client',
			'app_uang_selisih.ditemukan_oleh as ditemukan_oleh',
			'app_uang_selisih.ditemukan_id as ditemukan_id',
			'app_uang_selisih.disaksikan_oleh as disaksikan_oleh',
			'app_uang_selisih.disaksikan_id as disaksikan_id',
			'app_uang_selisih.diketahui_oleh as diketahui_oleh',
			'app_uang_selisih.diketahui_id as diketahui_id',
			'app_uang_selisih.catatan as catatan',
			'app_uang_selisih.lampiran as lampiran',
			'app_uang_selisih.user_input as user_input',
			'app_uang_selisih.input_time as input_time',
			'app_uang_selisih.user_update as user_update',
			'app_uang_selisih.update_time as update_time',
			'um.id as um_id',
			'um.no as um_no',
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
			'um.keterangan as keterangan',
			'um.user_input as um_user_input',
			'um.input_time as um_input_time',
			'um.user_update as um_user_update',
			'um.update_time as um_update_time',
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
		$this->db->join('app_uang_masuk um','um.id=app_uang_selisih.uang_masuk_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_selisih.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_selisih.user_update','LEFT'); 

		$this->db->order_by('app_uang_selisih.id', 'ASC');
		return $this->db->get('app_uang_selisih')->result_array();
   }


	public function get_by_id($id,$id_um=false){
		$afield = array(
			'app_uang_selisih.id as id',
			'app_uang_selisih.uang_masuk_id as uang_masuk_id',
			'app_uang_selisih.no as no',
			'app_uang_selisih.up as up',
			'app_uang_selisih.mulai_proses as mulai_proses',
			'app_uang_selisih.selesai_proses as selesai_proses',
			'app_uang_selisih.nama_oa as nama_oa',
			'app_uang_selisih.kasir_ttp as kasir_ttp',
			'app_uang_selisih.nama_kasir_bank_client as nama_kasir_bank_client',
			'app_uang_selisih.ditemukan_oleh as ditemukan_oleh',
			'app_uang_selisih.ditemukan_id as ditemukan_id',
			'app_uang_selisih.disaksikan_oleh as disaksikan_oleh',
			'app_uang_selisih.disaksikan_id as disaksikan_id',
			'app_uang_selisih.diketahui_oleh as diketahui_oleh',
			'app_uang_selisih.diketahui_id as diketahui_id',
			'app_uang_selisih.catatan as catatan',
			'app_uang_selisih.lampiran as lampiran',
			'app_uang_selisih.user_input as user_input',
			'app_uang_selisih.input_time as input_time',
			'app_uang_selisih.user_update as user_update',
			'app_uang_selisih.update_time as update_time',
			'um.id as um_id',
			'um.no as um_no',
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
			'um.keterangan as keterangan',
			'um.user_input as um_user_input',
			'um.input_time as um_input_time',
			'um.user_update as um_user_update',
			'um.update_time as um_update_time',
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
		$this->db->join('app_uang_masuk um','um.id=app_uang_selisih.uang_masuk_id','LEFT'); 
		$this->db->join('sys_user userinput','userinput.id=app_uang_selisih.user_input','LEFT'); 
		$this->db->join('sys_user userupdate','userupdate.id=app_uang_selisih.user_update','LEFT'); 

		if($id_um=false){
			$this->db->where('app_uang_selisih.id', $id);
		}
		else{
			$this->db->where('app_uang_selisih.uang_masuk_id', $id);
		}
		

		$this->db->order_by('app_uang_selisih.id', 'ASC');
		return $this->db->get('app_uang_selisih')->row();
   }
   
   public function get_count($wh=null){
	$afield = array(
		'count(id) as jumlah',
	);
	$this->db->select($afield,false);

	if ($wh!==null) {
		$this->db->where($wh);
	}		
	return $this->db->get('app_uang_selisih')->row();

   }


	/* Memastikan data yg dibuat tidak kembar/sama,
	   fungsi ini sebagai pengganti fungsi primary key dr db,
	   krn primary key sudah di gunakan untuk column id.
	   -create : id di kosongkan.
	   -update : id di isi dengan id data yg di proses.	
	*/	
	function if_exist($id,$data){
		$this->db->where('app_uang_selisih.id <>',$id);

		$q = $this->db->get_where('app_uang_selisih', $data)->result_array();
		
		if(count($q)>0){
			return true;
		}else{
			return false;
		}		

	

	}


	function insert($data){
	
	    /* transaction rollback */
		$this->db->trans_start();
		
		$this->db->insert('app_uang_selisih', $data);		
		/* id primary yg baru saja di input*/
		$this->id = $this->db->insert_id(); 
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false
	}

	function update($id,$data){

		/* transaction rollback */
		$this->db->trans_start();

		$this->db->where('app_uang_selisih.id', $id);
		$this->db->update('app_uang_selisih', $data);
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
	}

	function delete_multiple($data){
		/* transaction rollback */
		$this->db->trans_start();
		
		if(!empty($data)){
			$this->db->where_in('app_uang_selisih.id',$data);	
	
			$this->db->delete('app_uang_selisih');
		}
		
		$this->db->trans_complete();
		return $this->db->trans_status(); //return true or false	
		
	}

	function insert_multiple($data){
		$this->db->trans_start();
		$this->db->insert_batch('app_uang_selisih', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
 }


};
