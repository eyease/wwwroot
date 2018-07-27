<?php 
// session和cookie比较像，但session是保存在服务器上
session_start();//打开一个会话，在客户端浏览器上创建一个session_id
echo session_id();
echo "<br>";
$_SESSION['userName']='peter';
$_SESSION['domin']='www.php.cn';
echo $_SESSION['userName'];    //userName|s:5:"peter";domin|s:10:"www.php.cn";   session文件中的内容
unset($_SESSION['userName']);
session_destroy();//服务器上的session文件被删除了  可以实现购物车系统
 ?>