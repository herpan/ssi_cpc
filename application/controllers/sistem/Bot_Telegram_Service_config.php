<?php
require APPPATH . 'controllers/sistem/General_title.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bot_Telegram_Service_config {
	


   function __construct(){
	   /* title */
	    $this->general		= new General_title();
		$this->sys_bot_telegram_service_id	= 'ID';
		$this->sys_bot_telegram_service_name	= 'SERVICE NAME';
		$this->sys_bot_telegram_service_key	= 'KEY';

		
		
		
		/*field_alias_database db*/
		$this->f_id	= 'id';
		$this->f_name	= 'name';
		$this->f_key	= 'key';

		
		
		
		/* CONFIG FORM LIST */
		/* field_alias_database => $title */	
		$this->table_column =array(
		//	$this->f_id	=> $this->sys_bot_telegram_service_id,
			$this->f_name	=> $this->sys_bot_telegram_service_name,
			$this->f_key	=> $this->sys_bot_telegram_service_key,
		);

	}

};









/* END */
/* Mohon untuk tidak mengubah informasi ini : */
/* Generated by YBS CRUD Generator 2019-12-14 21:25:19 */
/* contact : YAP BRIDGING SYSTEM 		*/
/*			 bridging.system@gmail.com  */
/* 			 MAKASSAR CITY, INDONESIAN 	*/
