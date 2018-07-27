<?
// header("content-type:text/html:charset=utf-8");
header('Content-Type:text/plain;charset=utf-8');

//file_upload.php是封装好的函数，用本文件调用，传入参数
$file_info=$_FILES['myFile'];
$maxsize=10485760; //10m
$allowExt=array('jpeg','jpg','tif','png');
$path='uploads-class';
//引入我们封装好的上传函数
include_once 'file_upload.php'; //函数名称
uploadFile($file_info,$path,$maxsize,$allowExt);  //函数内容（见函数文件）
?>