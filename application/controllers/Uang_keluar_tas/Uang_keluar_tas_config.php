<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_keluar_tas_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_uang_keluar_tas_id	= 'ID';
		$this->app_uang_keluar_tas_uang_keluar_id	= 'UANG_MASUK_ID';
		$this->app_uang_keluar_tas_no_segel	= 'NO_SEGEL';
		$this->app_uang_keluar_tas_no_tas	= 'NO_TAS';
		$this->app_uang_keluar_tas_keterangan	= 'KETERANGAN';
		$this->app_uang_keluar_tas_user_input	= 'USERID_INPUT';
		$this->app_uang_keluar_tas_input_time	= 'INPUT_TIME';
		$this->app_uang_keluar_tas_user_update	= 'USERID_UPDATE';
		$this->app_uang_keluar_tas_update_time	= 'UPDATE_TIME';
		$this->u_id	= 'U_ID';
		$this->u_no	= 'NO';
		$this->u_cabang_id	= 'CABANG_ID';
		$this->u_sentra_kas_id	= 'SENTRA_KAS_ID';
		$this->u_jumlah_global	= 'JUMLAH_GLOBAL';
		$this->u_status_penerimaan	= 'STATUS_PENERIMAAN';
		$this->u_tanggal_penerimaan	= 'TANGGAL_PENERIMAAN';
		$this->u_waktu_tiba	= 'WAKTU_TIBA';
		$this->u_waktu_serah_terima	= 'WAKTU_SERAH_TERIMA';
		$this->u_detail_tas	= 'DETAIL_TAS';
		$this->u_keterangan	= 'U_KETERANGAN';
		$this->u_user_input	= 'U_USER_INPUT';
		$this->u_input_time	= 'U_INPUT_TIME';
		$this->u_user_update	= 'U_USER_UPDATE';
		$this->u_update_time	= 'U_UPDATE_TIME';
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
		$this->f_uang_keluar_id	= 'uang_keluar_id';
		$this->f_no_segel	= 'no_segel';
		$this->f_no_tas	= 'no_tas';
		$this->f_keterangan	= 'keterangan';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_u_id	= 'u_id';
		$this->f_no	= 'no';
		$this->f_cabang_id	= 'cabang_id';
		$this->f_sentra_kas_id	= 'sentra_kas_id';
		$this->f_jumlah_global	= 'jumlah_global';
		$this->f_status_penerimaan	= 'status_penerimaan';
		$this->f_tanggal_penerimaan	= 'tanggal_penerimaan';
		$this->f_waktu_tiba	= 'waktu_tiba';
		$this->f_waktu_serah_terima	= 'waktu_serah_terima';
		$this->f_detail_tas	= 'detail_tas';
		$this->f_u_keterangan	= 'u_keterangan';
		$this->f_u_user_input	= 'u_user_input';
		$this->f_u_input_time	= 'u_input_time';
		$this->f_u_user_update	= 'u_user_update';
		$this->f_u_update_time	= 'u_update_time';
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
			$this->f_id	=> $this->app_uang_keluar_tas_id,
			//$this->f_uang_keluar_id	=> $this->app_uang_keluar_tas_uang_keluar_id,
			$this->f_no_segel	=> $this->app_uang_keluar_tas_no_segel,
			$this->f_no_tas	=> $this->app_uang_keluar_tas_no_tas,
			$this->f_keterangan	=> $this->app_uang_keluar_tas_keterangan,
			//$this->f_user_input	=> $this->app_uang_keluar_tas_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_uang_keluar_tas_input_time,
			//$this->f_user_update	=> $this->app_uang_keluar_tas_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_uang_keluar_tas_update_time,
			// $this->f_u_id	=> $this->u_id,
			// $this->f_no	=> $this->u_no,
			// $this->f_cabang_id	=> $this->u_cabang_id,
			// $this->f_sentra_kas_id	=> $this->u_sentra_kas_id,
			// $this->f_jumlah_global	=> $this->u_jumlah_global,
			// $this->f_status_penerimaan	=> $this->u_status_penerimaan,
			// $this->f_tanggal_penerimaan	=> $this->u_tanggal_penerimaan,
			// $this->f_waktu_tiba	=> $this->u_waktu_tiba,
			// $this->f_waktu_serah_terima	=> $this->u_waktu_serah_terima,
			// $this->f_detail_tas	=> $this->u_detail_tas,
			// $this->f_u_keterangan	=> $this->u_keterangan,
			// $this->f_u_user_input	=> $this->u_user_input,
			// $this->f_u_input_time	=> $this->u_input_time,
			// $this->f_u_user_update	=> $this->u_user_update,
			// $this->f_u_update_time	=> $this->u_update_time,
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
/* Generated by YBS CRUD Generator 2021-12-20 09:23:41 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

