<?php
require APPPATH. '/controllers/Cabang_cpc/Cabang_cpc_config.php';

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Cabang_cpc extends CI_Controller {
   private $log_key,$log_temp,$title;
   function __construct(){
        parent::__construct();
		$this->load->model('Cabang_cpc/Cabang_cpc_model','tmodel');
		$this->load->model('Bank/Bank_model','bank');
		$this->load->model('Kategori_cabang/Kategori_cabang_model','kategori');
		$this->load->model('Sentra_kas/Sentra_kas_model','sentra');
		$this->log_key ='log_Cabang_cpc';
		$this->title = new Cabang_cpc_config();
   }


	public function index(){
		$data = array(
			'title_page_big'		=> 'DAFTAR',
			'title'					=> $this->title,
			'link_refresh_table'	=> site_url().'Cabang_cpc/Cabang_cpc/refresh_table/'.$this->_token,
			'link_create'			=> site_url().'Cabang_cpc/Cabang_cpc/create',
			'link_update'			=> site_url().'Cabang_cpc/Cabang_cpc/update',
			'link_delete'			=> site_url().'Cabang_cpc/Cabang_cpc/delete_multiple',
			'link_create_multiple'			=> site_url().'Cabang_cpc/Cabang_cpc/create_multiple',
		);
		
		$this->template->load('Cabang_cpc/Cabang_cpc_list',$data);
	}

	public function refresh_table($token){
		if($token==$this->_token){
			$row = $this->tmodel->json();
			
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

	public function create(){
		$data = array(
			'title_page_big'		=> 'Buat Baru',
			'title'					=> $this->title,
			'link_save'				=> site_url().'Cabang_cpc/Cabang_cpc/create_action',
			'link_back'				=> $this->agent->referrer(),			
		);
		
		$this->template->load('Cabang_cpc/Cabang_cpc_form',$data);

	}

	public function create_action(){
		$data 	= $this->input->post('data_ajax',true);
		$val	= json_decode($data,true);
		$o		= new Outputview(); 

		/* 
		*	untuk mengganti message output
		* tambahkan perintah : $o->message = 'isi pesan'; 
 		* sebelum perintah validasi.
		* ex.
		* 	$o->message = 'halo ini pesan baru';
		* 	if(!$o->not_empty($val['descriptions'],'#descriptions')){
		*		echo $o->result();	
		*		return;
		*  	}
		*
		*/	

		//mencegah data kosong
		if(!$o->not_empty($val['bank_id'],'#bank_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['kategori_cabang_id'],'#kategori_cabang_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['nama_cabang'],'#nama_cabang')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['alamat'],'#alamat')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['sentra_kas_id'],'#sentra_kas_id')){
			echo $o->result();	
			return;
		}

		$val['user_input']= $this->_user_id;
	
		unset($val['id']);
		$success = $this->tmodel->insert($val);
		echo $o->auto_result($success);

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
				'title_page_big'		=> 'Buat Baru',
				'title'					=> $this->title,
				'link_save'				=> site_url().'Cabang_cpc/Cabang_cpc/update_action',
				'link_back'				=> $this->agent->referrer(),
				'data'					=> $row,
				'id'					=> $id_generate,
			);
			
			$this->template->load('Cabang_cpc/Cabang_cpc_form',$data);
		}else{
			redirect($this->agent->referrer());
		}
	}

	public function update_action(){
		$data 	= $this->input->post('data_ajax',true);
		$val	= json_decode($data,true);
		$this->log_temp		= $this->session->tempdata($val['id']);
		$val['id']				= _decode_id($val['id'],$this->log_temp);
		
		$o		= new Outputview(); 
			
		/* 
		*	untuk mengganti message output
		* tambahkan perintah : $o->message = 'isi pesan'; 
 		* sebelum perintah validasi.
		* ex.
		* 	$o->message = 'halo ini pesan baru';
		* 	if(!$o->not_empty($val['descriptions'],'#descriptions')){
		*		echo $o->result();	
		*		return;
		*  	}
		*
		*/			

		//mencegah data kosong
		if(!$o->not_empty($val['bank_id'],'#bank_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['kategori_cabang_id'],'#kategori_cabang_id')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['nama_cabang'],'#nama_cabang')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['alamat'],'#alamat')){
			echo $o->result();	
			return;
		}

		//mencegah data kosong
		if(!$o->not_empty($val['sentra_kas_id'],'#sentra_kas_id')){
			echo $o->result();	
			return;
		}

		$val['user_update']= $this->_user_id;
		$val['update_time']= now_db();


		$success = $this->tmodel->update($val['id'],$val);
		echo $o->auto_result($success);

	}

	public function delete_multiple(){
		$data=$this->input->get('data_ajax',true);
		$val=json_decode($data,true);
		$data = explode(',',$val['data_delete']);

		//get key generate
		$log_id = $this->session->userdata($this->log_key);
		$xx=0;
		foreach($data as $value){
			$value =  _decode_id($value,$log_id);
			//menganti ke id asli
			$data[$xx] = $value;
			$xx++;	
		}
		
		$success = $this->tmodel->delete_multiple($data);
		
		$o = new Outputview();
		
		//create message
		if($success){
			$o->success 	= 'true';
			$o->message	= 'Data berhasil di hapus !';
		}else{
			$o->success 	= 'false';
			$o->message	= 'Opps..Gagal menghapus data !!';
		}
		
		
		echo $o->result();
	
	}

	public function  create_multiple(){
		$data = array(
			'title_page_big'			=> 'Import data pengguna dari excel',
			'link_download_template'	=> site_url().'Cabang_cpc/Cabang_cpc/download_template/'.$this->_token,
			'link_upload_template'		=> site_url().'Cabang_cpc/Cabang_cpc/upload_template/'.$this->_token,
			'link_back'					=> $this->agent->referrer(),			
		);
		
		$this->template->load('share/Form_multiple',$data);
	}

	public function  download_template($token){
		if($token == $this->_token){
		
			//mendapatkan data bank
			$data_bank = $this->bank->get_all();

			//mendapatkan data kategori
			$data_kategori = $this->kategori->get_all();

			//mendapatkan data sentra
			$data_sentra = $this->sentra->get_all();
			
			
			//$this->load->library("PHPExcel");
			$objPHPExcel = new Spreadsheet();
			
			//SET BORDER
			$thick = array ();
			$thick['borders']=array();
			$thick['borders']['allborders']=array();
			$thick['borders']['allborders']['style']= \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN ;
			

			$objPHPExcel->getProperties()->setCreator("IT Development Team")
								 ->setLastModifiedBy("IT Development Team")
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
						->setCellValue('A3', 'ID_BANK')
						->setCellValue('B3', 'ID_KATEGORI')
						->setCellValue('C3', 'ID_SENTRA')
						->setCellValue('D3', 'NAMA_CABANG')
						->setCellValue('E3', 'ALAMAT');
						
			//MERGE COLOMN A1-D1 UNTUK TITLE KETERANGAN
			$objPHPExcel->getActiveSheet()->mergeCells('A1:E1');	
			
			//MERGE COLOMN A2-D2 UNTUK TITLE KETERANGAN
			$objPHPExcel->getActiveSheet()->mergeCells('A2:E2');	
			
				
			//MEMBUAT COLOR FONT RED A1
			$objPHPExcel->getActiveSheet()->getStyle('A1:A2')->getFont()
						->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);		
			
			
			//WRAP TEST A2
			$objPHPExcel->getActiveSheet()->getStyle('A2')
						->getAlignment()->setWrapText(true);
			
			//Set Height Row 2
			$objPHPExcel->getActiveSheet()->getRowDimension('2')->setRowHeight(40);			

			
			//SET ALIGNMENT -CENTER-CENTER A1-A2
			$objPHPExcel->getActiveSheet()->getStyle('A1:E2003')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
			$objPHPExcel->getActiveSheet()->getStyle('A1:E2003')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);			
			
			
			//MEMBUAT COLOR FONT WHITE A3-D3	
			$objPHPExcel->getActiveSheet()->getStyle('A3:E3')->getFont()
						->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
						
			
			//BOLD A1
			$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
			
			//BOLD A3-D3
			$objPHPExcel->getActiveSheet()->getStyle('A3:E3')->getFont()->setBold(true);
			
			
			//SET WIDTH COLUMN
			$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);	
			$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
			$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
			
			
			
			//SET COLOR CELL BLACK A3-D3
			$objPHPExcel->getActiveSheet()->getStyle('A3:E3')->getFill()
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
							->setCellValue('G3', 'ID_BANK')
							->setCellValue('G4', 'ID_BANK')
							->setCellValue('H4', 'BANK');										
				
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
				foreach($data_bank as $val){
					
					$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('G'.$x, $val['id'])
					->setCellValue('H'.$x, $val['bank']);
					
					$x++;
					
				}
			
			

				$x = $x-1;
				
				
				$objPHPExcel->getActiveSheet()->getStyle('G5:H'.$x)->applyFromArray ($thick);
				$objPHPExcel->getActiveSheet()->getStyle('G5:G'.$x)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
				$objPHPExcel->getActiveSheet()->getStyle('G5:G'.$x)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);	
				
			
			//========================================//
			/* END TABLE BANK PADA COLUMN G3*/
			//========================================//


			
			
			//========================================//
			/*MEMBUAT TABLE ID KATEGORI PADA COLUMN J3*/
			//========================================//
			
				$objPHPExcel->setActiveSheetIndex(0) 
							->setCellValue('J3', 'ID_KATEGORI')
							->setCellValue('J4', 'ID_KATEGORI')
							->setCellValue('K4', 'KATEGORI');
				
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
			
				
				$x = 5; //start row data
				foreach($data_kategori as $val){
					//mencegah id configurator di tampilkan
					
					$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('J'.$x, $val['id'])
					->setCellValue('K'.$x, $val['kategori_cabang']);
					
					$x++;
					
				}
			
			

				$x = $x-1;
				
				
				$objPHPExcel->getActiveSheet()->getStyle('J5:K'.$x)->applyFromArray ($thick);
				$objPHPExcel->getActiveSheet()->getStyle('J5:K'.$x)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
				$objPHPExcel->getActiveSheet()->getStyle('J5:K'.$x)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);	

				
			
			//========================================//
			/* END TABLE KATEGORI PADA COLUMN J3*/
			//========================================//

			//========================================//
			/*MEMBUAT TABLE ID SENTRA PADA COLUMN M3*/
			//========================================//
			
			$objPHPExcel->setActiveSheetIndex(0) 
			->setCellValue('M3', 'ID_SENTRA')
			->setCellValue('M4', 'ID_SENTRA')
			->setCellValue('M4', 'SENTRA');

			//MERGE COLOMN M3-N3
			$objPHPExcel->getActiveSheet()->mergeCells('M3:N3');

			//SET COLOR CELL BLACK M3
			$objPHPExcel->getActiveSheet()->getStyle('M3')->getFill()
						->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
						->getStartColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_BLACK);	

			//MEMBUAT COLOR FONT WHITE M3-K3	
			$objPHPExcel->getActiveSheet()->getStyle('M3:N3')->getFont()
						->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);	

			//BOLD M3-K4
			$objPHPExcel->getActiveSheet()->getStyle('M3:N4')->getFont()->setBold(true);						

			//SET ALIGNMENT TITLE -CENTER-CENTER M3-K4
			$objPHPExcel->getActiveSheet()->getStyle('M3:N4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
			$objPHPExcel->getActiveSheet()->getStyle('M3:N4')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);	

			//SET WIDTH Column J-K
			$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(15);
			$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30);			

			//MEMBUAT BORDER TABLE
			$objPHPExcel->getActiveSheet()->getStyle ( 'M3:N6' )->applyFromArray ($thick);


			$x = 5; //start row data
			foreach($data_sentra as $val){
				//mencegah id configurator di tampilkan
				
				$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('M'.$x, $val['id'])
				->setCellValue('N'.$x, $val['sentra']);
				
				$x++;
				
			}



			$x = $x-1;


			$objPHPExcel->getActiveSheet()->getStyle('M5:N'.$x)->applyFromArray ($thick);
			$objPHPExcel->getActiveSheet()->getStyle('M5:N'.$x)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
			$objPHPExcel->getActiveSheet()->getStyle('M5:N'.$x)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);	



			//========================================//
			/* END TABLE KATEGORI PADA COLUMN M3*/
			//========================================//
			
				
			
			//PROTECTION SHEET
			$objPHPExcel->getActiveSheet()->getProtection()->setPassword('PHPExcel');
			$objPHPExcel->getActiveSheet()->getProtection()->setSheet(true);

			//UNPROTECT TABLE ISIAN MAX 2000 ROW
			$objPHPExcel->getActiveSheet()->getStyle('A4:E2003')->getProtection()
			->setLocked(\PhpOffice\PhpSpreadsheet\Style\Protection::PROTECTION_UNPROTECTED);
			
			
			//membuat border				
		   $objPHPExcel->getActiveSheet()->getStyle ( 'A4:E2003' )->applyFromArray ($thick);

						
			// Rename worksheet
			$objPHPExcel->getActiveSheet()->setTitle('TEMPLATE');		

			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
			$objPHPExcel->setActiveSheetIndex(0);
			// Redirect output to a client’s web browser (Excel5)
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="Template_cabang.xls"');
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

	public function  upload_template($token){
		if ($token == $this->_token) {
			//Buat template upload
		}else {
			redirect('Auth');
		}
	}



};

