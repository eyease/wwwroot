<?
// header("content-type:text/html:charset=utf-8");
// header('Content-Type:text/plain;charset=utf-8');

session_start();
$id=$_SESSION['username'];


//取得日期信息
$year=$_POST["year"];
$month=$_POST["month"];
$tendays=$_POST["tendays"];
//file_upload.php是封装好的函数，用本文件调用，传入参数
$file_info=$_FILES['myFile'];//取得上传文件的信息
$maxsize=10485760; //10m
$allowExt=array('xls','xlsx');
$path='uploads-sorts';
//引入我们封装好的上传函数
include_once 'file_upload.php'; //函数名称
$des=uploadFile($file_info,$path,$maxsize,$allowExt,$year,$month,$tendays);  //函数内容（见函数文件）
?>