<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_selisih_detail_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_uang_selisih_detail_id	= 'ID';
		$this->app_uang_selisih_detail_uang_masuk_id	= 'UANG_MASUK_ID';
		$this->app_uang_selisih_detail_jenis_uang_id	= 'JENIS_UANG_ID';
		$this->app_uang_selisih_detail_pecahan_id	= 'PECAHAN_ID';
		$this->app_uang_selisih_detail_kategori_selisih_id	= 'KATEGORI_SELISIH_ID';
		$this->app_uang_selisih_detail_jumlah	= 'JUMLAH';
		$this->app_uang_selisih_detail_status	= 'STATUS';
		$this->app_uang_selisih_detail_tanggal_pencatatan	= 'TANGGAL_PENCATATAN';
		$this->app_uang_selisih_detail_keterangan	= 'KETERANGAN';
		$this->app_uang_selisih_detail_user_input	= 'USERID_INPUT';
		$this->app_uang_selisih_detail_input_time	= 'INPUT_TIME';
		$this->app_uang_selisih_detail_user_update	= 'USERID_UPDATE';
		$this->app_uang_selisih_detail_update_time	= 'UPDATE_TIME';
		$this->um_id	= 'UM_ID';
		$this->um_no	= 'NO';
		$this->um_cabang_id	= 'CABANG_ID';
		$this->um_sentra_kas_id	= 'SENTRA_KAS_ID';
		$this->um_jumlah_global	= 'JUMLAH_GLOBAL';
		$this->um_status_penerimaan	= 'STATUS_PENERIMAAN';
		$this->um_tanggal_penerimaan	= 'TANGGAL_PENERIMAAN';
		$this->um_waktu_tiba	= 'WAKTU_TIBA';
		$this->um_waktu_serah_terima	= 'WAKTU_SERAH_TERIMA';
		$this->um_no_kendaraan	= 'NO_KENDARAAN';
		$this->um_diserahkan_oleh	= 'DISERAHKAN_OLEH';
		$this->um_diterima_oleh	= 'DITERIMA_OLEH';
		$this->um_detail_tas	= 'DETAIL_TAS';
		$this->um_keterangan	= 'UM_KETERANGAN';
		$this->um_user_input	= 'UM_USER_INPUT';
		$this->um_input_time	= 'UM_INPUT_TIME';
		$this->um_user_update	= 'UM_USER_UPDATE';
		$this->um_update_time	= 'UM_UPDATE_TIME';
		$this->j_id	= 'J_ID';
		$this->j_jenis_uang	= 'JENIS_UANG';
		$this->j_keterangan	= 'J_KETERANGAN';
		$this->j_user_input	= 'J_USER_INPUT';
		$this->j_input_time	= 'J_INPUT_TIME';
		$this->j_user_update	= 'J_USER_UPDATE';
		$this->j_update_time	= 'J_UPDATE_TIME';
		$this->p_id	= 'P_ID';
		$this->p_pecahan	= 'PECAHAN';
		$this->p_keterangan	= 'P_KETERANGAN';
		$this->p_user_input	= 'P_USER_INPUT';
		$this->p_input_time	= 'P_INPUT_TIME';
		$this->p_user_update	= 'P_USER_UPDATE';
		$this->p_update_time	= 'P_UPDATE_TIME';
		$this->k_id	= 'K_ID';
		$this->k_nama_selisih	= 'NAMA_SELISIH';
		$this->k_jenis_selisih	= 'JENIS_SELISIH';
		$this->k_user_input	= 'K_USER_INPUT';
		$this->k_input_time	= 'K_INPUT_TIME';
		$this->k_user_update	= 'K_USER_UPDATE';
		$this->k_update_time	= 'K_UPDATE_TIME';
		$this->userinput_id	= 'USERINPUT_ID';
		$this->userinput_nmuser	= 'NMUSER';
		$this->userinput_passuser	= 'PASSUSER';
		$this->userinput_nama_lengkap	= 'USER_INPUT';
		$this->userinput_tanda_tangan	= 'TANDA_TANGAN';
		$this->userinput_opt_level	= 'OPT_LEVEL';
		$this->userinput_opt_status	= 'OPT_STATUS';
		$this->userinput_picture	= 'PICTURE';
		$this->userupdate_id	= 'USERUPDATE_ID';
		$this->userupdate_nmuser	= 'USERUPDATE_NMUSER';
		$this->userupdate_passuser	= 'USERUPDATE_PASSUSER';
		$this->userupdate_nama_lengkap	= 'USER_UPDATE';
		$this->userupdate_tanda_tangan	= 'USERUPDATE_TANDA_TANGAN';
		$this->userupdate_opt_level	= 'USERUPDATE_OPT_LEVEL';
		$this->userupdate_opt_status	= 'USERUPDATE_OPT_STATUS';
		$this->userupdate_picture	= 'USERUPDATE_PICTURE';

		
		
		
		/*field_alias_database db*/
		$this->f_id	= 'id';
		$this->f_uang_masuk_id	= 'uang_masuk_id';
		$this->f_jenis_uang_id	= 'jenis_uang_id';
		$this->f_pecahan_id	= 'pecahan_id';
		$this->f_kategori_selisih_id	= 'kategori_selisih_id';
		$this->f_jumlah	= 'jumlah';
		$this->f_status	= 'status';
		$this->f_tanggal_pencatatan	= 'tanggal_pencatatan';
		$this->f_keterangan	= 'keterangan';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_um_id	= 'um_id';
		$this->f_no	= 'no';
		$this->f_cabang_id	= 'cabang_id';
		$this->f_sentra_kas_id	= 'sentra_kas_id';
		$this->f_jumlah_global	= 'jumlah_global';
		$this->f_status_penerimaan	= 'status_penerimaan';
		$this->f_tanggal_penerimaan	= 'tanggal_penerimaan';
		$this->f_waktu_tiba	= 'waktu_tiba';
		$this->f_waktu_serah_terima	= 'waktu_serah_terima';
		$this->f_no_kendaraan	= 'no_kendaraan';
		$this->f_diserahkan_oleh	= 'diserahkan_oleh';
		$this->f_diterima_oleh	= 'diterima_oleh';
		$this->f_detail_tas	= 'detail_tas';
		$this->f_um_keterangan	= 'um_keterangan';
		$this->f_um_user_input	= 'um_user_input';
		$this->f_um_input_time	= 'um_input_time';
		$this->f_um_user_update	= 'um_user_update';
		$this->f_um_update_time	= 'um_update_time';
		$this->f_j_id	= 'j_id';
		$this->f_jenis_uang	= 'jenis_uang';
		$this->f_j_keterangan	= 'j_keterangan';
		$this->f_j_user_input	= 'j_user_input';
		$this->f_j_input_time	= 'j_input_time';
		$this->f_j_user_update	= 'j_user_update';
		$this->f_j_update_time	= 'j_update_time';
		$this->f_p_id	= 'p_id';
		$this->f_pecahan	= 'pecahan';
		$this->f_p_keterangan	= 'p_keterangan';
		$this->f_p_user_input	= 'p_user_input';
		$this->f_p_input_time	= 'p_input_time';
		$this->f_p_user_update	= 'p_user_update';
		$this->f_p_update_time	= 'p_update_time';
		$this->f_k_id	= 'k_id';
		$this->f_nama_selisih	= 'nama_selisih';
		$this->f_jenis_selisih	= 'jenis_selisih';
		$this->f_k_user_input	= 'k_user_input';
		$this->f_k_input_time	= 'k_input_time';
		$this->f_k_user_update	= 'k_user_update';
		$this->f_k_update_time	= 'k_update_time';
		$this->f_userinput_id	= 'userinput_id';
		$this->f_nmuser	= 'nmuser';
		$this->f_passuser	= 'passuser';
		$this->f_nama_lengkap	= 'nama_lengkap';
		$this->f_tanda_tangan	= 'tanda_tangan';
		$this->f_opt_level	= 'opt_level';
		$this->f_opt_status	= 'opt_status';
		$this->f_picture	= 'picture';
		$this->f_userupdate_id	= 'userupdate_id';
		$this->f_userupdate_nmuser	= 'userupdate_nmuser';
		$this->f_userupdate_passuser	= 'userupdate_passuser';
		$this->f_userupdate_nama_lengkap	= 'userupdate_nama_lengkap';
		$this->f_userupdate_tanda_tangan	= 'userupdate_tanda_tangan';
		$this->f_userupdate_opt_level	= 'userupdate_opt_level';
		$this->f_userupdate_opt_status	= 'userupdate_opt_status';
		$this->f_userupdate_picture	= 'userupdate_picture';

		
		
		
		/* CONFIG FORM LIST */
		/* field_alias_database => $title */	
		$this->table_column =array(
			$this->f_id	=> $this->app_uang_selisih_detail_id,
			// $this->f_uang_masuk_id	=> $this->app_uang_selisih_detail_uang_masuk_id,
			// $this->f_jenis_uang_id	=> $this->app_uang_selisih_detail_jenis_uang_id,
			$this->f_jenis_uang	=> $this->j_jenis_uang,
			// $this->f_pecahan_id	=> $this->app_uang_selisih_detail_pecahan_id,
			$this->f_pecahan	=> $this->p_pecahan,
			// $this->f_kategori_selisih_id	=> $this->app_uang_selisih_detail_kategori_selisih_id,
			$this->f_nama_selisih	=> $this->k_nama_selisih,
			$this->f_jumlah	=> $this->app_uang_selisih_detail_jumlah,
			//$this->f_status	=> $this->app_uang_selisih_detail_status,
			$this->f_tanggal_pencatatan	=> $this->app_uang_selisih_detail_tanggal_pencatatan,
			$this->f_keterangan	=> $this->app_uang_selisih_detail_keterangan,
			//$this->f_user_input	=> $this->app_uang_selisih_detail_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_uang_selisih_detail_input_time,
			//$this->f_user_update	=> $this->app_uang_selisih_detail_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_uang_selisih_detail_update_time,
			// $this->f_um_id	=> $this->um_id,
			// $this->f_no	=> $this->um_no,
			// $this->f_cabang_id	=> $this->um_cabang_id,
			// $this->f_sentra_kas_id	=> $this->um_sentra_kas_id,
			// $this->f_jumlah_global	=> $this->um_jumlah_global,
			// $this->f_status_penerimaan	=> $this->um_status_penerimaan,
			// $this->f_tanggal_penerimaan	=> $this->um_tanggal_penerimaan,
			// $this->f_waktu_tiba	=> $this->um_waktu_tiba,
			// $this->f_waktu_serah_terima	=> $this->um_waktu_serah_terima,
			// $this->f_no_kendaraan	=> $this->um_no_kendaraan,
			// $this->f_diserahkan_oleh	=> $this->um_diserahkan_oleh,
			// $this->f_diterima_oleh	=> $this->um_diterima_oleh,
			// $this->f_detail_tas	=> $this->um_detail_tas,
			// $this->f_um_keterangan	=> $this->um_keterangan,
			// $this->f_um_user_input	=> $this->um_user_input,
			// $this->f_um_input_time	=> $this->um_input_time,
			// $this->f_um_user_update	=> $this->um_user_update,
			// $this->f_um_update_time	=> $this->um_update_time,
			// $this->f_j_id	=> $this->j_id,
			// $this->f_jenis_uang	=> $this->j_jenis_uang,
			// $this->f_j_keterangan	=> $this->j_keterangan,
			// $this->f_j_user_input	=> $this->j_user_input,
			// $this->f_j_input_time	=> $this->j_input_time,
			// $this->f_j_user_update	=> $this->j_user_update,
			// $this->f_j_update_time	=> $this->j_update_time,
			// $this->f_p_id	=> $this->p_id,
			// $this->f_pecahan	=> $this->p_pecahan,
			// $this->f_p_keterangan	=> $this->p_keterangan,
			// $this->f_p_user_input	=> $this->p_user_input,
			// $this->f_p_input_time	=> $this->p_input_time,
			// $this->f_p_user_update	=> $this->p_user_update,
			// $this->f_p_update_time	=> $this->p_update_time,
			// $this->f_k_id	=> $this->k_id,
			// $this->f_nama_selisih	=> $this->k_nama_selisih,
			// $this->f_jenis_selisih	=> $this->k_jenis_selisih,
			// $this->f_k_user_input	=> $this->k_user_input,
			// $this->f_k_input_time	=> $this->k_input_time,
			// $this->f_k_user_update	=> $this->k_user_update,
			// $this->f_k_update_time	=> $this->k_update_time,
			// $this->f_userinput_id	=> $this->userinput_id,
			// $this->f_nmuser	=> $this->userinput_nmuser,
			// $this->f_passuser	=> $this->userinput_passuser,
			// $this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			// $this->f_tanda_tangan	=> $this->userinput_tanda_tangan,
			// $this->f_opt_level	=> $this->userinput_opt_level,
			// $this->f_opt_status	=> $this->userinput_opt_status,
			// $this->f_picture	=> $this->userinput_picture,
			// $this->f_userupdate_id	=> $this->userupdate_id,
			// $this->f_userupdate_nmuser	=> $this->userupdate_nmuser,
			// $this->f_userupdate_passuser	=> $this->userupdate_passuser,
			// $this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			// $this->f_userupdate_tanda_tangan	=> $this->userupdate_tanda_tangan,
			// $this->f_userupdate_opt_level	=> $this->userupdate_opt_level,
			// $this->f_userupdate_opt_status	=> $this->userupdate_opt_status,
			// $this->f_userupdate_picture	=> $this->userupdate_picture,
		);

	}

};









/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2021-12-30 10:31:41 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

