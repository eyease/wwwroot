<?php
$is_ok=true;
echo   gettype($is_ok);
echo  '<hr>';
//布尔值在流程控制中的应用
if  ($is_ok){
	echo 'ok';
}else{
	echo 'bad';
}

//哪些值可以转换为布尔类型的值？？
echo  '<hr>';
echo false;
var_dump((bool)0);//0可以转换成false
var_dump((bool)'');//空字符串可以转换成false
var_dump((bool)null);//null串可以转换成false
var_dump((bool)'0');//字符串'0'也可转换成False
var_dump((bool)'00');//单字符0可以转换成False，其他不可以
echo  '<hr>';
var_dump((bool)[]);//空数组可以转换成False
echo  '<hr color="red">';
