<?
header('Content-Type:text/plain;charset=utf-8');
include_once 'file_upload.php';
foreach($_FILES as $file_info){
    $file[]= uploadFile($file_info);
}
?>