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
	<title>Sorts</title>
	<link rel="stylesheet" href="css/zd-1.0.css">
	<script src="js/echarts.min.js"></script>
</head>
<body>


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

