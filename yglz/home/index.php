<?php 
         session_start();
         $id=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/zd-1.0.css">
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
                   <li><a href="../logout.php">退出登录</a></li>
		<li>
			<a href="index.php" class="active">首页<div class="carect"></div></a>
				<ul class="menu">
					<li><a href="index.php">One</a></li>
					<li><a href="index.php">Two</a></li>
				</ul>
		</li>
		<li>
			<a href="" class="active">清分数据核对<div class="carect"></div></a>
				<ul class="menu">
					<li><a href="sorts.php">清分数据文件上传</a></li>
					<li><a href="">古城寨二义性文件上传</a></li>
					<li><a href="">仁和二义性文件上传</a></li>
				</ul>
		</li>
		<li><a href="sortstemp.php">清分核对结果</a></li>
		<li><a href="txf.php">通行费报表</a></li>
		<li><a href="">查漏补缺</a></li>
		<li><a href="">信息报送</a></li>
		
                  
	</ul>
</nav>
<h3 style="text-align: center;line-height: 200px">什么都木有<br><br></h3>
 

</body>
<script src="../login/js/jquery-1.10.2.js"></script>
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

