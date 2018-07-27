<?php 
//算术运算符
echo 12+5;
echo "<hr>";
echo 43/444;
echo "<hr>";
echo 60%17;//60/17 w余数是9
echo "<hr>";
$num=10;
echo $num--;//变量才能自增减
echo "<hr>";
echo $num;
echo "<hr>";
//字符串运算符
echo 'PHP中文网'.'www.php.cn'  ; // . 可以连接字符串  和变量

// $num +=10  就等于$num  =$num +10    +-*/都可以
echo  "<hr color=red>";
//比较运算符，又叫关系运算符  返回值是布尔类型
var_dump(15>6);
echo "<hr>";
var_dump('php'=='p7hp');//一个等号是赋值
echo "<hr>";
var_dump('100'==100);//只比较值
echo "<hr>";
var_dump('100'===100);//比较值和类型，叫全等
echo "<hr>";
var_dump('100'<>100);//这样也只比较了值
echo "<hr>";
var_dump('100'!==100);//这样也只比较了值

echo  "<hr color=red>";
//逻辑运算符   只能操作BOOL  只有三种：逻辑与，或，非
var_dump((20==19)&&(30>20));//真和假的 与运算 ，还是假
var_dump((20==19)||(30>20));//真和假的 或运算 ，是真
var_dump(!(20==19)||(30>20));//非运算，就是取反
 ?>