<?php 

//1 循环初始条件放在外面
//2 条件表达式返回为true时执行，有可能一次也不执行
//3 循环体内必须有更新循环条件的语句，否则有可能进行死循环

//很多时候我们对循环次数并不清楚，因此不能使用for，因此while循环也是使用最多的
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
$i=0; 
while ($i <$rows) { 
	echo '<tr>';
	$j=0; 
	while ($j <$cols) { 
		echo '<td>'.($i*$cols+$j).'</td>';//其中的内容在实践中都来自于数据库
		 $j++;
	}
	echo '</tr>';
	 $i++;
}
echo '</table>';
 ?>