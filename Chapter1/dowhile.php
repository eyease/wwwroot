<?php 
//while循环是先判断再循环
//do while是先循环，再判断
//循环至少执行一次的时候，dowhile还是很有用的

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
 do { 
	echo '<tr>';
	$j=0; 
	do { 
		echo '<td>'.($i*$cols+$j).'</td>';//其中的内容在实践中都来自于数据库
		 $j++;
	}while ($j <$cols) ;
	echo '</tr>';
	 $i++;
}while ($i <$rows);
echo '</table>';
 ?>