<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_masuk_detail_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_uang_masuk_detail_id	= 'ID';
		$this->app_uang_masuk_detail_uang_masuk_id	= 'NO_BA';
		$this->app_uang_masuk_detail_jenis_uang_id	= 'JENIS_UANG';
		$this->app_uang_masuk_detail_pecahan_id	= 'PECAHAN';
		$this->app_uang_masuk_detail_jumlah	= 'JUMLAH';
		$this->app_uang_masuk_detail_user_input	= 'USERID_INPUT';
		$this->app_uang_masuk_detail_input_time	= 'INPUT_TIME';
		$this->app_uang_masuk_detail_user_update	= 'USERID_UPDATE';
		$this->app_uang_masuk_detail_update_time	= 'UPDATE_TIME';
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
		$this->u_keterangan	= 'KETERANGAN';
		$this->u_user_input	= 'U_USER_INPUT';
		$this->u_input_time	= 'U_INPUT_TIME';
		$this->u_user_update	= 'U_USER_UPDATE';
		$this->u_update_time	= 'U_UPDATE_TIME';
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
		$this->f_jumlah	= 'jumlah';
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
		$this->f_keterangan	= 'keterangan';
		$this->f_u_user_input	= 'u_user_input';
		$this->f_u_input_time	= 'u_input_time';
		$this->f_u_user_update	= 'u_user_update';
		$this->f_u_update_time	= 'u_update_time';
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
			$this->f_id	=> $this->app_uang_masuk_detail_id,
			//$this->f_uang_masuk_id	=> $this->app_uang_masuk_detail_uang_masuk_id,
			$this->f_no	=> $this->u_no,
			// $this->f_jenis_uang_id	=> $this->app_uang_masuk_detail_jenis_uang_id,
			$this->f_jenis_uang	=> $this->j_jenis_uang,
			// $this->f_pecahan_id	=> $this->app_uang_masuk_detail_pecahan_id,
			$this->f_pecahan	=> $this->p_pecahan,
			$this->f_jumlah	=> $this->app_uang_masuk_detail_jumlah,
			//$this->f_user_input	=> $this->app_uang_masuk_detail_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_uang_masuk_detail_input_time,			
			//$this->f_user_update	=> $this->app_uang_masuk_detail_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_uang_masuk_detail_update_time,
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
			// $this->f_keterangan	=> $this->u_keterangan,
			// $this->f_u_user_input	=> $this->u_user_input,
			// $this->f_u_input_time	=> $this->u_input_time,
			// $this->f_u_user_update	=> $this->u_user_update,
			// $this->f_u_update_time	=> $this->u_update_time,
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
/* Generated by YBS CRUD Generator 2021-12-17 16:04:06 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

