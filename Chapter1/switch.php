<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>lang</title>
</head>
<body>
	
</body>
</html>

<?php 
//switch case值
//根据用户的语言名称，打印出对应的语言说明

echo <<<'lang'
		<form action="" method="post">
			<datalist id='lang'>
				<option value="html"></option>
				<option value="css"></option>
				<option value="php"></option>
				<option value="javaScript"></option>
			</datalist>
			<label for="lang">我正在学习的课程是：</label>    
			
			 <!-- for 属性规定 label 与哪个表单元素绑定。 id
			 隐式和显式的联系
			标记通常以下面两种方式中的一种来和表单控件相联系：将表单控件作为标记标签的内容，这样的就是隐式形式，或者为 <label> 标签下的 for 属性命名一个目标表单 id，这样就是显式形式。<label>Date of Birth: <input type="text" name="DofB" /></label> -->

			<input type="text" name="lang" id="lang" list="lang">
			<input type="submit" value="提交">

		</form>
lang;

// echo $_POST['lang'];
if (@$_POST['lang']!=null) {
	switch ( @$_POST['lang']) {
	case 'html':
		echo "html是超文本标记语言，适合写网页结构";
		break;
	case 'css':
		echo "css是网页样式表，负责控制元素的显示";
		break;
	case 'php':
		echo "php是服务器端的脚本语言";
		break;
	case 'javaScript':
		echo "javaScript是客户端的脚本语言，控制网友行为与用户交互";
		break;
	default:
		echo  @$_POST['lang']."是一种新的语言";
		break;
	}
}else{
	echo "<h3>请输入内容</h3>";
}



 ?>