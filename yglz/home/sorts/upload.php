<?php
// header("content-type:text/html:charset=utf-8");
header('Content-Type:text/plain;charset=utf-8');
//文件处理程序
//$_FILES文件上传变了

// echo"<pre>";
// var_dump($_FILES);
// exit;
// echo"</pre>"

//处理上传文件
$file_name=$_FILES['myFile']['name'];
$file_type=$_FILES['myFile']['type'];
$file_tmp_name=$_FILES['myFile']['tmp_name'];
$file_size=$_FILES['myFile']['size'];
$file_error=$_FILES['myFile']['error'];

//将服务器上的临时文件，移到指定位置
move_uploaded_file($file_tmp_name,"upload/".iconv("UTF-8", "gbk",$file_name));//移动临时文件到指定位置，命名为原文件名

//错误判断，报告原因
if ($file_error===0) {
    echo "上传成功！";
}else {
    switch ($file_error) {
        case 1:
            echo "超过上传文件的最大值，请上传XX以下的文件";//在PHP.INI中设置一下
            break;
        case 2:
            echo "上传文件过多！";
            break; 
        case 3:
            echo "文件未完成上传";
            break; 
        case 4:
            echo "未选择文件";
            break; 
        case 5:
            echo "上传文件为0";
            break; 
        
    }
}
?>