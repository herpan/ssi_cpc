<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Journal_cpc/Journal_cpc_model','journal_kondisi');
    }

    public function index() {
    
    $kondisi=$this->journal_kondisi->get_dashboard();    
   
    foreach($kondisi as $row) { 
        @$jml_jenis[$row->jenis_uang]++;
        @$jml_pecahan[$row->pecahan]++; 
        @$jml[$row->pecahan]+=$row->GRESS_BI+$row->RECYCLE_BI+$row->DROPSHOT+$row->ULE+$row->UTLE+$row->MINOR+$row->MAYOR;      
    } 
      
      $data['jml_jenis']=@$jml_jenis;
      $data['jml_pecahan']=@$jml_pecahan;
      $data['jml']=@$jml;
      $data['kondisi']=$kondisi;

	  $this->template->load('Dashboard/Dashboard',$data);
    }
}
