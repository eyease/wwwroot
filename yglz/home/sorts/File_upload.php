<?php
function uploadFile($file_info,$path="uploads",$maxsize=10485760,$allowExt=array('jpeg','jpg','tif','png')){  //封装file_info,path,maxsize,allowExe  作为类来使用
    // header("content-type:text/html:charset=utf-8");
    header('Content-Type:text/plain;charset=utf-8');
    //文件处理程序
    //$_FILES文件上传变了

    // echo"<pre>";
    // var_dump($_FILES);
    // exit;
    // echo"</pre>"

    //处理上传文件
    // $file_info=$_FILES["myFile"];

    $file_name=$file_info["name"];//不同的方法取得文件名
    $file_type=$file_info["type"];
    $file_tmp_name=$file_info["tmp_name"];
    $file_size=$file_info["size"];
    $file_error=$file_info["error"];
    // $file_name=$_FILES['myFile']['name'];
    // $file_type=$_FILES['myFile']['type'];
    // $file_tmp_name=$_FILES['myFile']['tmp_name'];
    // $file_size=$_FILES['myFile']['size'];
    // $file_error=$_FILES['myFile']['error'];

    //服务器端设定限制
    // $maxsize=10485760; //10m
    // $allowExt=array('jpeg','jpg','tif','png');
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);//提取上传文件的扩展名 

    //目标存放文件夹
    // $path='uploads';
    if (!file_exists($path)) {  //当目录不存在，就创建
        mkdir($path,0777,true);
        chmod($path,0777); //所有人都有rwe权限
    }

    //得到唯一的文件名，防止因重名而覆盖
    $uniName=md5(uniqid(microtime(true),true)).".$ext"; //MD5加密 ，uniqid产生唯一id，microtime做前缀
    $destination=$path."/".$uniName; //目标存放文件地址

    //当文件上传成功，存入临时目录 ，服务器开始判断
    if ($file_error===0) {
        if ($file_size>$maxsize) {
            exit("上传文件过大");
        }
        if (!in_array($ext,$allowExt)) {
            exit("非法文件类型");
        }
        if (!is_uploaded_file($file_tmp_name)) {
            exit("上传方式有误，请使用POST方法");
        }
        if (!getimagesize($file_tmp_name)) {
            exit("不是真正的图片类型");
        }
        //错误判断，报告原因
        if (@move_uploaded_file($file_tmp_name,$destination)) {   //用@抑制错误，不让用户看到警告
            echo "文件".$file_name."上传成功！"."\n\n";
            // echo "\n";
        }else {
            echo "文件".$file_name."上传失败！"."\n\n";
        }
    }else{
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
    return $destination;  //用封装就要return,返回最终存放的结果
}



?>