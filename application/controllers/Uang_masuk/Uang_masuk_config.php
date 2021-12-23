<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_masuk_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_uang_masuk_id	= 'ID';
		$this->app_uang_masuk_no	= 'NO';
		$this->app_uang_masuk_cabang_id	= 'CABANG';
		$this->app_uang_masuk_sentra_kas_id	= 'SENTRA_KAS';
		$this->app_uang_masuk_jumlah_global	= 'JUMLAH_GLOBAL';
		$this->app_uang_masuk_status_penerimaan	= 'STATUS_PENERIMAAN';
		$this->app_uang_masuk_tanggal_penerimaan	= 'TANGGAL_PENERIMAAN';
		$this->app_uang_masuk_waktu_tiba	= 'WAKTU_TIBA';
		$this->app_uang_masuk_waktu_serah_terima	= 'WAKTU_SERAH_TERIMA';
		$this->app_uang_masuk_no_kendaraan	= 'NO_POL_KENDARAAN';
		$this->app_uang_masuk_diserahkan_oleh	= 'DISERAHKAN_OLEH';
		$this->app_uang_masuk_diterima_oleh	= 'DITERIMA_OLEH';
		$this->app_uang_masuk_detail_tas	= 'DETAIL_TAS';
		$this->app_uang_masuk_keterangan	= 'KETERANGAN';
		$this->app_uang_masuk_user_input	= 'USERID_INPUT';
		$this->app_uang_masuk_input_time	= 'INPUT_TIME';
		$this->app_uang_masuk_user_update	= 'USERID_UPDATE';
		$this->app_uang_masuk_update_time	= 'UPDATE_TIME';
		$this->c_id	= 'C_ID';
		$this->c_bank_id	= 'BANK';
		$this->c_kategori_cabang_id	= 'KATEGORI_CABANG_ID';
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
		$this->f_no	= 'no';
		$this->f_cabang_id	= 'cabang_id';
		$this->f_sentra_kas_id	= 'sentra_kas_id';
		$this->f_jumlah_global	= 'jumlah_global';
		$this->f_status_penerimaan	= 'status_penerimaan';
		$this->f_tanggal_penerimaan	= 'tanggal_penerimaan';
		$this->f_waktu_tiba	= 'waktu_tiba';
		$this->f_waktu_serah_terima	= 'waktu_serah_terima';
		$this->f_no_kendaraan ='no_kendaraan';
		$this->f_diserahkan_oleh	= 'diserahkan_oleh';
		$this->f_diterima_oleh	= 'diterima_oleh';
		$this->f_detail_tas	= 'detail_tas';
		$this->f_keterangan	= 'keterangan';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_c_id	= 'c_id';
		$this->f_bank_id	= 'bank_id';
		$this->f_kategori_cabang_id	= 'kategori_cabang_id';
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
			$this->f_id	=> $this->app_uang_masuk_id,
			$this->f_no	=> $this->app_uang_masuk_no,
			// $this->f_cabang_id	=> $this->app_uang_masuk_cabang_id,
			// $this->f_sentra_kas_id	=> $this->app_uang_masuk_sentra_kas_id,
			$this->f_bank	=> $this->b_bank,
			$this->f_nama_cabang	=> $this->c_nama_cabang,
			$this->f_jumlah_global	=> $this->app_uang_masuk_jumlah_global,
			$this->f_status_penerimaan	=> $this->app_uang_masuk_status_penerimaan,
			$this->f_tanggal_penerimaan	=> $this->app_uang_masuk_tanggal_penerimaan,
			$this->f_waktu_tiba	=> $this->app_uang_masuk_waktu_tiba,
			$this->f_waktu_serah_terima	=> $this->app_uang_masuk_waktu_serah_terima,
			$this->f_diserahkan_oleh	=> $this->app_uang_masuk_diserahkan_oleh,
			$this->f_diterima_oleh	=> $this->app_uang_masuk_diterima_oleh,
			//$this->f_detail_tas	=> $this->app_uang_masuk_detail_tas,
			//$this->f_keterangan	=> $this->app_uang_masuk_keterangan,
			$this->f_sentra	=> $this->s_sentra,
			//$this->f_user_input	=> $this->app_uang_masuk_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_uang_masuk_input_time,
			// $this->f_user_update	=> $this->app_uang_masuk_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_uang_masuk_update_time,
			// $this->f_c_id	=> $this->c_id,
			// $this->f_bank_id	=> $this->c_bank_id,
			// $this->f_kategori_cabang_id	=> $this->c_kategori_cabang_id,
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
/* Generated by YBS CRUD Generator 2021-12-16 10:18:39 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

