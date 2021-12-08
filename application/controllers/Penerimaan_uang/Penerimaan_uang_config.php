<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penerimaan_uang_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_penerimaan_uang_id	= 'ID';
		$this->app_penerimaan_uang_cabang_id	= 'CABANG';
		$this->app_penerimaan_uang_sentra_kas_id	= 'SENTRA_KAS';
		$this->app_penerimaan_uang_jumlah_global	= 'JUMLAH_GLOBAL';
		$this->app_penerimaan_uang_status_penerimaan	= 'STATUS_PENERIMAAN';
		$this->app_penerimaan_uang_tanggal_penerimaan	= 'TANGGAL_PENERIMAAN';
		$this->app_penerimaan_uang_keterangan	= 'KETERANGAN';
		$this->app_penerimaan_uang_user_input	= 'USERID_INPUT';
		$this->app_penerimaan_uang_input_time	= 'INPUT_TIME';
		$this->app_penerimaan_uang_user_update	= 'USERID_UPDATE';
		$this->app_penerimaan_uang_update_time	= 'UPDATE_TIME';
		$this->c_id	= 'C_ID';
		$this->c_bank_id	= 'BANK_ID';
		$this->c_nama_cabang	= 'NAMA_CABANG';
		$this->c_alamat	= 'ALAMAT';
		$this->c_deskripsi	= 'DESKRIPSI';
		$this->c_sentra_kas_id	= 'C_SENTRA_KAS_ID';
		$this->c_user_input	= 'C_USER_INPUT';
		$this->c_input_time	= 'C_INPUT_TIME';
		$this->c_user_update	= 'C_USER_UPDATE';
		$this->c_update_time	= 'C_UPDATE_TIME';
		$this->s_id	= 'S_ID';
		$this->s_kode_sentra	= 'KODE_SENTRA';
		$this->s_sentra	= 'SENTRA';
		$this->s_nama_sentra	= 'NAMA_SENTRA';
		$this->s_alamat	= 'S_ALAMAT';
		$this->s_user_input	= 'S_USER_INPUT';
		$this->s_input_time	= 'S_INPUT_TIME';
		$this->s_user_update	= 'S_USER_UPDATE';
		$this->s_update_time	= 'S_UPDATE_TIME';
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
		$this->f_cabang_id	= 'cabang_id';
		$this->f_sentra_kas_id	= 'sentra_kas_id';
		$this->f_jumlah_global	= 'jumlah_global';
		$this->f_status_penerimaan	= 'status_penerimaan';
		$this->f_tanggal_penerimaan	= 'tanggal_penerimaan';
		$this->f_keterangan	= 'keterangan';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_c_id	= 'c_id';
		$this->f_bank_id	= 'bank_id';
		$this->f_nama_cabang	= 'nama_cabang';
		$this->f_alamat	= 'alamat';
		$this->f_deskripsi	= 'deskripsi';
		$this->f_c_sentra_kas_id	= 'c_sentra_kas_id';
		$this->f_c_user_input	= 'c_user_input';
		$this->f_c_input_time	= 'c_input_time';
		$this->f_c_user_update	= 'c_user_update';
		$this->f_c_update_time	= 'c_update_time';
		$this->f_s_id	= 's_id';
		$this->f_kode_sentra	= 'kode_sentra';
		$this->f_sentra	= 'sentra';
		$this->f_nama_sentra	= 'nama_sentra';
		$this->f_s_alamat	= 's_alamat';
		$this->f_s_user_input	= 's_user_input';
		$this->f_s_input_time	= 's_input_time';
		$this->f_s_user_update	= 's_user_update';
		$this->f_s_update_time	= 's_update_time';
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
			$this->f_id	=> $this->app_penerimaan_uang_id,
			// $this->f_cabang_id	=> $this->app_penerimaan_uang_cabang_id,
			$this->f_nama_cabang	=> $this->c_nama_cabang,
			// $this->f_sentra_kas_id	=> $this->app_penerimaan_uang_sentra_kas_id,
			$this->f_sentra	=> $this->s_sentra,
			$this->f_jumlah_global	=> $this->app_penerimaan_uang_jumlah_global,
			$this->f_status_penerimaan	=> $this->app_penerimaan_uang_status_penerimaan,
			$this->f_tanggal_penerimaan	=> $this->app_penerimaan_uang_tanggal_penerimaan,
			$this->f_keterangan	=> $this->app_penerimaan_uang_keterangan,
			//$this->f_user_input	=> $this->app_penerimaan_uang_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_penerimaan_uang_input_time,
			//$this->f_user_update	=> $this->app_penerimaan_uang_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_penerimaan_uang_update_time,
			// $this->f_c_id	=> $this->c_id,
			// $this->f_bank_id	=> $this->c_bank_id,
			// $this->f_nama_cabang	=> $this->c_nama_cabang,
			// $this->f_alamat	=> $this->c_alamat,
			// $this->f_deskripsi	=> $this->c_deskripsi,
			// $this->f_c_sentra_kas_id	=> $this->c_sentra_kas_id,
			// $this->f_c_user_input	=> $this->c_user_input,
			// $this->f_c_input_time	=> $this->c_input_time,
			// $this->f_c_user_update	=> $this->c_user_update,
			// $this->f_c_update_time	=> $this->c_update_time,
			// $this->f_s_id	=> $this->s_id,
			// $this->f_kode_sentra	=> $this->s_kode_sentra,
			// $this->f_sentra	=> $this->s_sentra,
			// $this->f_nama_sentra	=> $this->s_nama_sentra,
			// $this->f_s_alamat	=> $this->s_alamat,
			// $this->f_s_user_input	=> $this->s_user_input,
			// $this->f_s_input_time	=> $this->s_input_time,
			// $this->f_s_user_update	=> $this->s_user_update,
			// $this->f_s_update_time	=> $this->s_update_time,
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
/* Generated by YBS CRUD Generator 2021-12-03 16:07:26 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

