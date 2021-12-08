<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Journal_campur_cpc_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_journal_campur_cpc_id	= 'ID';
		$this->app_journal_campur_cpc_bank_id	= 'BANKxxx';
		$this->app_journal_campur_cpc_sentra_kas_id	= 'SENTRA_KASxxx';
		$this->app_journal_campur_cpc_jenis_uang_id	= 'JENIS_UANGxxx';
		$this->app_journal_campur_cpc_pecahan_id	= 'PECAHANxxx';
		$this->app_journal_campur_cpc_jumlah	= 'JUMLAH';
		$this->app_journal_campur_cpc_status	= 'STATUS';
		$this->app_journal_campur_cpc_tanggal_penerimaan	= 'TANGGAL_PENERIMAAN';
		$this->app_journal_campur_cpc_tanggal_pencatatan	= 'TANGGAL_PENCATATAN';
		$this->app_journal_campur_cpc_keterangan	= 'KETERANGAN';
		$this->app_journal_campur_cpc_user_input	= 'USERID_INPUT';
		$this->app_journal_campur_cpc_input_time	= 'INPUT_TIME';
		$this->app_journal_campur_cpc_user_update	= 'USERID_UPDATE';
		$this->app_journal_campur_cpc_update_time	= 'UPDATE_TIME';
		$this->b_id	= 'B_ID';
		$this->b_kode_bank	= 'KODE_BANK';
		$this->b_bank	= 'BANK';
		$this->b_deskripsi	= 'DESKRIPSI';
		$this->b_user_input	= 'B_USER_INPUT';
		$this->b_input_time	= 'B_INPUT_TIME';
		$this->b_user_update	= 'B_USER_UPDATE';
		$this->b_update_time	= 'B_UPDATE_TIME';
		$this->s_id	= 'S_ID';
		$this->s_kode_sentra	= 'KODE_SENTRA';
		$this->s_sentra	= 'SENTRA';
		$this->s_nama_sentra	= 'NAMA_SENTRA';
		$this->s_alamat	= 'ALAMAT';
		$this->s_user_input	= 'S_USER_INPUT';
		$this->s_input_time	= 'S_INPUT_TIME';
		$this->s_user_update	= 'S_USER_UPDATE';
		$this->s_update_time	= 'S_UPDATE_TIME';
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
		$this->f_bank_id	= 'bank_id';
		$this->f_sentra_kas_id	= 'sentra_kas_id';
		$this->f_jenis_uang_id	= 'jenis_uang_id';
		$this->f_pecahan_id	= 'pecahan_id';
		$this->f_jumlah	= 'jumlah';
		$this->f_status	= 'status';
		$this->f_tanggal_penerimaan	= 'tanggal_penerimaan';
		$this->f_tanggal_pencatatan	= 'tanggal_pencatatan';
		$this->f_keterangan	= 'keterangan';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_b_id	= 'b_id';
		$this->f_kode_bank	= 'kode_bank';
		$this->f_bank	= 'bank';
		$this->f_deskripsi	= 'deskripsi';
		$this->f_b_user_input	= 'b_user_input';
		$this->f_b_input_time	= 'b_input_time';
		$this->f_b_user_update	= 'b_user_update';
		$this->f_b_update_time	= 'b_update_time';
		$this->f_s_id	= 's_id';
		$this->f_kode_sentra	= 'kode_sentra';
		$this->f_sentra	= 'sentra';
		$this->f_nama_sentra	= 'nama_sentra';
		$this->f_alamat	= 'alamat';
		$this->f_s_user_input	= 's_user_input';
		$this->f_s_input_time	= 's_input_time';
		$this->f_s_user_update	= 's_user_update';
		$this->f_s_update_time	= 's_update_time';
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
			$this->f_id	=> $this->app_journal_campur_cpc_id,
			$this->f_bank_id	=> $this->app_journal_campur_cpc_bank_id,
			$this->f_sentra_kas_id	=> $this->app_journal_campur_cpc_sentra_kas_id,
			$this->f_jenis_uang_id	=> $this->app_journal_campur_cpc_jenis_uang_id,
			$this->f_pecahan_id	=> $this->app_journal_campur_cpc_pecahan_id,
			$this->f_jumlah	=> $this->app_journal_campur_cpc_jumlah,
			$this->f_status	=> $this->app_journal_campur_cpc_status,
			$this->f_tanggal_penerimaan	=> $this->app_journal_campur_cpc_tanggal_penerimaan,
			$this->f_tanggal_pencatatan	=> $this->app_journal_campur_cpc_tanggal_pencatatan,
			$this->f_keterangan	=> $this->app_journal_campur_cpc_keterangan,
			//$this->f_user_input	=> $this->app_journal_campur_cpc_user_input,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_journal_campur_cpc_input_time,
			//$this->f_user_update	=> $this->app_journal_campur_cpc_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_journal_campur_cpc_update_time,
			// $this->f_b_id	=> $this->b_id,
			// $this->f_kode_bank	=> $this->b_kode_bank,
			// $this->f_bank	=> $this->b_bank,
			// $this->f_deskripsi	=> $this->b_deskripsi,
			// $this->f_b_user_input	=> $this->b_user_input,
			// $this->f_b_input_time	=> $this->b_input_time,
			// $this->f_b_user_update	=> $this->b_user_update,
			// $this->f_b_update_time	=> $this->b_update_time,
			// $this->f_s_id	=> $this->s_id,
			// $this->f_kode_sentra	=> $this->s_kode_sentra,
			// $this->f_sentra	=> $this->s_sentra,
			// $this->f_nama_sentra	=> $this->s_nama_sentra,
			// $this->f_alamat	=> $this->s_alamat,
			// $this->f_s_user_input	=> $this->s_user_input,
			// $this->f_s_input_time	=> $this->s_input_time,
			// $this->f_s_user_update	=> $this->s_user_update,
			// $this->f_s_update_time	=> $this->s_update_time,
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
/* Generated by YBS CRUD Generator 2021-12-05 00:41:04 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

