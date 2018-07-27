<?php 
//初始化创建一个数组
$arr=[12,44,'abc'];
$arr1=[0=>12,1=>44,2=>'abc'];


echo '<pre>';
print_r ($arr) ;
print_r ($arr1) ;
echo '</pre>';

$arr=[];
//第一行语句，赋值的同时，创建数组
$arr['name']='php';
//第二行起，向数组中添加元素
$arr['domain']='www.php.cn';

echo '<pre>';
print_r ($arr) ;
print_r ($arr['name']) ;
echo '</pre>';
echo '<hr>';


$arr=[];//先创建空数组，再添加原素
$arr[]=10;
$arr[1]=20;
$arr[]=30;
echo '<pre>';
print_r ($arr) ;
print_r ($arr[2]) ;
echo '</pre>';
 ?>