<?php 
echo "字符串如何转换为浮点数";
var_dump(floatval('12.35'));
echo "<hr>";
echo "布尔型转换成浮点数";
var_dump(floatval(true));
var_dump(floatval(false));
echo "<hr>";
echo "整数转为浮点数<br>";
var_dump(floatval(15));
echo "<hr>";
//浮点数之间的比较
$a=1.23456789;
$b=1.23456780;
$epsilion=0.00001;
if (abs($a-$b)<$epsilion ){
	echo '相等';
	}else{
		echo '不相等';
	}

 ?>