<?php 
if (!isset($_COOKIE['userNmae'])){
	header('Location:login.php');
}else{
	echo '学员'.$_COOKIE['userNmae'].'欢迎回来'.'<br>';
	echo '<h3>PHP中文网</h3>';
}

if (@$_GET['action']=='login'){ //用@表示这行有错误或是警告不要输出
	if (@$_POST['name']=='admin' && $_POST['pwd']=123456) {
		setcookie('userNmae',$_POST['name'],time()+3600*24);
		header('Location:index.php');
	}else{
		echo '<script>alert("用户名或密码错误");</script>';
	}
}elseif (@$_GET['action']=='logout') {
	setcookie('userNmae','',time()-3600);//注销cookie
	header('Location:login.php');
}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>退出</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>?action=logout" method="post">
		<fieldset><!-- 表单域名-->
<!-- 			<legend>用户登陆</legend>	
<label for="name">用户名：</label>
<input type="text" name="name" id="name">
<label for="密码">密码：</label>
<input type="password" name="pwd" id="pwd"> -->
			<input type="submit" value="退出">
		</fieldset>
	</form>
</body>
</html>

