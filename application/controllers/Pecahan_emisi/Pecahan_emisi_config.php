<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pecahan_emisi_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->app_pecahan_emisi_id	= 'ID';
		$this->app_pecahan_emisi_jenis_uang_id	= 'JENIS_UANG_ID';
		$this->app_pecahan_emisi_pecahan_id	= 'PECAHAN_ID';
		$this->app_pecahan_emisi_emisi_id	= 'EMISI_ID';
		$this->app_pecahan_emisi_user_input	= 'USERID_INPUT';
		$this->app_pecahan_emisi_input_time	= 'INPUT_TIME';
		$this->app_pecahan_emisi_user_update	= 'USERID_UPDATE';
		$this->app_pecahan_emisi_update_time	= 'UPDATE_TIME';
		$this->j_jenis_uang	= 'JENIS_UANG';
		$this->p_pecahan	= 'PECAHAN';
		$this->e_emisi	= 'EMISI';
		$this->userinput_nama_lengkap	= 'USER_INPUT';
		$this->userupdate_nama_lengkap	= 'USER_UPDATE';
		
		
		
		/*field_alias_database db*/
		$this->f_id	= 'id';
		$this->f_jenis_uang_id	= 'jenis_uang_id';
		$this->f_pecahan_id	= 'pecahan_id';
		$this->f_emisi_id	= 'emisi_id';
		$this->f_user_input	= 'user_input';
		$this->f_input_time	= 'input_time';
		$this->f_user_update	= 'user_update';
		$this->f_update_time	= 'update_time';	
		$this->f_jenis_uang	= 'jenis_uang';
		$this->f_p_id	= 'p_id';
		$this->f_pecahan	= 'pecahan';		
		$this->f_emisi	= 'emisi';		
		$this->f_passuser	= 'passuser';
		$this->f_nama_lengkap	= 'nama_lengkap';	
		$this->f_userupdate_nama_lengkap	= 'userupdate_nama_lengkap';
	
		
		
		
		/* CONFIG FORM LIST */
		/* field_alias_database => $title */	
		$this->table_column =array(
			$this->f_id	=> $this->app_pecahan_emisi_id,
			$this->f_jenis_uang	=> $this->j_jenis_uang,	
			$this->f_pecahan	=> $this->p_pecahan,
			$this->f_nama_lengkap	=> $this->userinput_nama_lengkap,
			$this->f_emisi	=> $this->e_emisi,
			$this->f_input_time	=> $this->app_pecahan_emisi_input_time,		
			$this->f_userupdate_nama_lengkap	=> $this->userupdate_nama_lengkap,
			$this->f_update_time	=> $this->app_pecahan_emisi_update_time,			
		);

	}

};









/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2022-01-05 21:13:46 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/

