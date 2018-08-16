<?
// header("content-type:text/html:charset=utf-8");
header('Content-Type:text/plain;charset=utf-8');

session_start();
$id=$_SESSION['username'];

//取得上传选择的日期信息
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
uploadFile($file_info,$path,$maxsize,$allowExt,$year,$month,$tendays);  //函数内容（见函数文件）

// echo "<script>alert('完成，请返回主页');window.location.href='../home.php';</script>";


?>

// <script>window.location.href='../home.php'</script>

// <script type="text/javascript">

// window.location.href="helloworld.php"          

// </script>
