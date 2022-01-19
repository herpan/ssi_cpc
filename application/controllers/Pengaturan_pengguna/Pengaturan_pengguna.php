<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Form_General
 *
 * @author Herpan
 */


require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();

class Pengaturan_pengguna extends CI_Controller {
	private $log_key,$log_temp;
	
    public function __construct() {
        parent::__construct();
		$this->load->model('sys/Sys_user_model','tmodel');
		$this->log_key="log_pengaturan_pengguna";
    }

    public function index() {
		$data =array(
			'title_page_big'				=> 'Pengaturan Pengguna',
			'link_refresh_table'			=>  site_url().'Pengaturan_pengguna/Pengaturan_pengguna/refresh_table/'.$this->_token,
			'link_create'					=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/create',
			'link_create_multiple'			=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/create_multiple',
			'link_delete'					=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/delete_multiple',
			'link_update'					=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/update',
		);
		
		$this->template->load('sistem/User_list',$data);
    }
	
	public function create(){
		$data =array(
			'title_page_big'			=> 'Buat Pengguna Baru',
			'link_save'					=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/create_action',
			'link_prepare_picture'		=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/prepare_picture/'.$this->_token,
			'link_back'					=> $this->agent->referrer(),
			'id'						=> '',
			'nmuser'					=> '',
			'nmpicture'					=>  'Picture Profile',	
			'nmlevel'					=> '',
			'nama_lengkap'				=> '',
			'tanda_tangan'				=> '',
			'selected_status'			=> '1',
			'selected_level'			=> '',
			'data_level'				=> $this->get_level(),
			'picture'					=> '_profile.png',

		);
		
		$this->template->load('sistem/User_form',$data);
	}
	
	public function create_multiple(){
		$data =array(
			'title_page_big'				=> 'Buat Multiple Pengguna',
			'link_save'						=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/create_action',
			'link_prepare_picture'			=> site_url().'prepare_picture'.$this->_token,
			'link_download_template_user'	=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/download_template_user/'.$this->_token,
			'link_upload_template'			=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/upload_template_user/'.$this->_token,
			'link_back'						=> $this->agent->referrer(),
			'id'							=> '',
			'nmuser'						=> '',
			'nama_lengkap'					=> '',
			'tanda_tangan'					=> '',
			'nmpicture'						=>  'Picture Profile',	
			'nmlevel'						=> '',
			'selected_status'				=> '1',
			'selected_level'				=> '',
			'data_level'					=> $this->get_level(),
			'picture'						=> '_profile.png',

		);
		
		$this->template->load('sistem/User_form_multiple',$data);
	}
	
	
	
	
	
	
	
	
	public function prepare_picture($token){
		
		if($token== $this->_token){
				$tm = time();
				$config['upload_path']          = './images/tmp_user_profile/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 60000;
				$config['file_name']			= $this->_user_id.'xx_xx'.$tm .'.jpg';
				$config['overwrite']			= TRUE;
				
				$this->reset_image();
                $this->load->library('upload', $config);	
				
				$o = array();
			 if ( !$this->upload->do_upload('inputfile')){
				 
						$em = $this->upload->display_errors();
						$em = str_replace('You did not select a file to upload.','Tidak ada file yang di pilih',$em);
					
						$o['success'] 	= 'false';
						$o['message']	= $em;
						$o['elementid'] = '#inputfile';
						$o['sec_val']	=  $this->security->get_csrf_token_name()."=".$this->security->get_csrf_hash()."&";
						$o = json_encode($o);
						echo $o;
						return;		
                }else{
					$path_picture = $config['upload_path'].$config['file_name']; //'';//$this->save_temp_picture();
					
					
					
					$o['success']		= 'true';
					$o['message'] 		= $path_picture;
					$o['original_name']	= $this->upload->data('client_name');
					$o['sec_val']		=  $this->security->get_csrf_token_name()."=".$this->security->get_csrf_hash()."&";
					$o = json_encode($o);
					echo $o;
					return;		
                }	
		}else{
			redirect("Auth");
		}			
	}
	
	
	
	

	private function reset_image(){
		//delete all file temp if create by this user
		$files =glob('./images/tmp_user_profile/*');
		foreach($files as $file){
			if(is_file($file)){
				$fname = basename($file);
				$id_old_pic = explode('xx_xx',$fname); 
				if($id_old_pic[0]==$this->_user_id ){
					unlink($file);
				}	
			}
		}	
	}
	
	
	public function create_action(){
		$data 	= $this->input->post('data_ajax',true);
		$val	= json_decode($data,true);
		$o = new Outputview();
		if($val['nmuser']==""){
			 $o->success = 'false';
			 $o->message = 'nama pengguna belum di isi';
			 $o->elementid = '#input-nama-user';
			 echo $o->result();
			 return;
		}

		if ($val['nama_lengkap'] == "") {
			$o->success = 'false';
			$o->message = 'nama lengkap belum di isi';
			$o->elementid = '#input-nama-lenkap';
			echo $o->result();
			return;
		}
		 
		$field=array();
		$field['nmuser'] =$val['nmuser'];
		$exist = $this->tmodel->if_exist('',$field);
		if($exist){
			 $o->success  = 'false';
			 $o->message = 'nama pengguna sudah digunakan';
			 $o->elementid = '#input-nama-user';
			 echo $o->result();
			 return;
		}
		
		if($val['opt_level']==""){
			 $o->success = 'false';
			 $o->message = 'Level belum di pilih';
			 $o->elementid = '#select-level-user';
			 echo $o->result();
			 return;
		 }
		 
		
		
		unset($val['id']);
		
		$val['passuser']= _generate($val['passuser']); 
		
		
		//memastikan file foto temp ada..
		$a = $val['picture'];
		if(!is_file($a) && $a !=="default.png" && $a !=="-"){
			 $o->success = 'false';
			 $o->message = 'Foto belum di isi';
			 $o->elementid = '';
			 echo $o->result();
			 return;
		}	
			
		
		
		$success = $this->tmodel->insert($val);
		
		
		if($success){
			if($val['picture'] !=='default.png'){
				unlink($val['picture']);
			}

			$o->success = 'true';
			$o->message = "User berhasil di buat";
			$o->elementid = '#input-nama-user';
			echo $o->result();
		
		}else{
			$o->success = 'false';
			$o->message = "Opps..gagal";
			$o->elementid = '';
			echo $o->result();
		}
		

		
	}
	
	public function update($id){
		$data 			= $this->security->xss_clean($id);
		$idgenerate		=$id;
		
		$this->log_temp = $this->session->userdata($this->log_key); 
		$this->session->set_tempdata($id,$this->log_temp);
		
		$id = _decode_id($id,$this->log_temp);

		$row = $this->tmodel->get_by_id($id);

		if($row){
			$data =array(
				'title_page_big'		=> 'Update User ' . $row->nmuser,
				'link_save'				=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/update_action',
				'link_prepare_picture'	=> site_url().'Pengaturan_pengguna/Pengaturan_pengguna/prepare_picture/'.$this->_token,
				'link_back'				=> $this->agent->referrer(),
				'selected_status'		=> $row->opt_status,
				'selected_level'		=> $row->opt_level,
				'nmuser'				=> $row->nmuser,
				'nmpicture'				=> $row->nmuser,
				'nama_lengkap'			=> $row->nama_lengkap,
				'tanda_tangan'			=> $row->tanda_tangan,
				'nmlevel'				=> $row->nmlevel,
				'id'					=> $idgenerate,
				'data_level'			=> $this->get_level(),
				'picture'				=> base_url().'YbsService/get_picture/'.$this->_token . $this->_separator_a. $row->picture,
			);
			
			
			//identifikasi yang mengupdate adalah configurator 
			if($this->_user_id == $id && $id=='1'){
				$this->template->load('sistem/User_form_update_configurator',$data);
			}else{
				$this->template->load('sistem/User_form_update',$data);
			}
			
			
		}else{
			redirect($this->agent->referrer());
		}	
		
	}
	
	public function update_action(){
		$data 	= $this->input->post('data_ajax',true);
		$val	= json_decode($data,true);
		
		$this->log_temp = $this->session->tempdata($val['id']);
		$val['id']	=	_decode_id($val['id'],$this->log_temp);
		
		$o = new Outputview();
		 if($val['nmuser']==""){
			 $o->success = 'false';
			 $o->message = 'nama pengguna belum di isi';
			 $o->elementid= '#input-nama-user';
			 echo $o->result();
			 return;
		 }
		 
		$field=array();
		$field['nmuser'] =$val['nmuser'];
		$exist = $this->tmodel->if_exist($val['id'],$field);
		if($exist){
			 $o->success	 = 'false';
			 $o->message	 = 'nama pengguna sudah digunakan';
			 $o->elementid	 = '#input-nama-user';
			 echo $o->result();
			 return;
		}

		if ($val['nama_lengkap'] == "") {
			$o->success = 'false';
			$o->message = 'nama lengkap belum di isi';
			$o->elementid = '#input-nama-lenkap';
			echo $o->result();
			return;
		}
		
		//identifikasi update account configurator
		if($val['id']=='1'){
			$val['opt_level'] = '1';
			$val['opt_status'] = '1';
		}
		
		
		if($val['opt_level']==""){
			 $o->success 	 = 'false';
			 $o->message 	 = 'Level belum di pilih !!';
			 $o->elementid	 = '#select-level-user';
			 echo $o->result();
			 return;
		 }
		 
		
		if($val['select-reset']=='on'){
			if($val['passuser']==""){
				 $o->success  = 'false';
				 $o->message = 'password belum di isi';
				 $o->elementid = '#input-pass-user';
				 echo $o->result();
				 return;
			}
			
			$val['passuser']= _generate($val['passuser']); 
		}else{
			unset($val['passuser']);
		}
		
		unset($val['select-reset']);
		
		//set oldpicture
	    $old_p  = $this->tmodel->get_picture_for_update_byid($val['id']);

		$val['oldpicture'] = $old_p->picture;

		// if ($val['tanda_tangan'] !== "") {

		// 	$img = $val['tanda_tangan'];
		// 	$img = str_replace('data:image/png;base64,', '', $img);
		// 	$img = str_replace(' ', '+', $img);
		// 	$data_image = base64_decode($img);
		// 	$val['tanda_tangan'] =  $data_image;
		// }
		
		$this->tmodel->update($val['id'],$val);
		
		$o->success  = 'true';
		$o->message = 'data berhasil di update';
		echo $o->result();
	}
	
	
	
	
	public function delete_multiple(){
		$data 	= $this->input->get('data_ajax',true);
		$val	= json_decode($data,true);
		$data	= explode(',',$val['data_delete']);
		
		$this->log_temp = $this->session->userdata($this->log_key);
		
		$x=0;
		$o = new Outputview();
		foreach($data as $value){
			$id = _decode_id($value,$this->log_temp);
			//mengembalikan id asli
			$data[$x] = $id;
			
			if($id=='1'){
				 $o->success = 'false';
				 $o->message = 'Opps..user configurator tidak dapat di hapus !! block by system';
				 echo $o->result();
				return;
			}
			
			
			$x++;
		}
		
		$this->tmodel->delete_multiple($data);
		$o = new Outputview();
		$o->success = 'true';
		$o->message = 'Data berhasil di hapus !';
		echo $o->result();
		
		
	}
	
	
	public function refresh_table($token){
		if($token==$this->_token){
			$where="sys_user.id<>1";
			$row = $this->tmodel->json($where);
			
			//encode id 
			$tm = time();
			$this->session->set_userdata($this->log_key,$tm);
			$x = 0;
			foreach($row['data'] as $val){
				$idgenerate = _encode_id($val['id'],$tm);
				$row['data'][$x]['id'] = $idgenerate;
				$x++;
			}
			
			$o = new Outputview();
			$o->success	= 'true';
			$o->serverside	= 'true';
			$o->message	= $row;
			
			echo $o->result();
			

		}else{
			redirect('Auth');
		}
	}
	
	
	
	

	private function get_level(){
		$this->load->model('sys/Sys_level_model','tlevel');
		$row = $this->tlevel->get_all();
		return $row;
	}
	
	
	
	public function upload_template_user($token){
		if($token == $this->_token){
				$data_level = $this->get_level();
			
				$tm = time();
				$this->load->library("Phpspreadsheet");
				$dataError = array();
		
					try{
						$excel  = new Phpspreadsheet();
						
						$dataFinal = $excel->read('inputfile',3,2000);
								
						$x=4;
						foreach($dataFinal as $key){
							if($key["USER_NAME"]=="" || $key["PASSWORD"]=="" || $key["KODE_LEVEL"]=="" || $key["KODE_STATUS"]==""){
								$dataError[]= "<small>ERROR : ROW (". $x . ") ADA DATA YANG KOSONG, data tidak boleh kosong.. </small><br>";
							}
							
							
							//MENGECEK KODE LEVEL
							$exist = FALSE;
							$kode_level = (string) $key["KODE_LEVEL"] ;
							foreach($data_level as $key_level){
								if($key_level["id"] == $kode_level && $kode_level !=="1"){
									$exist = TRUE;
								}
							}
							
							if(!$exist){
								 $dataError[]= "<small>ERROR : ROW (". $x . ") KODE LEVEL tidak valid.. </small><br>";
							}
							
							
							
							//MENGECEK KODE STATUS
							$kode_status = (string) $key["KODE_STATUS"] ;
							if($kode_status !=="1" && $kode_status !=="2" ){
								 $dataError[]= "<small>ERROR : ROW (". $x . ") KODE STATUS tidak valid.. </small><br>";
							}
							

							$field=array();
							$field['nmuser'] =$key["USER_NAME"];
							$exist = $this->tmodel->if_exist('',$field);
							if($exist){
								 $dataError[]= "<small>ERROR : ROW (". $x . ") User ".$key["USER_NAME"]."  sudah digunakan </small><br>";
							}
							
							
							$double = $this->check_data_double($dataFinal,$key["USER_NAME"],$x);
							
							
							if($double !==""){
								$dataError[] = $double;
							}
							
							//membatasi pembacaan error ,max 10 error
							if(count($dataError)>10){
								break;
							}
							
							
							$x++;
						}
						
						
						
					} catch(Exception $e) {
						$msgError = $e->getMessage();
						$msgError = str_replace("Your requested sheet index: -1 is out of bounds. The actual number of sheets is 0.","Error : Sheet tidak di temukan",$msgError);
						$dataError[]= "<small>".$msgError."</small><br>";
					}
				
					
						

					if(count($dataError) > 0){
								
						$o['success']		= 'false';
						$o['message'] 		= $dataError;
						$o['sec_val']		=  $this->security->get_csrf_token_name()."=".$this->security->get_csrf_hash()."&";
						$o = json_encode($o);
						echo $o;
						return;	
					}else{		
						
						$this->create_user_by_template($this->_token,$dataFinal);
					
						return;		
					}
                
		
		}else{
			redirect("Auth");
		}	
	
	
	
	}

	private function check_data_double($data_master,$data_check,$row_check){
		$x =4;
		$data ="";
		foreach($data_master as $key){
			if($key["USER_NAME"]== $data_check && $row_check !== $x){
				$data="<small>ERROR : ROW (". $row_check . ") dan ROW (".$x.") Column A (".$key["USER_NAME"].") Data Double</small><br>";
				break;
			}
			
			$x++;
		}
		
		return $data;
		
	}
	


	private function create_user_by_template($token,$dataFinal){
		if($this->_token ==$token){
			
			$val = array();
			$val_exist= array();
			$val_final = array();
			$x=4;
					
			foreach($dataFinal as $key){
				$val["nmuser"]  	= $key["USER_NAME"];
				$pass 				=  (string) $key["PASSWORD"];
				$val["passuser"]	= _generate($pass); 
				$val["opt_level"]	= (string) $key["KODE_LEVEL"];
				$val["opt_status"] 	= (string) $key["KODE_STATUS"];
				$val["picture"]		= "default.png";
				
				
				$field=array();
				$field['nmuser'] =$val['nmuser'];
				$exist = $this->tmodel->if_exist('',$field);
				if($exist){
					$val_exist[] = "<small>ERROR : ROW (". $x . ") User ".$key["USER_NAME"]."  sudah digunakan </small><br>";
				}else{
					$val_final [] = $val;
				}
				
				$x++;
			
			}
			
			$o = new Outputview();
			if(count($val_exist)>0){
				 $o->success = 'false';
				 $o->message = $val_exist;
				 echo $o->result();
				 return;
			}else{
				
				$split_data = array_chunk($val_final,100);
				foreach($split_data as $val){
					$this->tmodel->insert_multiple($val);
				}				
				$o->success = 'true';
				$o->message = "<small>data berhasil di simpan..total data ".count($val_final)." row </small><br>";
				echo $o->result();
				return;
			}
		}else{
			redirect("Auth");
		}
	}
	
	public function download_template_user($token){
		if($token == $this->_token){
		
			//mendapatkan data level
			$data_level = $this->get_level();
			
			
			//$this->load->library("PHPExcel");
			$objPHPExcel = new Spreadsheet();
			
			//SET BORDER
			$thick = array ();
			$thick['borders']=array();
			$thick['borders']['allborders']=array();
			$thick['borders']['allborders']['style']= \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN ;
			

			$objPHPExcel->getProperties()->setCreator("Tim Project SYSTEM")
								 ->setLastModifiedBy("Tim Project SYSTEM")
								 ->setTitle("Office 2007 XLSX Test Document")
								 ->setSubject("Office 2007 XLSX Test Document")
								 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
								 ->setKeywords("office 2007 openxml php")
								 ->setCategory("Test result file");


			//========================================//
			/* 	 MEMBUAT TABLE ISIAN PADA COLUMN A1	  */
			//========================================//					 

			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A1', 'ISI PADA TABEL DI BAWAH INI (MAX 2000 ROW)')
						->setCellValue('A2', 'pastikan anda mengisi dengan benar, cek kembali isian anda sebelum melakukan upload ke system')
						->setCellValue('A3', 'USER_NAME')
						->setCellValue('B3', 'PASSWORD')
						->setCellValue('C3', 'KODE_LEVEL')
						->setCellValue('D3', 'KODE_STATUS');
						
			//MERGE COLOMN A1-D1 UNTUK TITLE KETERANGAN
			$objPHPExcel->getActiveSheet()->mergeCells('A1:D1');	
			
			//MERGE COLOMN A2-D2 UNTUK TITLE KETERANGAN
			$objPHPExcel->getActiveSheet()->mergeCells('A2:D2');	
			
				
			//MEMBUAT COLOR FONT RED A1
			$objPHPExcel->getActiveSheet()->getStyle('A1:A2')->getFont()
						->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);		
			
			
			//WRAP TEST A2
			$objPHPExcel->getActiveSheet()->getStyle('A2')
						->getAlignment()->setWrapText(true);
			
			//Set Height Row 2
			$objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(40);			

			
			//SET ALIGNMENT -CENTER-CENTER A1-A2
			$objPHPExcel->getActiveSheet()->getStyle('A1:D2003')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
			$objPHPExcel->getActiveSheet()->getStyle('A1:D2003')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);			
			
			
			//MEMBUAT COLOR FONT WHITE A3-D3	
			$objPHPExcel->getActiveSheet()->getStyle('A3:D3')->getFont()
						->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
						
			
			//BOLD A1
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			
			//BOLD A3-D3
			$objPHPExcel->getActiveSheet()->getStyle('A3:D3')->getFont()->setBold(true);
			
			
			//SET WIDTH COLUMN
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);	
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
			
			
			
			//SET COLOR CELL BLACK A3-D3
			$objPHPExcel->getActiveSheet()->getStyle('A3:D3')->getFill()
						->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
						->getStartColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);
						
						
			//========================================//
			/* 	 END TABLE ISIAN PADA COLUMN A1	  */
			//========================================//	

					


			
						
			
			//========================================//
			/*MEMBUAT TABLE CODE LEVEL PADA COLUMN G3*/
			//========================================//
			
				//MENULIS PADA COLUMN G3
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue('G3', 'KODE_LEVEL')
							->setCellValue('G4', 'KODE_LEVEL')
							->setCellValue('H4', 'DESKRIPSI');
				
				//MERGE COLOMN G3-H3 SEBAGAI TABLE TITLE
				$objPHPExcel->getActiveSheet()->mergeCells('G3:H3');
				
				//SET COLOR CELL BLACK G3
				$objPHPExcel->getActiveSheet()->getStyle('G3')->getFill()
							->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
							->getStartColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);	
				
				//MEMBUAT COLOR FONT WHITE G3-H3	
				$objPHPExcel->getActiveSheet()->getStyle('G3:H3')->getFont()
							->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);	

				//BOLD G3-H4
				$objPHPExcel->getActiveSheet()->getStyle('G3:H4')->getFont()->setBold(true);						
							
				
				//SET ALIGNMENT  TITLE CENTER-CENTER G3-H4
				$objPHPExcel->getActiveSheet()->getStyle('G3:G4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
				$objPHPExcel->getActiveSheet()->getStyle('G3:G4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);	
				
				//SET WIDTH Column G-H
				$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
				$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
				
				
							
							
				
				//membuat border				
				$objPHPExcel->getActiveSheet()->getStyle ( 'G3:H4' )->applyFromArray ($thick);
				
				$x = 5; //start row data
				foreach($data_level as $val){
					//mencegah id configurator di tampilkan
					if( $val['id'] > 1){
						$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('G'.$x, $val['id'])
						->setCellValue('H'.$x, $val['nmlevel']);
						
						$x++;
					}
				}
			
			

				$x = $x-1;
				
				
				$objPHPExcel->getActiveSheet()->getStyle('G5:H'.$x)->applyFromArray ($thick);
				$objPHPExcel->getActiveSheet()->getStyle('G5:G'.$x)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
				$objPHPExcel->getActiveSheet()->getStyle('G5:G'.$x)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);	
				
			
			//========================================//
			/* END TABLE CODE LEVEL PADA COLUMN G3*/
			//========================================//


			
			
			//========================================//
			/*MEMBUAT TABLE CODE STATUS PADA COLUMN J3*/
			//========================================//
			
				$objPHPExcel->setActiveSheetIndex(0) 
							->setCellValue('J3', 'KODE_STATUS')
							->setCellValue('J4', 'KODE_STATUS')
							->setCellValue('K4', 'DESKRIPSI');
				
				//MERGE COLOMN J3-K3
				$objPHPExcel->getActiveSheet()->mergeCells('J3:K3');
				
				//SET COLOR CELL BLACK J3
				$objPHPExcel->getActiveSheet()->getStyle('J3')->getFill()
							->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
							->getStartColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);	
				
				//MEMBUAT COLOR FONT WHITE J3-K3	
				$objPHPExcel->getActiveSheet()->getStyle('J3:K3')->getFont()
							->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);	

				//BOLD J3-K4
				$objPHPExcel->getActiveSheet()->getStyle('J3:K4')->getFont()->setBold(true);						

				//SET ALIGNMENT TITLE -CENTER-CENTER J3-K4
				$objPHPExcel->getActiveSheet()->getStyle('J3:J4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
				$objPHPExcel->getActiveSheet()->getStyle('J3:J4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);	

				//SET WIDTH Column J-K
				$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(15);
				$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(30);			
			
				//MEMBUAT BORDER TABLE
				$objPHPExcel->getActiveSheet()->getStyle ( 'J3:K6' )->applyFromArray ($thick);
			
				
				//MENGISI DATA
				$objPHPExcel->setActiveSheetIndex(0) 
							->setCellValue('J5', '1')
							->setCellValue('J6', '2')
							->setCellValue('K5', 'AKTIF')
							->setCellValue('K6', 'NON AKTIF');
				//set ALIGNMENT DATA			
				$objPHPExcel->getActiveSheet()->getStyle('J5:J6')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
				$objPHPExcel->getActiveSheet()->getStyle('J5:J6')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);			
			
			//========================================//
			/* END TABLE CODE STATUS PADA COLUMN J3*/
			//========================================//
			
				
			
			//PROTECTION SHEET
			$objPHPExcel->getActiveSheet()->getProtection()->setPassword('PHPExcel');
			$objPHPExcel->getActiveSheet()->getProtection()->setSheet(true);

			//UNPROTECT TABLE ISIAN MAX 2000 ROW
			$objPHPExcel->getActiveSheet()->getStyle('A4:D2003')->getProtection()
			->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_UNPROTECTED);
			
			
			//membuat border				
		   $objPHPExcel->getActiveSheet()->getStyle ( 'A4:D2003' )->applyFromArray ($thick);

						
			// Rename worksheet
			$objPHPExcel->getActiveSheet()->setTitle('TEMPLATE');		

			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
			$objPHPExcel->setActiveSheetIndex(0);
			// Redirect output to a client’s web browser (Excel5)
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="Template_User.xls"');
			header('Cache-Control: max-age=0');
			// If you're serving to IE 9, then the following may be needed
			header('Cache-Control: max-age=1');

			// If you're serving to IE over SSL, then the following may be needed
			header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
			header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
			header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
			header ('Pragma: public'); // HTTP/1.0

			$objWriter = new Xlsx($objPHPExcel); //PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			$objWriter->save('php://output');
			exit;	
		}else{
			redirect("Auth");			
		}		
		
	}
	
	
	
	
	
	
}
