<?php 
/*if (true) {  //如果判断条件为真，则打广告{内的内容
	}
*/

echo <<<'FROM'
	<form action="" method="post">
		<fieldset><!-- 表单域名-->
			<legend>输入一个整数</legend>	
			<input type="number" name="num" id="num">
			<input type="submit" value="提交">
		</fieldset>
	</form>
FROM;
//先测试一下是否能接收到以表单POST过来的数据
//echo $_POST['num'];
echo "<br>";

if (isset( $_POST['num']) and $_POST['num']!=null) {
		if ($_POST['num']%2==0) {
		echo $_POST['num'].'是一个偶数';
	}else{
		echo $_POST['num'].'是一个奇数';
	}
}else{
	echo '请输入一个有效的数字';
}
	 ?>