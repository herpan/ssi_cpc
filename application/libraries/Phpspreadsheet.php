<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Phpspreadsheet{
    public function load($input_name){
        $arr_file = explode('.', $_FILES[$input_name]['name']);
        $extension = end($arr_file);
    
        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }    
        return $reader->load($_FILES[$input_name]['tmp_name']);             
    } 

	public function read($input_name,$startRow=3,$endRow=100,$endCol=4){
		$i=0;
		$x=0;
		$col=array();
		$d=array();
		$data=array();
        $excel=$this->load($input_name);				
		foreach ($excel->setActiveSheetIndex(0)->getRowIterator() as $row) {
			$cellIterator = $row->getCellIterator();
			$cellIterator->setIterateOnlyExistingCells(false);		   
			$i++;
			foreach ($cellIterator as $cell) {  
				$value = $cell->getValue();    
				                                   
				if (!is_null($cell)) {
					$value = $cell->getValue();
					if($i==$startRow && $x<$endCol){
						$col[]= $value;								
					}	
					elseif($i>$startRow && $x<$endCol){
						$d[$col[$x]]=$value;
						 						
					}
					$x++;  
				} 
				                   
			}	
			//reset column
			$x=0;

			
			
			if($i>$startRow){
				$next=false;				
				// check if cell is empty
				foreach($d as $val){
					if(!empty($val)) $next=true;
				}
				if(!$next || $i==$endRow){
					return $data;
				}else{   
					$data[] = $d;
				}				
			}  	
			
		}
		

    } 
         
}