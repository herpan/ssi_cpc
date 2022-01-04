<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_selisih_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_uang_selisih_id	= 'ID';
		$this->app_uang_selisih_uang_masuk_id	= 'UANG_MASUK_ID';
		$this->app_uang_selisih_no	= 'NO';
		$this->app_uang_selisih_mulai_proses	= 'MULAI_PROSES';
		$this->app_uang_selisih_selesai_proses	= 'SELESAI_PROSES';
		$this->app_uang_selisih_nama_oa	= 'NAMA_OA';
		$this->app_uang_selisih_kasir_ttp	= 'KASIR_TTP';
		$this->app_uang_selisih_nama_kasir_bank_client	= 'NAMA_KASIR_BANK/CLIENT';
		$this->app_uang_selisih_ditemukan_oleh	= 'DITEMUKAN_OLEH';
		$this->app_uang_selisih_ditemukan_id	= 'DITEMUKAN_ID';
		$this->app_uang_selisih_disaksikan_oleh	= 'DISAKSIKAN_OLEH';
		$this->app_uang_selisih_disaksikan_id	= 'DISAKSIKAN_ID';
		$this->app_uang_selisih_diketahui_oleh	= 'DIKETAHUI_OLEH';
		$this->app_uang_selisih_diketahui_id	= 'DIKETAHUI_ID';
		$this->app_uang_selisih_catatan	= 'CATATAN';
		$this->app_uang_selisih_lampiran	= 'LAMPIRAN';
		$this->app_uang_selisih_user_input	= 'USERID_INPUT';
		$this->app_uang_selisih_input_time	= 'INPUT_TIME';
		$this->app_uang_selisih_user_update	= 'USERID_UPDATE';
		$this->app_uang_selisih_update_time	= 'UPDATE_TIME';
		$this->um_id	= 'UM_ID';
		$this->um_no	= 'UM_NO';
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
		$this->um_keterangan	= 'KETERANGAN';
		$this->um_user_input	= 'UM_USER_INPUT';
		$this->um_input_time	= 'UM_INPUT_TIME';
		$this->um_user_update	= 'UM_USER_UPDATE';
		$this->um_update_time	= 'UM_UPDATE_TIME';
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
		$this->f_no	= 'no';
		$this->f_mulai_proses	= 'mulai_proses';
		$this->f_selesai_proses	= 'selesai_proses';
		$this->f_nama_oa	= 'nama_oa';
		$this->f_kasir_ttp	= 'kasir_ttp';
		$this->f_nama_kasir_bank_client	= 'nama_kasir_bank_client';
		$this->f_ditemukan_oleh	= 'ditemukan_oleh';
		$this->f_ditemukan_id	= 'ditemukan_id';
		$this->f_disaksikan_oleh	= 'disaksikan_oleh';
		$this->f_disaksikan_id	= 'disaksikan_id';
		$this->f_diketahui_oleh	= 'diketahui_oleh';
		$this->f_diketahui_id	= 'diketahui_id';
		$this->f_catatan	= 'catatan';
		$this->f_lampiran	= 'lampiran';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_um_id	= 'um_id';
		$this->f_um_no	= 'um_no';
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
		$this->f_keterangan	= 'keterangan';
		$this->f_um_user_input	= 'um_user_input';
		$this->f_um_input_time	= 'um_input_time';
		$this->f_um_user_update	= 'um_user_update';
		$this->f_um_update_time	= 'um_update_time';
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
			$this->f_id	=> $this->app_uang_selisih_id,
			$this->f_uang_masuk_id	=> $this->app_uang_selisih_uang_masuk_id,
			$this->f_no	=> $this->app_uang_selisih_no,
			$this->f_mulai_proses	=> $this->app_uang_selisih_mulai_proses,
			$this->f_selesai_proses	=> $this->app_uang_selisih_selesai_proses,
			$this->f_nama_oa	=> $this->app_uang_selisih_nama_oa,
			$this->f_kasir_ttp	=> $this->app_uang_selisih_kasir_ttp,
			$this->f_nama_kasir_bank_client	=> $this->app_uang_selisih_nama_kasir_bank_client,
			$this->f_ditemukan_oleh	=> $this->app_uang_selisih_ditemukan_oleh,
			$this->f_ditemukan_id	=> $this->app_uang_selisih_ditemukan_id,
			$this->f_disaksikan_oleh	=> $this->app_uang_selisih_disaksikan_oleh,
			$this->f_disaksikan_id	=> $this->app_uang_selisih_disaksikan_id,
			$this->f_diketahui_oleh	=> $this->app_uang_selisih_diketahui_oleh,
			$this->f_diketahui_id	=> $this->app_uang_selisih_diketahui_id,
			$this->f_catatan	=> $this->app_uang_selisih_catatan,
			$this->f_lampiran	=> $this->app_uang_selisih_lampiran,
			$this->f_user_input	=> $this->app_uang_selisih_user_input,
			$this->f_input_time	=> $this->app_uang_selisih_input_time,
			$this->f_user_update	=> $this->app_uang_selisih_user_update,
			$this->f_update_time	=> $this->app_uang_selisih_update_time,
			$this->f_um_id	=> $this->um_id,
			$this->f_um_no	=> $this->um_no,
			$this->f_cabang_id	=> $this->um_cabang_id,
			$this->f_sentra_kas_id	=> $this->um_sentra_kas_id,
			$this->f_jumlah_global	=> $this->um_jumlah_global,
			$this->f_status_penerimaan	=> $this->um_status_penerimaan,
			$this->f_tanggal_penerimaan	=> $this->um_tanggal_penerimaan,
			$this->f_waktu_tiba	=> $this->um_waktu_tiba,
			$this->f_waktu_serah_terima	=> $this->um_waktu_serah_terima,
			$this->f_no_kendaraan	=> $this->um_no_kendaraan,
			$this->f_diserahkan_oleh	=> $this->um_diserahkan_oleh,
			$this->f_diterima_oleh	=> $this->um_diterima_oleh,
			$this->f_detail_tas	=> $this->um_detail_tas,
			$this->f_keterangan	=> $this->um_keterangan,
			$this->f_um_user_input	=> $this->um_user_input,
			$this->f_um_input_time	=> $this->um_input_time,
			$this->f_um_user_update	=> $this->um_user_update,
			$this->f_um_update_time	=> $this->um_update_time,
			$this->f_userinput_id	=> $this->userinput_id,
			$this->f_nmuser	=> $this->userinput_nmuser,
			$this->f_passuser	=> $this->userinput_passuser,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_tanda_tangan	=> $this->userinput_tanda_tangan,
			$this->f_opt_level	=> $this->userinput_opt_level,
			$this->f_opt_status	=> $this->userinput_opt_status,
			$this->f_picture	=> $this->userinput_picture,
			$this->f_userupdate_id	=> $this->userupdate_id,
			$this->f_userupdate_nmuser	=> $this->userupdate_nmuser,
			$this->f_userupdate_passuser	=> $this->userupdate_passuser,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_userupdate_tanda_tangan	=> $this->userupdate_tanda_tangan,
			$this->f_userupdate_opt_level	=> $this->userupdate_opt_level,
			$this->f_userupdate_opt_status	=> $this->userupdate_opt_status,
			$this->f_userupdate_picture	=> $this->userupdate_picture,
		);

	}

};









/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2021-12-29 15:50:42 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

