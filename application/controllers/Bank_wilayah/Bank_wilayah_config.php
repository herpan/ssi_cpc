<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bank_wilayah_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_bank_wilayah_id	= 'ID';
		$this->app_bank_wilayah_bank_id	= 'BANK_ID';
		$this->app_bank_wilayah_kode_wilayah	= 'KODE_WILAYAH';
		$this->app_bank_wilayah_nama_wilayah	= 'NAMA_WILAYAH';
		$this->app_bank_wilayah_deskripsi	= 'DESKRIPSI';
		$this->app_bank_wilayah_user_input	= 'USER_INPUT';
		$this->app_bank_wilayah_input_time	= 'INPUT_TIME';
		$this->app_bank_wilayah_user_update	= 'USER_UPDATE';
		$this->app_bank_wilayah_update_time	= 'UPDATE_TIME';
		$this->bankid_id	= 'BANKID_ID';
		$this->bankid_kode_bank	= 'KODE_BANK';
		$this->bankid_bank	= 'BANK';
		$this->bankid_deskripsi	= 'BANKID_DESKRIPSI';
		$this->bankid_user_input	= 'BANKID_USER_INPUT';
		$this->bankid_input_time	= 'BANKID_INPUT_TIME';
		$this->bankid_user_update	= 'BANKID_USER_UPDATE';
		$this->bankid_update_time	= 'BANKID_UPDATE_TIME';
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
		$this->f_bank_id	= 'bank_id';
		$this->f_kode_wilayah	= 'kode_wilayah';
		$this->f_nama_wilayah	= 'nama_wilayah';
		$this->f_deskripsi	= 'deskripsi';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_bankid_id	= 'bankid_id';
		$this->f_kode_bank	= 'kode_bank';
		$this->f_bank	= 'bank';
		$this->f_bankid_deskripsi	= 'bankid_deskripsi';
		$this->f_bankid_user_input	= 'bankid_user_input';
		$this->f_bankid_input_time	= 'bankid_input_time';
		$this->f_bankid_user_update	= 'bankid_user_update';
		$this->f_bankid_update_time	= 'bankid_update_time';
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
			$this->f_id	=> $this->app_bank_wilayah_id,
			//$this->f_bank_id	=> $this->app_bank_wilayah_bank_id,
			$this->f_bank	=> $this->bankid_bank,
			$this->f_kode_wilayah	=> $this->app_bank_wilayah_kode_wilayah,
			$this->f_nama_wilayah	=> $this->app_bank_wilayah_nama_wilayah,
			$this->f_deskripsi	=> $this->app_bank_wilayah_deskripsi,
			//$this->f_user_input	=> $this->app_bank_wilayah_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_bank_wilayah_input_time,
			//$this->f_user_update	=> $this->app_bank_wilayah_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_bank_wilayah_update_time,
			// $this->f_bankid_id	=> $this->bankid_id,
			// $this->f_kode_bank	=> $this->bankid_kode_bank,
			// $this->f_bank	=> $this->bankid_bank,
			// $this->f_bankid_deskripsi	=> $this->bankid_deskripsi,
			// $this->f_bankid_user_input	=> $this->bankid_user_input,
			// $this->f_bankid_input_time	=> $this->bankid_input_time,
			// $this->f_bankid_user_update	=> $this->bankid_user_update,
			// $this->f_bankid_update_time	=> $this->bankid_update_time,
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
/* Generated by YBS CRUD Generator 2021-11-30 15:26:57 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

