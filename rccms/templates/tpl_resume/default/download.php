<?
$mimetype = 'application/pdf';//xls格式(如果下载其他格式的改下application参数)
header("Pragma: public"); // required        
header("Expires: 0");        
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");        
header("Cache-Control: private", false);  
header("Content-Transfer-Encoding: binary");        
header("Content-Type: " . $mimetype);        
//header("Content-Length: " . filesize($filename));        
header("Content-Disposition: attachment; filename=" . $filename . ";" ); 
?>