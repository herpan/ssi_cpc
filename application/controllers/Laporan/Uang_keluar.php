<?php
require APPPATH. '/controllers/Laporan/Uang_keluar_config.php';

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_keluar extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Uang_keluar/Uang_keluar_model','tmodel');
		$this->log_key ='log_Uang_keluar';
		$this->title = new Uang_keluar_config();
   }


	public function index(){
		$data = array(
			'title_page_big'		=> 'DAFTAR',
			'title'					=> $this->title,
			'link_refresh_table'	=> site_url().'Uang_keluar/Uang_keluar/refresh_table/'.$this->_token,
			'link_update'			=> site_url().'Laporan/Uang_keluar/update',
			'link_view'				=> site_url().'Uang_keluar/Uang_keluar/view',			
		);
		
		$this->template->load('Laporan/Uang_keluar_list',$data);
	}

	public function update($id){
		$id 				= $this->security->xss_clean($id);
		$id_generate		= $id;
		
		/** proses decode id 
		* important !! tempdata digunakan sbagai antisipasi
		* perubahan session saat membuka tab baru secara bersamaan
		**/
		$this->log_temp	= $this->session->userdata($this->log_key);
		$this->session->set_tempdata($id,$this->log_temp,300);
		
		//mengembalikan id asli
		$id = _decode_id($id,$this->log_temp);
		
		$row = $this->tmodel->get_by_id($id);
		
		if($row){
			$data = array(
				'title_page_big'		=> 'Detail Penerimaan Uang',
				'title'					=> $this->title,
				'link_back'				=> $this->agent->referrer(),
				'data'					=> $row,
				'id'					=> $id_generate,
				'uang_keluar_id'			=> $id,
				'link_refresh_table'	=> site_url().'Uang_keluar_detail/Uang_keluar_detail/refresh_table/'.$this->_token.'/'.$id,
				'link_refresh_table_tas'	=> site_url().'Uang_keluar_tas/Uang_keluar_tas/refresh_table/'.$this->_token.'/'.$id,
				);
			
			$this->template->load('Laporan/Detail_uang_keluar_form',$data);
		}else{
			redirect($this->agent->referrer());
		}
	}
};

