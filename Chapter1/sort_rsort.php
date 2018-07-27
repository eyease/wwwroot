<?php 
// sort(array)  元素按值的大小从小到大重新排序，根据排序后的顺序，键名重新生成
// rsort(array)  元素按值的大小从大到小重新排序，根据排序后的顺序，键名重新生成
$arr1=[32,3,455,14,1];
$arr2=['name'=>'peter','age'=>'lala','isMarr'=>'arue'];
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
sort($arr1);
sort($arr2);

echo '<hr>';
echo '排序后';
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';

echo '<hr>';
echo '反向排序后';
rsort($arr1);
rsort($arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';

echo '<hr>';
$arr1=[32,3,455,14,1];
$arr2=['name'=>'peter','age'=>'lala','isMarr'=>'arue'];
echo '按键名排序后';
ksort($arr1);
ksort($arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';

echo '<hr>';
echo '按键名反向排序后';
krsort($arr1);
krsort($arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
 ?>