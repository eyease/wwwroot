<?php 
//$GLOBALS 全局变量数组
$siteName='PHP中文网';
echo $siteName;
echo "<br>";
echo $GLOBALS['siteName'];//以上两种输出是一样的

//$_SERVER  服务器和当前执行环境的信息
// echo "<pre>";
// print_r ($_SERVER );
// echo "</pre>";

//$_GET用法  //http://localhost:8888/chapter1/var_globals.php?name=peter&age=20
/*echo "<pre>";
print_r ($_GET);
echo "</pre>";

echo $_GET['name']; //空格用‘+’来表示*/
//GET方法受浏览器限制，长度有限制，而且密码等信息不适合这样传递


echo "<pre>";
print_r ($_POST);
echo "</pre>";

$register=<<<'FORM'
<form action="" method="post"> 
	<label for="name">姓名</label>
	<input type="text" name="name" id="name">
	<label for="pwd">密码</label>
	<input type="password" name="pwd" id="pwd">
	<input type="submit" value="提交">
</form>

FORM;
//必需的 action 属性规定当提交表单时，向何处发送表单数据。
echo $register;

?>