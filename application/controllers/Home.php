<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Form_General
 *
 * @author Herpan Safari
 */
class Home extends CI_Controller {

    // public function __construct() {
    //     parent::__construct();
    // }

    // public function index() {		
		//   $this->template->load('sistem/home');
    // }
  public function __construct() {
      parent::__construct();
      $this->load->model('Journal_cpc/Journal_cpc_model','journal_kondisi');
  }

  public function index() {
  $this->template->load('Dashboard/Dashboard');
  }

  public function load_dashboard(){

      $bank_id=$this->input->post('bank_id');
      $tanggal_pencatatan=$this->input->post('tanggal_pencatatan');
      $kondisi=$this->journal_kondisi->get_dashboard($bank_id,$tanggal_pencatatan);  
      
      if($kondisi){
          foreach($kondisi as $row) { 
              @$jml_jenis[$row->jenis_uang]++;
              @$jml_pecahan[$row->jenis_uang.$row->pecahan]++; 
              @$jml[$row->jenis_uang.$row->pecahan]+=$row->GRESS_BI+$row->RECYCLE_BI+$row->DROPSHOT+$row->ULE+$row->UTLE+$row->MINOR+$row->MAYOR;      
          } 
          
          $data['jml_jenis']=@$jml_jenis;
          $data['jml_pecahan']=@$jml_pecahan;
          $data['jml']=@$jml;
          $data['kondisi']=$kondisi;
          $this->load->view('Dashboard/Dashboard_container',$data);
      }else{
          //echo $this->db->last_query();
          echo ' 
          <div class="alert alert-danger my-4" role="alert">
              <h4 class="alert-title">Informasi</h4>
              <div class="text-muted">Belum ada data untuk tanggal '.$tanggal_pencatatan.'</div>
          </div>                    
          ';           
      }      
     
  }
}
