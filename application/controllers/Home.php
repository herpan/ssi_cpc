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
  public function __construct() {
      parent::__construct();
      $this->load->model('Uang_masuk/Uang_masuk_model','uang_masuk');
      $this->load->model('Bank/Bank_model','bank');
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

      if($bank_id==NULL){
        $tipe_dashboard='type1';
      }else{
        $tipe_dashboard=$this->bank->get_by_id($bank_id)->dashboard;
      }

      $tanggal_pencatatan=$this->input->post('tanggal_pencatatan');

      $kondisi=$this->uang_masuk->get_dashboard($tanggal_pencatatan,$bank_id);
      $belum=$this->uang_masuk->get_belum($tanggal_pencatatan,$bank_id); 

 
   
          foreach($kondisi as $row) { 

            //Jumlah yang sudah di proses per pecahan
            @$jml[$row->jenis_uang.$row->pecahan]+=$row->GRESS_BI+$row->RECYCLE_BI+$row->DROPSHOT+$row->ULE+$row->ULE2+$row->UTLE+$row->MINOR+$row->MAYOR+$row->jumlah_campur;      
            //Sub Total jenis uang
            @$sub_total[$row->jenis_uang]+=$row->GRESS_BI+$row->RECYCLE_BI+$row->DROPSHOT+$row->ULE+$row->ULE2+$row->UTLE+$row->MINOR+$row->MAYOR+$row->jumlah_campur;
                  
            if($tipe_dashboard=='type4'){
              //Menghitung uang campur
            
              if($row->jenis_uang=='KERTAS'){
                $brute=$row->pecahan*1000;
                
                //Campur UTLE

                if($row->UTLE>=($brute*10)){
                  $mod=$row->UTLE%($brute*10);
                  $data['CAMPUR_UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;
                }
                else{
                  $data['CAMPUR_UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->UTLE;
                }

                //Campur MINOR

                if($row->MINOR>=($brute*10)){
                  $mod=$row->MINOR%($brute*10);
                  $data['CAMPUR_MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;
                }
                else{
                  $data['CAMPUR_MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->MINOR;
                }

                //Campur MINOR

                if($row->MAYOR>=($brute*10)){
                  $mod=$row->MAYOR%($brute*10);
                  $data['CAMPUR_MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;
                }
                else{
                  $data['CAMPUR_MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->MAYOR;
                }

              } 
              else{
                $brute=$row->pecahan*500;
                
                //Campur UTLE

                if($row->UTLE>=$brute){
                  $mod=$row->UTLE%$brute;
                  $data['CAMPUR_UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;
                }
                else{
                  $data['CAMPUR_UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->UTLE;
                }

                //Campur MINOR

                if($row->MINOR>=$brute){
                  $mod=$row->MINOR%$brute;
                  $data['CAMPUR_MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;
                }
                else{
                  $data['CAMPUR_MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->MINOR;
                }

                //Campur MINOR

                if($row->MAYOR>=$brute){
                  $mod=$row->MAYOR%$brute;
                  $data['CAMPUR_MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;
                }
                else{
                  $data['CAMPUR_MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->MAYOR;
                }
              } 

              

              //campur Gress BI
              
              if($row->GRESS_BI>=$brute){
                $mod=$row->GRESS_BI%$brute;
                $data['CAMPUR_GRESS_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;                                
              }
              else{
                $data['CAMPUR_GRESS_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->GRESS_BI;            
              }

              //Campur Recycle BI

              if($row->RECYCLE_BI>=$brute){
                $mod=$row->RECYCLE_BI%$brute;
                $data['CAMPUR_RECYCLE_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;
              }
              else{
                $data['CAMPUR_RECYCLE_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->RECYCLE_BI;
              }

              //Campur Dropshot

              if($row->DROPSHOT>=$brute){
                $mod=$row->DROPSHOT%$brute;
                $data['CAMPUR_DROPSHOT'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;
              }
              else{
                $data['CAMPUR_DROPSHOT'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->DROPSHOT;
              }

              //Campur ULE

              if($row->ULE>=$brute){
                $mod=$row->ULE%$brute;
                $data['CAMPUR_ULE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod;
                
              }
              else{
                $data['CAMPUR_ULE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->ULE; 
              }

              //Campur ULE2

              if($row->ULE2>=$brute){
                $mod=$row->ULE2 % $brute;
                $data['CAMPUR_ULE2'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$mod; 
                
              }
              else{
                $data['CAMPUR_ULE2'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->ULE2;
              }

              

                           
              @$sub_total[$row->jenis_uang.'GRESS_BI']+=($row->GRESS_BI - $data['CAMPUR_GRESS_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              @$sub_total[$row->jenis_uang.'RECYCLE_BI']+=($row->RECYCLE_BI - $data['CAMPUR_RECYCLE_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              @$sub_total[$row->jenis_uang.'DROPSHOT']+=($row->DROPSHOT - $data['CAMPUR_DROPSHOT'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              @$sub_total[$row->jenis_uang.'ULE']+=($row->ULE - $data['CAMPUR_ULE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              @$sub_total[$row->jenis_uang.'ULE2']+=($row->ULE2 - $data['CAMPUR_ULE2'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              @$sub_total[$row->jenis_uang.'UTLE']+=($row->UTLE - $data['CAMPUR_UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              @$sub_total[$row->jenis_uang.'MINOR']+=($row->MINOR - $data['CAMPUR_MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              @$sub_total[$row->jenis_uang.'MAYOR']+=($row->MAYOR - $data['CAMPUR_MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
                
              $data['GRESS_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=($row->GRESS_BI - $data['CAMPUR_GRESS_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);         
              $data['RECYCLE_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=($row->RECYCLE_BI - $data['CAMPUR_RECYCLE_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              $data['DROPSHOT'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=($row->DROPSHOT - $data['CAMPUR_DROPSHOT'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              $data['ULE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=($row->ULE - $data['CAMPUR_ULE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              $data['ULE2'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=($row->ULE2 - $data['CAMPUR_ULE2'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              $data['UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=($row->UTLE - $data['CAMPUR_UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              $data['MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=($row->MINOR - $data['CAMPUR_MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              $data['MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=($row->MAYOR - $data['CAMPUR_MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
              
              @$campur[$row->jenis_uang.$row->pecahan]+=($data['CAMPUR_GRESS_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_RECYCLE_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_DROPSHOT'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_ULE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_ULE2'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);

              @$campur[$row->jenis_uang]+=($data['CAMPUR_GRESS_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_RECYCLE_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_DROPSHOT'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_ULE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_ULE2'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]+$data['CAMPUR_MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]);
            }
            else{  
            
                          
              @$sub_total[$row->jenis_uang.'GRESS_BI']+=$row->GRESS_BI;
              @$sub_total[$row->jenis_uang.'RECYCLE_BI']+=$row->RECYCLE_BI;
              @$sub_total[$row->jenis_uang.'DROPSHOT']+=$row->DROPSHOT;
              @$sub_total[$row->jenis_uang.'ULE']+=$row->ULE;
              @$sub_total[$row->jenis_uang.'ULE2']+=$row->ULE2;
              @$sub_total[$row->jenis_uang.'UTLE']+=$row->UTLE;
              @$sub_total[$row->jenis_uang.'MINOR']+=$row->MINOR;
              @$sub_total[$row->jenis_uang.'MAYOR']+=$row->MAYOR;
                
              $data['GRESS_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->GRESS_BI;         
              $data['RECYCLE_BI'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->RECYCLE_BI;
              $data['DROPSHOT'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->DROPSHOT;
              $data['ULE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->ULE;
              $data['ULE2'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->ULE2;
              $data['UTLE'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->UTLE;
              $data['MINOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->MINOR;
              $data['MAYOR'][$row->jenis_uang.$row->pecahan.str_replace(' ','',$row->emisi)]=$row->MAYOR;   

              //echo $row->ULE.'<br/>';

            }
            
            
          }

                    

        foreach($belum as $row2){
            @$belum[$row2->jenis_uang.$row2->pecahan]=$row2->jumlah_belum;

            @$lembarbelum[$row2->jenis_uang.$row2->pecahan]=$row2->jumlah_belum/$row2->pecahan;

            @$belum[$row2->jenis_uang]+=$row2->jumlah_belum;
            @$lembarbelum[$row2->jenis_uang]+=$lembarbelum[$row2->jenis_uang.$row2->pecahan];
        }

          $data['jml']=@$jml;
          $data['sub_total']=@$sub_total;
          $data['belum']=@$belum;
          $data['lembarbelum']=@$lembarbelum;
          $data['campur']=@$campur;

         
      $this->load->view('Dashboard/type/'.$tipe_dashboard,$data);
    
  }
}
