<?php 

if (@$_GET['action']=='login'){
	if ($_POST['name']=='admin' && $_POST['pwd']=123456) {
		setcookie('userNmae',$_POST['name'],time()+3600*24);
		header('Location:index.php');
	}else{
		echo '<script>alert("用户名或密码错误");</script>';
	}
}elseif (@$_GET['action']=='logout') {
	setcookie('name','',time()-3600);//注销cookie
}	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登陆</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>?action=login" method="post">
		<fieldset><!-- 表单域名-->
			<legend>用户登陆</legend>	
			<label for="name">用户名：</label>
			<input type="text" name="name" id="name">
			<label for="密码">密码：</label>
			<input type="password" name="pwd" id="pwd">
			<input type="submit" value="提交">
		</fieldset>
	</form>
</body>
</html>