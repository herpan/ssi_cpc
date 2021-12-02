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
		$this->app_penerimaan_uang_jumlah_global	= 'JUMLAH_GLOBAL';
		$this->app_penerimaan_uang_status_penerimaan	= 'STATUS_PENERIMAAN';
		$this->app_penerimaan_uang_tanggal_penerimaan	= 'TANGGAL_PENERIMAAN';
		$this->app_penerimaan_uang_keterangan	= 'KETERANGAN';
		$this->app_penerimaan_uang_user_input	= 'USER_INPUT';
		$this->app_penerimaan_uang_input_time	= 'INPUT_TIME';
		$this->app_penerimaan_uang_user_update	= 'USER_UPDATE';
		$this->app_penerimaan_uang_update_time	= 'UPDATE_TIME';
		$this->cab_id	= 'CAB_ID';
		$this->cab_bank_wilayah_id	= 'BANK_WILAYAH_ID';
		$this->cab_nama_cabang	= 'NAMA_CABANG';
		$this->cab_alamat	= 'ALAMAT';
		$this->cab_deskripsi	= 'DESKRIPSI';
		$this->cab_sentra_kas_id	= 'SENTRA_KAS_ID';
		$this->cab_user_input	= 'CAB_USER_INPUT';
		$this->cab_input_time	= 'CAB_INPUT_TIME';
		$this->cab_user_update	= 'CAB_USER_UPDATE';
		$this->cab_update_time	= 'CAB_UPDATE_TIME';
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
		$this->wilayah_id	= 'WILAYAH_ID';
		$this->wilayah_bank_id	= 'BANK_ID';
		$this->wilayah_kode_wilayah	= 'KODE_WILAYAH';
		$this->wilayah_nama_wilayah	= 'NAMA_WILAYAH';
		$this->wilayah_deskripsi	= 'WILAYAH_DESKRIPSI';
		$this->wilayah_user_input	= 'WILAYAH_USER_INPUT';
		$this->wilayah_input_time	= 'WILAYAH_INPUT_TIME';
		$this->wilayah_user_update	= 'WILAYAH_USER_UPDATE';
		$this->wilayah_update_time	= 'WILAYAH_UPDATE_TIME';
		$this->sentra_id	= 'SENTRA_ID';
		$this->sentra_kode_sentra	= 'KODE_SENTRA';
		$this->sentra_sentra	= 'SENTRA';
		$this->sentra_nama_sentra	= 'NAMA_SENTRA';
		$this->sentra_alamat	= 'SENTRA_ALAMAT';
		$this->sentra_user_input	= 'SENTRA_USER_INPUT';
		$this->sentra_input_time	= 'SENTRA_INPUT_TIME';
		$this->sentra_user_update	= 'SENTRA_USER_UPDATE';
		$this->sentra_update_time	= 'SENTRA_UPDATE_TIME';
		$this->b_id	= 'B_ID';
		$this->b_kode_bank	= 'KODE_BANK';
		$this->b_bank	= 'BANK';
		$this->b_deskripsi	= 'B_DESKRIPSI';
		$this->b_user_input	= 'B_USER_INPUT';
		$this->b_input_time	= 'B_INPUT_TIME';
		$this->b_user_update	= 'B_USER_UPDATE';
		$this->b_update_time	= 'B_UPDATE_TIME';

		
		
		
		/*field_alias_database db*/
		$this->f_id	= 'id';
		$this->f_cabang_id	= 'cabang_id';
		$this->f_jumlah_global	= 'jumlah_global';
		$this->f_status_penerimaan	= 'status_penerimaan';
		$this->f_tanggal_penerimaan	= 'tanggal_penerimaan';
		$this->f_keterangan	= 'keterangan';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_cab_id	= 'cab_id';
		$this->f_bank_wilayah_id	= 'bank_wilayah_id';
		$this->f_nama_cabang	= 'nama_cabang';
		$this->f_alamat	= 'alamat';
		$this->f_deskripsi	= 'deskripsi';
		$this->f_sentra_kas_id	= 'sentra_kas_id';
		$this->f_cab_user_input	= 'cab_user_input';
		$this->f_cab_input_time	= 'cab_input_time';
		$this->f_cab_user_update	= 'cab_user_update';
		$this->f_cab_update_time	= 'cab_update_time';
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
		$this->f_wilayah_id	= 'wilayah_id';
		$this->f_bank_id	= 'bank_id';
		$this->f_kode_wilayah	= 'kode_wilayah';
		$this->f_nama_wilayah	= 'nama_wilayah';
		$this->f_wilayah_deskripsi	= 'wilayah_deskripsi';
		$this->f_wilayah_user_input	= 'wilayah_user_input';
		$this->f_wilayah_input_time	= 'wilayah_input_time';
		$this->f_wilayah_user_update	= 'wilayah_user_update';
		$this->f_wilayah_update_time	= 'wilayah_update_time';
		$this->f_sentra_id	= 'sentra_id';
		$this->f_kode_sentra	= 'kode_sentra';
		$this->f_sentra	= 'sentra';
		$this->f_nama_sentra	= 'nama_sentra';
		$this->f_sentra_alamat	= 'sentra_alamat';
		$this->f_sentra_user_input	= 'sentra_user_input';
		$this->f_sentra_input_time	= 'sentra_input_time';
		$this->f_sentra_user_update	= 'sentra_user_update';
		$this->f_sentra_update_time	= 'sentra_update_time';
		$this->f_b_id	= 'b_id';
		$this->f_kode_bank	= 'kode_bank';
		$this->f_bank	= 'bank';
		$this->f_b_deskripsi	= 'b_deskripsi';
		$this->f_b_user_input	= 'b_user_input';
		$this->f_b_input_time	= 'b_input_time';
		$this->f_b_user_update	= 'b_user_update';
		$this->f_b_update_time	= 'b_update_time';

		
		
		
		/* CONFIG FORM LIST */
		/* field_alias_database => $title */	
		$this->table_column =array(
			$this->f_id	=> $this->app_penerimaan_uang_id,
			// $this->f_cabang_id	=> $this->app_penerimaan_uang_cabang_id,
			$this->f_nama_cabang	=> $this->cab_nama_cabang,
			$this->f_jumlah_global	=> $this->app_penerimaan_uang_jumlah_global,
			$this->f_status_penerimaan	=> $this->app_penerimaan_uang_status_penerimaan,
			$this->f_tanggal_penerimaan	=> $this->app_penerimaan_uang_tanggal_penerimaan,
			$this->f_bank	=> $this->b_bank,
			$this->f_nama_wilayah	=> $this->wilayah_nama_wilayah,
			$this->f_nama_sentra	=> $this->sentra_nama_sentra,
			$this->f_keterangan	=> $this->app_penerimaan_uang_keterangan,
			//$this->f_user_input	=> $this->app_penerimaan_uang_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_penerimaan_uang_input_time,
			//$this->f_user_update	=> $this->app_penerimaan_uang_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_penerimaan_uang_update_time,
			// $this->f_cab_id	=> $this->cab_id,
			// $this->f_bank_wilayah_id	=> $this->cab_bank_wilayah_id,
			// $this->f_nama_cabang	=> $this->cab_nama_cabang,
			// $this->f_alamat	=> $this->cab_alamat,
			// $this->f_deskripsi	=> $this->cab_deskripsi,
			// $this->f_sentra_kas_id	=> $this->cab_sentra_kas_id,
			// $this->f_cab_user_input	=> $this->cab_user_input,
			// $this->f_cab_input_time	=> $this->cab_input_time,
			// $this->f_cab_user_update	=> $this->cab_user_update,
			// $this->f_cab_update_time	=> $this->cab_update_time,
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
			// $this->f_wilayah_id	=> $this->wilayah_id,
			// $this->f_bank_id	=> $this->wilayah_bank_id,
			// $this->f_kode_wilayah	=> $this->wilayah_kode_wilayah,
			// $this->f_nama_wilayah	=> $this->wilayah_nama_wilayah,
			// $this->f_wilayah_deskripsi	=> $this->wilayah_deskripsi,
			// $this->f_wilayah_user_input	=> $this->wilayah_user_input,
			// $this->f_wilayah_input_time	=> $this->wilayah_input_time,
			// $this->f_wilayah_user_update	=> $this->wilayah_user_update,
			// $this->f_wilayah_update_time	=> $this->wilayah_update_time,
			// $this->f_sentra_id	=> $this->sentra_id,
			// $this->f_kode_sentra	=> $this->sentra_kode_sentra,
			// $this->f_sentra	=> $this->sentra_sentra,
			// $this->f_nama_sentra	=> $this->sentra_nama_sentra,
			// $this->f_sentra_alamat	=> $this->sentra_alamat,
			// $this->f_sentra_user_input	=> $this->sentra_user_input,
			// $this->f_sentra_input_time	=> $this->sentra_input_time,
			// $this->f_sentra_user_update	=> $this->sentra_user_update,
			// $this->f_sentra_update_time	=> $this->sentra_update_time,
			// $this->f_b_id	=> $this->b_id,
			// $this->f_kode_bank	=> $this->b_kode_bank,
			// $this->f_bank	=> $this->b_bank,
			// $this->f_b_deskripsi	=> $this->b_deskripsi,
			// $this->f_b_user_input	=> $this->b_user_input,
			// $this->f_b_input_time	=> $this->b_input_time,
			// $this->f_b_user_update	=> $this->b_user_update,
			// $this->f_b_update_time	=> $this->b_update_time,
		);

	}

};









/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2021-12-01 17:03:38 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

