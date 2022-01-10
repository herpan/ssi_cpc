<?php
require APPPATH. '/controllers/Laporan/Uang_masuk_config.php';

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uang_masuk extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Uang_masuk/Uang_masuk_model','tmodel');
		$this->log_key ='log_Uang_masuk';
		$this->title = new Uang_masuk_config();
   }


	public function index(){
		$data = array(
			'title_page_big'		=> 'LAPORAN UANG MASUK',
			'title'					=> $this->title,
			'link_refresh_table'	=> site_url().'Uang_masuk/Uang_masuk/refresh_table/'.$this->_token,		
			'link_update'			=> site_url().'Laporan/Uang_masuk/update',
			'link_view'				=> site_url().'Uang_masuk/Uang_masuk/view',
			'link_view_selisih'		=> site_url().'Proses_uang_masuk/Proses_uang_masuk/view',			
		);
		
		$this->template->load('Laporan/Uang_masuk_list',$data);
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

		$this->load->model('Uang_selisih/Uang_selisih_model','selisih');

		$row_selisih=$this->selisih->get_by_id($id,true);
		
		if($row){
			$data = array(
				'title_page_big'		=> 'Detail Proses Uang Masuk',
				'title'					=> $this->title,
				'link_back'				=> $this->agent->referrer(),
				'data'					=> $row,
				'data_selisih'			=> $row_selisih,
				'id'					=> $id_generate,
				'uang_masuk_id'			=> $id,
				'link_refresh_table'	=> site_url().'Uang_masuk_detail/Uang_masuk_detail/refresh_table2/'.$this->_token.'/'.$id,
				'link_refresh_proses'	=> site_url().'Proses/Proses/refresh_table/'.$this->_token.'/'.$id,
				'link_refresh_selisih'	=> site_url().'Uang_masuk_detail/Uang_masuk_detail/refresh_table/'.$this->_token.'/'.$id.'/selisih',
				'link_refresh_penjelasan'	=> site_url().'Penjelasan_selisih/Penjelasan_selisih/refresh_table/'.$this->_token.'/'.$id,			
			
			);			
			$this->template->load('Laporan/Detail_uang_masuk_form',$data);
		}else{
			redirect($this->agent->referrer());
		}
	}
	public function mutasi(){
		$row=$this->tmodel->get_mutasi();
		$saldo=$this->tmodel->get_saldo();
		//echo json_encode($data);

	
		$data = array(
			'title_page_big'		=> 'LAPORAN MUTASI',
			'title'					=> $this->title,
			'mutasi'				=> $row,
			'saldo'					=> $saldo->saldo,
		);			
		$this->template->load('Laporan/Mutasi',$data);
	
	}
};

