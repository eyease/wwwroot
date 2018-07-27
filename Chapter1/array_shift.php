<?php 
//队列：后进先出，最后添加的数据，最先出队      我觉得是叫先进先出   算了，就按从前往后理解
//入队：数组头部：array_unshift(),出队array_shift()


$arr=['name'=>'peter','age'=>28,'sex'=>'male'];
echo '出队元素是:'.array_shift($arr).'<br>';//从头部删除
echo '出队元素是:'.array_shift($arr).'<br>';
echo '出队元素是:'.array_shift($arr).'<br>';
echo '当前数组长度:'.count($arr);

//从尾部入队
array_push($arr, 'php','mysql');
echo '<pre>';
print_r($arr);
echo '</pre>';

//从头部入队：array_unshift()
array_unshift($arr, 'html','css');
echo '<pre>';
print_r($arr);
echo '</pre>';
echo '当前数组长度:'.count($arr);


/*// array_push(array, var)  入栈，返回值是数组的当前长度
// array_pop(array)出栈，返回当前弹出的元素值
$arr=['name'=>'peter','age'=>28,'sex'=>'male'];
// array_push($arr, 'ism','fff',['元素1','元素2'],'aaa');
echo '当前数组长度是'.array_push($arr, 'ism','fff',['元素1','元素2'],'aaa');
// asort($arr);
echo '<pre>';
print_r($arr);//入栈的元素，总是数字索引
echo '</pre>';


echo '当前出栈的元素是'.array_pop($arr).'<br>';  //后进先出   对  ，就是先进后出
echo '当前出栈的元素是';  //后进先出
print_r(array_pop($arr));*/
 ?>