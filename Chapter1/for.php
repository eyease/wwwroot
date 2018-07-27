<?php 
//循环求和
$sum=0;
for ($i=0; $i <10 ; $i++) { 
	$sum+=$i;
}//for语句非常适合在循环变量已知的情况下的重复操作
 echo $sum;

 //表格自动生成器
 echo <<<'form'
 <h2>表格自动生成器</h2>
<form action="" method="post">
	<fieldset><!-- 表单域名-->
请输入：
		<input type="number" name="row" id="row">
		<input type="number" name="col" id="col">
		<input type="submit" value="提交">
	</fieldset>
</form>
form;

$rows=isset($_POST['row']) ? $_POST['row']:0;
$cols=isset($_POST['col']) ? $_POST['col']:0;
echo '<table border="1" cellspacing="1" cellpadding="10">';
for ($i=0; $i <$rows ; $i++) { 
	echo '<tr>';
	for ($j=0; $j <$cols ; $j++) { 
		echo '<td>'.($i*$cols+$j).'</td>';//其中的内容在实践中都来自于数据库
	}
	echo '</tr>';
}
echo '</table>';


?>