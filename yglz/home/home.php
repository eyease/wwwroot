<?php 
         session_start();
		 $id=$_SESSION['username'];
		 if ($id==null) {
			echo "<script>alert('验证错误，请返回登录');window.location.href='../login/login.html';</script>";
		 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Secret System</title>
	<link rel="stylesheet" href="css/zd-1.0.css">
	<script src="./js/echarts.min.js"></script>
	<script src="../login/js/jquery-1.10.2.min.js"></script>
	<script src="js/nav.js"></script>
</head>
<body>
<nav>
	<!-- logo -->
	<div class="nav-logo">
		<a href="###"><img src="img/yglz.png" alt=""></a>
	</div>

	<!-- 控制menu -->
	<div class="nav-menu">
		<span>1</span>
		<span>2</span>
		<span>2</span>
	</div>

	<!-- 菜单 -->
	<ul class="nav-list">
                   <li ><?php echo $id;?></li>
                   <li id=logout><a href="#">退出登录</a></li>
		<li id="index">
			<a href="home.php" class="active">首页<div class="carect"></div></a>
				<ul class="menu">
					<li id="one"><a href="#">One</a></li>
					<li id="two"><a href="#">Two</a></li>
				</ul>
		</li>
		<!-- <li id="sfjx"><a href="#">收费员绩效考核</a>
			<ul class="menu">
				<li id="kq"><a href="#">绩效考勤</a></li>
				<li id="ri"><a href="#">日段报</a></li>
				<li id="user"><a href="#">身份证维护</a></li>
			</ul>
		</li> -->
		<li>
			<a href="" class="">收费员绩效考核<div class="carect"></div></a>
				<ul class="menu">
					<li id="kq"><a href="#">绩效考勤</a></li>
					<li id="ri"><a href="#">日段报</a></li>
					<li id="userdb"><a href="#">身份证维护</a></li>
				</ul>
		</li>

		<li>
			<a href="" class="">清分数据核对<div class="carect"></div></a>
				<ul class="menu">
					<li id="qf"><a href="#">清分数据文件上传</a></li>
					<li id="ambba"><a href="#">古城寨二义性文件上传</a></li>
					<li id="ambren"><a href="#">仁和二义性文件上传</a></li>
				</ul>
		</li>
		<!-- <li id="qfkd"><a href="#">清分核对结果</a></li> -->
		<li id="txf"><a href="txf.html" >通行费数据</a></li>
		<li id="clbq"><a href="#">查漏补缺</a></li>
		<li id="message"><a href="#">信息报送</a></li>
		
		
                  
	</ul>
</nav>

<!-- 显示区域 -->
 <div id="myDiv"><h3 id="mydivtext" style="text-align: center;line-height: 200px">又不是不能用<br><br></h3></div>

</body>

<script>
	$(document).click(function(){
		$('.nav-list').removeClass('open')
	})
	$('.nav-menu,.nav-list').click(function(e){e.stopPropagation()})
	$('nav').find('.nav-menu').click(function(e){
		$('.nav-list').toggleClass('open')
	})
</script>
</html>

