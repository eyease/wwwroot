<?php 
//保留原键名排序


$arr1=[32,3,455,14,1];
$arr2=['name'=>'peter','age'=>'lala','isMarr'=>'arue'];
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
asort($arr1);
asort($arr2);

echo '<hr>';
echo '排序后';
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';

echo '<hr>';
echo '反向排序后';
arsort($arr1);
arsort($arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
 ?>