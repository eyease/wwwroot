<?php 
$name =[  //使用array(),或者[]来创建数组
		0=>'哈哈',
		1=>'嘻嘻'
];
$arr =[0=>10,1=>20,2=>30];
$arr1 =[10,20,30];
var_dump($name);
echo "<hr>";
var_dump($arr);
echo "<hr>";
var_dump($arr1);
echo "<hr>";
//输出数组一般用print_r
print_r($arr);
echo "<hr>";
print_r($arr1);

//键名主要为两类，整数为索引数组，字符串为关联数组  ；如果不是这两种，将会强制转换
//实际上PHP并不区分索引和关联数组，实际使用中却是非常必要的，因为我们从数据库中取得的数据，通常都是关联数组
echo "<hr>";
$arr =[true=>10,1.9=>20,false=>332,0.3=>'peter'];
$arr2=['id'=>101,'name'=>'peter','age'=>28];
$arr3=['id'=>101,'name'=>'peter','age'=>28,9=>44];
print_r($arr);
echo "<hr>";
print_r($arr2);
echo "<hr>";
print_r($arr3);
echo "<hr color=red>";


$obj= new StdClass();
$obj->name ='Jack';//可以是对象
$arr=[//数据可以嵌套
	'name'=>'peter',
	'age'=>28,
	'language'=>['html','css','js'],
	'user'=>$obj
];
print_r($arr);
echo "<hr>";
print_r($arr['user']->name);//可以访问数组中的对象里的值
echo "<hr>";
var_dump($arr['age']);//用[]和{都可以访问数组中的键值
echo "<hr>";
print_r($arr{'age'});//用[]和{都可以访问数组中的键值

echo "<hr color=red>";
//更新数组时，根据键名来确定：不指定就是追加，指定则更新，指定而不存在就是创建
$arr=['html','css','javascript'];
$arr[]='php';
 //$arr[2]='java';
$arr[6]='java';
print_r($arr);

//unset函数  删除
echo "<hr color=red>";
$arr=['id'=>10 ,'name'=>'peter','age'=>28];
unset($arr['name']);//删除name
print_r($arr);
echo "<hr >";
//清空整个数组，但数组仍然在
foreach ($arr as $key => $value) {
	unset($arr[$key]);
}
print_r($arr);
 $arr[]=10;
 $arr[]=20;
 $arr[]=30;
print_r($arr);


echo "<hr color=rad>";
$arr=[0=>10,1=>20,3=>30,4=>40,5=>50];
print_r($arr);
unset($arr[1]);//删除第二个元素
echo "<hr>";
print_r($arr);
echo "<hr>";
print_r(array_values($arr));
$newArr=array_values($arr);//重建数组索引
echo "<hr>";
print_r($newArr);

echo "<hr color=red>";
$arr=[1,2,3,4,5];
foreach ($arr as $key => $value) {//将数组元素键值对分别复制到$key和$value中
	echo $key.'=>'.$value.'<br>';

}

 ?>
