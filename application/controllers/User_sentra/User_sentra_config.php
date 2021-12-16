<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_sentra_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_user_sentra_id	= 'ID';
		$this->app_user_sentra_user_id	= 'USER_ID';
		$this->app_user_sentra_sentra_kas	= 'SENTRA_KAS';
		$this->app_user_sentra_user_input	= 'USERID_INPUT';
		$this->app_user_sentra_input_time	= 'INPUT_TIME';
		$this->app_user_sentra_user_update	= 'USERID_UPDATE';
		$this->app_user_sentra_update_time	= 'UPDATE_TIME';
		$this->u_id	= 'U_ID';
		$this->u_nmuser	= 'NPP/Pengguna';
		$this->u_passuser	= 'PASSUSER';
		$this->u_nama_lengkap	= 'NAMA_LENGKAP';
		$this->u_tanda_tangan	= 'TANDA_TANGAN';
		$this->u_opt_level	= 'OPT_LEVEL';
		$this->u_opt_status	= 'OPT_STATUS';
		$this->u_picture	= 'PICTURE';
		$this->userinput_id	= 'USERINPUT_ID';
		$this->userinput_nmuser	= 'USERINPUT_NMUSER';
		$this->userinput_passuser	= 'USERINPUT_PASSUSER';
		$this->userinput_nama_lengkap	= 'USER_INPUT';
		$this->userinput_tanda_tangan	= 'USERINPUT_TANDA_TANGAN';
		$this->userinput_opt_level	= 'USERINPUT_OPT_LEVEL';
		$this->userinput_opt_status	= 'USERINPUT_OPT_STATUS';
		$this->userinput_picture	= 'USERINPUT_PICTURE';
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
		$this->f_user_id	= 'user_id';
		$this->f_sentra_kas	= 'sentra_kas';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';
		$this->f_u_id	= 'u_id';
		$this->f_nmuser	= 'nmuser';
		$this->f_passuser	= 'passuser';
		$this->f_nama_lengkap	= 'nama_lengkap';
		$this->f_tanda_tangan	= 'tanda_tangan';
		$this->f_opt_level	= 'opt_level';
		$this->f_opt_status	= 'opt_status';
		$this->f_picture	= 'picture';
		$this->f_userinput_id	= 'userinput_id';
		$this->f_userinput_nmuser	= 'userinput_nmuser';
		$this->f_userinput_passuser	= 'userinput_passuser';
		$this->f_userinput_nama_lengkap	= 'userinput_nama_lengkap';
		$this->f_userinput_tanda_tangan	= 'userinput_tanda_tangan';
		$this->f_userinput_opt_level	= 'userinput_opt_level';
		$this->f_userinput_opt_status	= 'userinput_opt_status';
		$this->f_userinput_picture	= 'userinput_picture';
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
			$this->f_id	=> $this->app_user_sentra_id,
			//$this->f_user_id	=> $this->app_user_sentra_user_id,
			$this->f_nmuser	=> $this->u_nmuser,
			$this->f_sentra_kas	=> $this->app_user_sentra_sentra_kas,
			//$this->f_user_input	=> $this->app_user_sentra_user_input,
			$this->f_userinput_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_input_time	=> $this->app_user_sentra_input_time,
			//$this->f_user_update	=> $this->app_user_sentra_user_update,
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_user_sentra_update_time,
			// $this->f_u_id	=> $this->u_id,
			// $this->f_nmuser	=> $this->u_nmuser,
			// $this->f_passuser	=> $this->u_passuser,
			// $this->f_nama_lengkap	=> $this->u_nama_lengkap,
			// $this->f_tanda_tangan	=> $this->u_tanda_tangan,
			// $this->f_opt_level	=> $this->u_opt_level,
			// $this->f_opt_status	=> $this->u_opt_status,
			// $this->f_picture	=> $this->u_picture,
			// $this->f_userinput_id	=> $this->userinput_id,
			// $this->f_userinput_nmuser	=> $this->userinput_nmuser,
			// $this->f_userinput_passuser	=> $this->userinput_passuser,
			// $this->f_userinput_nama_lengkap	=> $this->userinput_nama_lengkap,
			// $this->f_userinput_tanda_tangan	=> $this->userinput_tanda_tangan,
			// $this->f_userinput_opt_level	=> $this->userinput_opt_level,
			// $this->f_userinput_opt_status	=> $this->userinput_opt_status,
			// $this->f_userinput_picture	=> $this->userinput_picture,
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
/* Generated by YBS CRUD Generator 2021-12-16 11:45:47 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

