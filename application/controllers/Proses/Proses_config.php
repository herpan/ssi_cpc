<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Proses_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_journal_proses_id	= 'ID';
		$this->app_journal_proses_uang_masuk_detail_id	= 'UANG_MASUK_DETAIL_ID';
		$this->app_journal_proses_emisi_id	= 'EMISI_ID';
		$this->app_journal_proses_kondisi_id	= 'KONDISI_ID';
		$this->app_journal_proses_jumlah	= 'JUMLAH';
		$this->app_journal_proses_status	= 'STATUS';
		$this->app_journal_proses_tanggal_pencatatan	= 'TANGGAL_PENCATATAN';
		$this->app_journal_proses_keterangan	= 'KETERANGAN';
		$this->app_journal_proses_user_input	= 'USERID_INPUT';
		$this->app_journal_proses_input_time	= 'INPUT_TIME';
		$this->app_journal_proses_user_update	= 'USERID_UPDATE';
		$this->app_journal_proses_update_time	= 'UPDATE_TIME';
		$this->umd_id	= 'UMD_ID';
		$this->umd_uang_masuk_id	= 'UANG_MASUK_ID';
		$this->umd_jenis_uang_id	= 'JENIS_UANG_ID';
		$this->umd_pecahan_id	= 'PECAHAN_ID';
		$this->umd_jumlah	= 'UMD_JUMLAH';
		$this->umd_user_input	= 'UMD_USER_INPUT';
		$this->umd_input_time	= 'UMD_INPUT_TIME';
		$this->umd_user_update	= 'UMD_USER_UPDATE';
		$this->umd_update_time	= 'UMD_UPDATE_TIME';
		$this->e_id	= 'E_ID';
		$this->e_emisi	= 'EMISI';
		$this->e_keterangan	= 'E_KETERANGAN';
		$this->e_user_input	= 'E_USER_INPUT';
		$this->e_input_time	= 'E_INPUT_TIME';
		$this->e_user_update	= 'E_USER_UPDATE';
		$this->e_update_time	= 'E_UPDATE_TIME';
		$this->k_id	= 'K_ID';
		$this->k_kategori_id	= 'KATEGORI_ID';
		$this->k_kondisi	= 'KONDISI';
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
		$this->kk_id	= 'KK_ID';
		$this->kk_nama_kategori	= 'NAMA_KATEGORI';
		$this->kk_user_input	= 'KK_USER_INPUT';
		$this->kk_input_time	= 'KK_INPUT_TIME';
		$this->kk_user_update	= 'KK_USER_UPDATE';
		$this->kk_update_time	= 'KK_UPDATE_TIME';
		$this->c_id	= 'C_ID';
		$this->c_bank_id	= 'BANK_ID';
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
		$this->f_uang_masuk_detail_id	= 'uang_masuk_detail_id';
		$this->f_emisi_id	= 'emisi_id';
		$this->f_kondisi_id	= 'kondisi_id';
		$this->f_jumlah	= 'jumlah';
		$this->f_status	= 'status';
		$this->f_tanggal_pencatatan	= 'tanggal_pencatatan';
		$this->f_keterangan	= 'keterangan';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_umd_id	= 'umd_id';
		$this->f_uang_masuk_id	= 'uang_masuk_id';
		$this->f_jenis_uang_id	= 'jenis_uang_id';
		$this->f_pecahan_id	= 'pecahan_id';
		$this->f_umd_jumlah	= 'umd_jumlah';
		$this->f_umd_user_input	= 'umd_user_input';
		$this->f_umd_input_time	= 'umd_input_time';
		$this->f_umd_user_update	= 'umd_user_update';
		$this->f_umd_update_time	= 'umd_update_time';
		$this->f_e_id	= 'e_id';
		$this->f_emisi	= 'emisi';
		$this->f_e_keterangan	= 'e_keterangan';
		$this->f_e_user_input	= 'e_user_input';
		$this->f_e_input_time	= 'e_input_time';
		$this->f_e_user_update	= 'e_user_update';
		$this->f_e_update_time	= 'e_update_time';
		$this->f_k_id	= 'k_id';
		$this->f_kategori_id	= 'kategori_id';
		$this->f_kondisi	= 'kondisi';
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
		$this->f_kk_id	= 'kk_id';
		$this->f_nama_kategori	= 'nama_kategori';
		$this->f_kk_user_input	= 'kk_user_input';
		$this->f_kk_input_time	= 'kk_input_time';
		$this->f_kk_user_update	= 'kk_user_update';
		$this->f_kk_update_time	= 'kk_update_time';
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
			$this->f_id	=> $this->app_journal_proses_id,
			// $this->f_uang_masuk_detail_id	=> $this->app_journal_proses_uang_masuk_detail_id,
			// $this->f_emisi_id	=> $this->app_journal_proses_emisi_id,
			// $this->f_kondisi_id	=> $this->app_journal_proses_kondisi_id,
			$this->f_jenis_uang	=> $this->j_jenis_uang,
			$this->f_pecahan	=> $this->p_pecahan,
			$this->f_emisi	=> $this->e_emisi,
			$this->f_jumlah	=> $this->app_journal_proses_jumlah,
			//$this->f_status	=> $this->app_journal_proses_status,
			$this->f_tanggal_pencatatan	=> $this->app_journal_proses_tanggal_pencatatan,
			// $this->f_keterangan	=> $this->app_journal_proses_keterangan,
			//$this->f_user_input	=> $this->app_journal_proses_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_journal_proses_input_time,
			//$this->f_user_update	=> $this->app_journal_proses_user_update,
			$this->f_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_journal_proses_update_time,
			// $this->f_umd_id	=> $this->umd_id,
			// $this->f_uang_masuk_id	=> $this->umd_uang_masuk_id,
			// $this->f_jenis_uang_id	=> $this->umd_jenis_uang_id,
			// $this->f_pecahan_id	=> $this->umd_pecahan_id,
			// $this->f_umd_jumlah	=> $this->umd_jumlah,
			// $this->f_umd_user_input	=> $this->umd_user_input,
			// $this->f_umd_input_time	=> $this->umd_input_time,
			// $this->f_umd_user_update	=> $this->umd_user_update,
			// $this->f_umd_update_time	=> $this->umd_update_time,
			// $this->f_e_id	=> $this->e_id,
			// $this->f_emisi	=> $this->e_emisi,
			// $this->f_e_keterangan	=> $this->e_keterangan,
			// $this->f_e_user_input	=> $this->e_user_input,
			// $this->f_e_input_time	=> $this->e_input_time,
			// $this->f_e_user_update	=> $this->e_user_update,
			// $this->f_e_update_time	=> $this->e_update_time,
			// $this->f_k_id	=> $this->k_id,
			// $this->f_kategori_id	=> $this->k_kategori_id,
			// $this->f_kondisi	=> $this->k_kondisi,
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
			// $this->f_kk_id	=> $this->kk_id,
			// $this->f_nama_kategori	=> $this->kk_nama_kategori,
			// $this->f_kk_user_input	=> $this->kk_user_input,
			// $this->f_kk_input_time	=> $this->kk_input_time,
			// $this->f_kk_user_update	=> $this->kk_user_update,
			// $this->f_kk_update_time	=> $this->kk_update_time,
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
/* Generated by YBS CRUD Generator 2021-12-28 12:28:11 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

