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
      $this->load->model('Uang_masuk/Uang_masuk_model','uang_masuk');
  }

  public function index() {
  $this->template->load('Dashboard/Dashboard');
  }

  public function load_dashboard(){

      if($this->_user_bank_id!==NULL){        
        $bank_id=$this->_user_bank_id;
      }else{
        $bank_id=$this->input->post('bank_id')=='' ? NULL : $this->input->post('bank_id');
      }

      $tanggal_pencatatan=$this->input->post('tanggal_pencatatan');

      $kondisi=$this->uang_masuk->get_dashboard($tanggal_pencatatan,$bank_id);
      $belum=$this->uang_masuk->get_belum($tanggal_pencatatan,$bank_id); 

   

           
    //   if($kondisi){
          $sub_total['KERTAS']=0;
          $sub_total['KERTASGRESS_BI']=0;
          $sub_total['KERTASRECYCLE_BI']=0;
          $sub_total['KERTASDROPSHOT']=0;
          $sub_total['KERTASULE']=0;
          $sub_total['KERTASUTLE']=0;
          $sub_total['KERTASMINOR']=0;
          $sub_total['KERTASMAYOR']=0;

          $sub_total['LOGAM']=0;
          $sub_total['LOGAMGRESS_BI']=0;
          $sub_total['LOGAMRECYCLE_BI']=0;
          $sub_total['LOGAMDROPSHOT']=0;
          $sub_total['LOGAMULE']=0;
          $sub_total['LOGAMUTLE']=0;
          $sub_total['LOGAMMINOR']=0;
          $sub_total['LOGAMMAYOR']=0;

          foreach($kondisi as $row) { 

            @$jml[$row->jenis_uang.$row->pecahan]+=$row->GRESS_BI+$row->RECYCLE_BI+$row->DROPSHOT+$row->ULE+$row->UTLE+$row->MINOR+$row->MAYOR+$row->jumlah_campur;      
            
            $sub_total[$row->jenis_uang]+=$row->GRESS_BI+$row->RECYCLE_BI+$row->DROPSHOT+$row->ULE+$row->UTLE+$row->MINOR+$row->MAYOR+$row->jumlah_campur;
            
            $sub_total[$row->jenis_uang.'GRESS_BI']+=$row->GRESS_BI;
            $sub_total[$row->jenis_uang.'RECYCLE_BI']+=$row->RECYCLE_BI;
            $sub_total[$row->jenis_uang.'DROPSHOT']+=$row->DROPSHOT;
            $sub_total[$row->jenis_uang.'ULE']+=$row->ULE;
            $sub_total[$row->jenis_uang.'UTLE']+=$row->UTLE;
            $sub_total[$row->jenis_uang.'MINOR']+=$row->MINOR;
            $sub_total[$row->jenis_uang.'MAYOR']+=$row->MAYOR;
              
            $data['GRESS_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->GRESS_BI;         
            $data['RECYCLE_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->RECYCLE_BI;
            $data['DROPSHOT'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->DROPSHOT;
            $data['ULE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->ULE;
            $data['UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->UTLE;
            $data['MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->MINOR;
            $data['MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->MAYOR;                    
           

            
          }

                    

        foreach($belum as $row2){
            @$belum[$row2->jenis_uang.$row2->pecahan]=$row2->jumlah_belum;

            @$lembarbelum[$row2->jenis_uang.$row2->pecahan]=$row2->jumlah_belum/$row2->pecahan;

            @$belum[$row2->jenis_uang]+=$row2->jumlah_belum;
            @$lembarbelum[$row2->jenis_uang]+=$lembarbelum[$row2->jenis_uang.$row2->pecahan];
        }

          $data['jml']=@$jml;
          $data['sub_total']=$sub_total;
          $data['belum']=@$belum;
          $data['lembarbelum']=@$lembarbelum;

         
      $this->load->view('Dashboard/Dashboard_container',$data);
    
  }
}
