<?php 



// array_push(array, var)  入栈，返回值是数组的当前长度
// array_pop(array)出栈，返回当前弹出的元素值
$arr=['name'=>'peter','age'=>28,'sex'=>'male'];
// array_push($arr, 'ism','fff',['元素1','元素2'],'aaa');
echo '当前数组长度是'.array_push($arr, 'ism','fff',['元素1','元素2'],'aaa');
// asort($arr);
echo '<pre>';
print_r($arr);//入栈的元素，总是数字索引
echo '</pre>';


echo '当前出栈的元素是'.array_pop($arr).'<br>';  //后进先出   对  ，就是先进后出     算了，就按从后往前理解  
echo '当前出栈的元素是';  //从尾部删除
print_r(array_pop($arr));
echo '<hr>';

echo '当前数组长度是'.count($arr);
 ?>