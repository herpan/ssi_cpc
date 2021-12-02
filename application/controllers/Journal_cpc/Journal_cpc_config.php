<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Journal_cpc_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_journal_cpc_id	= 'ID';
		$this->app_journal_cpc_bank_wilayah_id	= 'BANK_WILAYAH';
		$this->app_journal_cpc_jenis_uang_id	= 'JENIS_UANG';
		$this->app_journal_cpc_pecahan_id	= 'PECAHAN';
		$this->app_journal_cpc_emisi_id	= 'EMISI';
		$this->app_journal_cpc_kondisi_id	= 'KONDISI';
		$this->app_journal_cpc_jumlah	= 'JUMLAH';
		$this->app_journal_cpc_status	= 'STATUS';
		$this->app_journal_cpc_tanggal_penerimaan	= 'TANGGAL_PENERIMAAN';
		$this->app_journal_cpc_tanggal_pencatatan	= 'TANGGAL_PENCATATAN';
		$this->app_journal_cpc_keterangan	= 'KETERANGAN';
		$this->app_journal_cpc_user_input	= 'USERID_INPUT';
		$this->app_journal_cpc_input_time	= 'INPUT_TIME';
		$this->app_journal_cpc_user_update	= 'USERID_UPDATE';
		$this->app_journal_cpc_update_time	= 'UPDATE_TIME';
		$this->w_id	= 'W_ID';
		$this->w_bank_id	= 'BANK_ID';
		$this->w_kode_wilayah	= 'KODE_WILAYAH';
		$this->w_nama_wilayah	= 'NAMA_WILAYAH';
		$this->w_deskripsi	= 'DESKRIPSI';
		$this->w_user_input	= 'W_USER_INPUT';
		$this->w_input_time	= 'W_INPUT_TIME';
		$this->w_user_update	= 'W_USER_UPDATE';
		$this->w_update_time	= 'W_UPDATE_TIME';
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
		$this->e_id	= 'E_ID';
		$this->e_emisi	= 'EMISI';
		$this->e_keterangan	= 'E_KETERANGAN';
		$this->e_user_input	= 'E_USER_INPUT';
		$this->e_input_time	= 'E_INPUT_TIME';
		$this->e_user_update	= 'E_USER_UPDATE';
		$this->e_update_time	= 'E_UPDATE_TIME';
		$this->k_id	= 'K_ID';
		$this->k_kategori_id	= 'KATEGORI_ID';
		$this->k_kategori	= 'KATEGORI';
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
		$this->f_bank_wilayah_id	= 'bank_wilayah_id';
		$this->f_jenis_uang_id	= 'jenis_uang_id';
		$this->f_pecahan_id	= 'pecahan_id';
		$this->f_emisi_id	= 'emisi_id';
		$this->f_kondisi_id	= 'kondisi_id';
		$this->f_jumlah	= 'jumlah';
		$this->f_status	= 'status';
		$this->f_tanggal_penerimaan	= 'tanggal_penerimaan';
		$this->f_tanggal_pencatatan	= 'tanggal_pencatatan';
		$this->f_keterangan	= 'keterangan';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_w_id	= 'w_id';
		$this->f_bank_id	= 'bank_id';
		$this->f_kode_wilayah	= 'kode_wilayah';
		$this->f_nama_wilayah	= 'nama_wilayah';
		$this->f_deskripsi	= 'deskripsi';
		$this->f_w_user_input	= 'w_user_input';
		$this->f_w_input_time	= 'w_input_time';
		$this->f_w_user_update	= 'w_user_update';
		$this->f_w_update_time	= 'w_update_time';
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
		$this->f_e_id	= 'e_id';
		$this->f_emisi	= 'emisi';
		$this->f_e_keterangan	= 'e_keterangan';
		$this->f_e_user_input	= 'e_user_input';
		$this->f_e_input_time	= 'e_input_time';
		$this->f_e_user_update	= 'e_user_update';
		$this->f_e_update_time	= 'e_update_time';
		$this->f_k_id	= 'k_id';
		$this->f_kategori_id	= 'kategori_id';
		$this->f_kategori	= 'kategori';
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
			$this->f_id	=> $this->app_journal_cpc_id,
			// $this->f_bank_wilayah_id	=> $this->app_journal_cpc_bank_wilayah_id,
			// $this->f_jenis_uang_id	=> $this->app_journal_cpc_jenis_uang_id,
			// $this->f_pecahan_id	=> $this->app_journal_cpc_pecahan_id,
			// $this->f_emisi_id	=> $this->app_journal_cpc_emisi_id,
			// $this->f_kondisi_id	=> $this->app_journal_cpc_kondisi_id,
			$this->f_nama_wilayah	=> $this->w_nama_wilayah,
			$this->f_jenis_uang	=> $this->j_jenis_uang,
			$this->f_pecahan	=> $this->p_pecahan,
			$this->f_emisi	=> $this->e_emisi,
			$this->f_kategori	=> $this->k_kategori,				
			$this->f_kondisi	=> $this->k_kondisi,					
			$this->f_jumlah	=> $this->app_journal_cpc_jumlah,
			$this->f_status	=> $this->app_journal_cpc_status,
			$this->f_tanggal_penerimaan	=> $this->app_journal_cpc_tanggal_penerimaan,
			$this->f_tanggal_pencatatan	=> $this->app_journal_cpc_tanggal_pencatatan,
			$this->f_keterangan	=> $this->app_journal_cpc_keterangan,
			//$this->f_user_input	=> $this->app_journal_cpc_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_journal_cpc_input_time,
			//$this->f_user_update	=> $this->app_journal_cpc_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_journal_cpc_update_time,
			// $this->f_w_id	=> $this->w_id,
			// $this->f_bank_id	=> $this->w_bank_id,
			// $this->f_kode_wilayah	=> $this->w_kode_wilayah,
			// $this->f_nama_wilayah	=> $this->w_nama_wilayah,
			// $this->f_deskripsi	=> $this->w_deskripsi,
			// $this->f_w_user_input	=> $this->w_user_input,
			// $this->f_w_input_time	=> $this->w_input_time,
			// $this->f_w_user_update	=> $this->w_user_update,
			// $this->f_w_update_time	=> $this->w_update_time,
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
/* Generated by YBS CRUD Generator 2021-12-01 20:05:55 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

