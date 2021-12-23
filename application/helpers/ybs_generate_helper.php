<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function _generate($data='xseusgh') {
    $f1 = sha1($data);
	$f2 = md5('dxmn'.$f1.'zdnhs');
	return $f2;
}
function _prepareStatement($data=''){
	$a= str_replace('<script>','',$data);
	$a= str_replace('</script>','',$a);
	$a= str_replace("'","\'",$a);
	$a= str_replace(";","",$a);
	$a= str_replace("SELECT","\'",$a);
	$a= str_replace("DROP TABLE","\'",$a);
	$a= str_replace("=","\=",$a);
	return $a;
};




function _encode_id($data,$log_ref){
		$result="";
		$dsum = ($log_ref * 2) + $data;
		if($dsum==""||$dsum==null){
				$result 	= "";
			}else{
				$result = $dsum.$log_ref;
		}
		
		
	return $result;
}

function _create_random_div(){
	Date_default_timezone_set('Asia/Makassar');
	$time 	= time();
	$d 		= date('s',$time);
	$d 		= $d*1+6/2;
	$x=0;
	$result = "<div hidden></div>";
	for($x==0;$x<$d;$x++){
		$result .= "<div hidden></div>";
	}

	return $result;	
}	


function dd($d=false){
	var_dump($d);
	die;	
}

function _decode_id($data,$log_ref){
			$result="";
            $dsum = str_replace($log_ref,"",$data);
			if($dsum==""||$dsum==null){
				$result 	= "";
			}else{
				$result 	= $dsum - ($log_ref*2);
			}
           	
	return $result;
}

function _createFile($string, $path_file,$file_name){
	
	if (!file_exists($path_file)){
            mkdir($path_file, 0777, true);
    }

	
    $create = fopen($path_file .'/'.$file_name, "w") or die("Change your permision folder for application  to 777");
    fwrite($create, $string);
    fclose($create);
    
    return $path_file;
}
function _createFolder($path_file){
	if (!file_exists($path_file)){
            mkdir($path_file, 0777, true);
    }
}

//Helper function to save image
function saveTempImage($name, $contents,$dir){
	//You can use your imagination and store the images on the server using your own naming logic, we use the following:
	define('UPLOAD_DATA_DIR', './images/'.$dir."/"); 
	  $filename = UPLOAD_DATA_DIR.$name.'.jpg';
	  $res = file_put_contents($filename, $contents);
	  if ($res===false)
		  return false;
  
	  //Validate that it's a JPEG image
	  $im = @imagecreatefromjpeg($filename);
	  if ($im)
		  return true;
	  //Delete the image if it's not JPEG
	  @unlink($filename);
	  return false;
  }

//   function rupiah1($angka){
// 	$hasil_rupiah = "Rp " . number_format($angka, 0, ".", ".");
// 	return $hasil_rupiah;
//   }
 
//    function rupiah2($angka){
// 		$hasil_rupiah = "Rp " . number_format($angka, 1, ",", ".");
// 		return $hasil_rupiah;
//    }
 
function rupiah($angka,$belakang_koma=0){
	$hasil_rupiah = number_format($angka, $belakang_koma, ",", ".");
	return $hasil_rupiah;
}

if (!function_exists('ids_to_sentras')) {
    function ids_to_sentras($sentra_kas_ids)
    {
       $data=json_decode($_SESSION['sks']);
	   $ids=explode(',',$sentra_kas_ids);
	   $d=array();
	   foreach($ids as $id){
		 $d[$id]=$data->{$id};
	   }
	   return implode(',',$d);	   
    }
}

function penyebut($nilai) {
	$nilai = abs($nilai);
	$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	$temp = "";
	if ($nilai < 12) {
		$temp = " ". $huruf[$nilai];
	} else if ($nilai <20) {
		$temp = penyebut($nilai - 10). " belas";
	} else if ($nilai < 100) {
		$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
	} else if ($nilai < 200) {
		$temp = " seratus" . penyebut($nilai - 100);
	} else if ($nilai < 1000) {
		$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
	} else if ($nilai < 2000) {
		$temp = " seribu" . penyebut($nilai - 1000);
	} else if ($nilai < 1000000) {
		$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
	} else if ($nilai < 1000000000) {
		$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
	} else if ($nilai < 1000000000000) {
		$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
	} else if ($nilai < 1000000000000000) {
		$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
	}     
	return $temp;
}

function terbilang($nilai) {
	if($nilai<0) {
		$hasil = "minus ". trim(penyebut($nilai));
	} else {
		$hasil = trim(penyebut($nilai));
	}     		
	return ucfirst($hasil);
}


