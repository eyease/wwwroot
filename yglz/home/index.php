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
<!-- <script type="text/javascript">
function loadXMLDoc(){
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","./sorts_in.php",true);
xmlhttp.send();
}
</script> -->
<script src="./js/echarts.min.js"></script>
<script src="../login/js/jquery-1.10.2.js"></script>
<script src="js/nav.js"></script>
<!-- <script src="js/nav1.js"></script> -->
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
					<li><a href="#" onclick="loadXMLDoc()">One</a></li>
					<li><a href="#">Two</a></li>
				</ul>
		</li>
		<li>
			<a href="" class="">清分数据核对<div class="carect"></div></a>
				<ul class="menu">
					<li id="qf"><a href="#" onclick="upLoad()">清分数据文件上传</a></li>
					<li><a href="#">古城寨二义性文件上传</a></li>
					<li><a href="#">仁和二义性文件上传</a></li>
				</ul>
		</li>
		<li><a href="#">清分核对结果</a></li>
		<li id="txf"><a href="txf.php" >通行费报表</a></li>
		<li><a href="#">查漏补缺</a></li>
		<li><a href="#">信息报送</a></li>
		
                  
	</ul>
</nav>


 <div id="myDiv"><h3 style="text-align: center;line-height: 200px">什么都木有<br><br></h3></div>

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

