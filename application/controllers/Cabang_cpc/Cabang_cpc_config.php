<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cabang_cpc_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_cabang_cpc_id	= 'ID';
		$this->app_cabang_cpc_bank_wilayah_id	= 'WILAYAH_BANK';
		$this->app_cabang_cpc_nama_cabang	= 'NAMA_CABANG';
		$this->app_cabang_cpc_alamat	= 'ALAMAT';
		$this->app_cabang_cpc_deskripsi	= 'DESKRIPSI';
		$this->app_cabang_cpc_sentra_kas_id	= 'SENTRA_KAS';
		$this->app_cabang_cpc_user_input	= 'USER_INPUT';
		$this->app_cabang_cpc_input_time	= 'INPUT_TIME';
		$this->app_cabang_cpc_user_update	= 'USER_UPDATE';
		$this->app_cabang_cpc_update_time	= 'UPDATE_TIME';
		$this->wilayah_id	= 'WILAYAH_ID';
		$this->wilayah_bank_id	= 'BANK_ID';
		$this->wilayah_kode_wilayah	= 'KODE_WILAYAH';
		$this->wilayah_nama_wilayah	= 'NAMA_WILAYAH';
		$this->wilayah_deskripsi	= 'WILAYAH_DESKRIPSI';
		$this->wilayah_user_input	= 'WILAYAH_USER_INPUT';
		$this->wilayah_input_time	= 'WILAYAH_INPUT_TIME';
		$this->wilayah_user_update	= 'WILAYAH_USER_UPDATE';
		$this->wilayah_update_time	= 'WILAYAH_UPDATE_TIME';
		$this->sentrakas_id	= 'SENTRAKAS_ID';
		$this->sentrakas_kode_sentra	= 'KODE_SENTRA';
		$this->sentrakas_sentra	= 'SENTRA';
		$this->sentrakas_nama_sentra	= 'SENTRA';
		$this->sentrakas_alamat	= 'SENTRAKAS_ALAMAT';
		$this->sentrakas_user_input	= 'SENTRAKAS_USER_INPUT';
		$this->sentrakas_input_time	= 'SENTRAKAS_INPUT_TIME';
		$this->sentrakas_user_update	= 'SENTRAKAS_USER_UPDATE';
		$this->sentrakas_update_time	= 'SENTRAKAS_UPDATE_TIME';
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
		$this->f_bank_wilayah_id	= 'bank_wilayah_id';
		$this->f_nama_cabang	= 'nama_cabang';
		$this->f_alamat	= 'alamat';
		$this->f_deskripsi	= 'deskripsi';
		$this->f_sentra_kas_id	= 'sentra_kas_id';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_wilayah_id	= 'wilayah_id';
		$this->f_bank_id	= 'bank_id';
		$this->f_kode_wilayah	= 'kode_wilayah';
		$this->f_nama_wilayah	= 'nama_wilayah';
		$this->f_wilayah_deskripsi	= 'wilayah_deskripsi';
		$this->f_wilayah_user_input	= 'wilayah_user_input';
		$this->f_wilayah_input_time	= 'wilayah_input_time';
		$this->f_wilayah_user_update	= 'wilayah_user_update';
		$this->f_wilayah_update_time	= 'wilayah_update_time';
		$this->f_sentrakas_id	= 'sentrakas_id';
		$this->f_kode_sentra	= 'kode_sentra';
		$this->f_sentra	= 'sentra';
		$this->f_nama_sentra	= 'nama_sentra';
		$this->f_sentrakas_alamat	= 'sentrakas_alamat';
		$this->f_sentrakas_user_input	= 'sentrakas_user_input';
		$this->f_sentrakas_input_time	= 'sentrakas_input_time';
		$this->f_sentrakas_user_update	= 'sentrakas_user_update';
		$this->f_sentrakas_update_time	= 'sentrakas_update_time';
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
			$this->f_id	=> $this->app_cabang_cpc_id,
			//$this->f_bank_wilayah_id	=> $this->app_cabang_cpc_bank_wilayah_id,
			$this->f_nama_wilayah	=> $this->wilayah_nama_wilayah,
			$this->f_nama_cabang	=> $this->app_cabang_cpc_nama_cabang,
			$this->f_alamat	=> $this->app_cabang_cpc_alamat,
			$this->f_deskripsi	=> $this->app_cabang_cpc_deskripsi,
			//$this->f_sentra_kas_id	=> $this->app_cabang_cpc_sentra_kas_id,
			$this->f_nama_sentra	=> $this->sentrakas_nama_sentra,
			//$this->f_user_input	=> $this->app_cabang_cpc_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_cabang_cpc_input_time,
			//$this->f_user_update	=> $this->app_cabang_cpc_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_cabang_cpc_update_time,
			// $this->f_wilayah_id	=> $this->wilayah_id,
			// $this->f_bank_id	=> $this->wilayah_bank_id,
			// $this->f_kode_wilayah	=> $this->wilayah_kode_wilayah,
			// $this->f_nama_wilayah	=> $this->wilayah_nama_wilayah,
			// $this->f_wilayah_deskripsi	=> $this->wilayah_deskripsi,
			// $this->f_wilayah_user_input	=> $this->wilayah_user_input,
			// $this->f_wilayah_input_time	=> $this->wilayah_input_time,
			// $this->f_wilayah_user_update	=> $this->wilayah_user_update,
			// $this->f_wilayah_update_time	=> $this->wilayah_update_time,
			// $this->f_sentrakas_id	=> $this->sentrakas_id,
			// $this->f_kode_sentra	=> $this->sentrakas_kode_sentra,
			// $this->f_sentra	=> $this->sentrakas_sentra,
			// $this->f_nama_sentra	=> $this->sentrakas_nama_sentra,
			// $this->f_sentrakas_alamat	=> $this->sentrakas_alamat,
			// $this->f_sentrakas_user_input	=> $this->sentrakas_user_input,
			// $this->f_sentrakas_input_time	=> $this->sentrakas_input_time,
			// $this->f_sentrakas_user_update	=> $this->sentrakas_user_update,
			// $this->f_sentrakas_update_time	=> $this->sentrakas_update_time,
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
/* Generated by YBS CRUD Generator 2021-11-30 15:59:17 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

