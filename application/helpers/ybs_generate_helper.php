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

