<?php 
class Student { //创建对象前先创建一个类
	public $name='peter';
	public $age=18;
	public $sex='男';

	public function getInfo()
	{
		return '我的姓名是：'.$this->name.','.'<br>'.'年龄是：'.$this->age.',性别是：'.$this->sex;
	}
 }

 $obj=new  Student;//new一下这个类，就可以创建一个对象
 echo $obj->name;
 echo "<hr>";
 echo $obj->age;
 echo "<hr>";
 echo $obj->sex;
 echo "<hr>";
echo $obj->getInfo();
 echo "<hr color=red>";

$obj= new stdClass();//php内置标准类stdClass
$obj->name='PHP中文网';
$obj->sever=function(){
	return '永久免费的一站式学习平台';
};

echo  $obj->name;
echo "<hr>";
//echo $obj->sever(); //方法不能用这种方式访问到
echo call_user_func($obj->sever); //sever只作为标识符，不加()
echo "<hr>";


//数组转换为对象
$arr=[1,2,3,4,5];
print '<pre>';
// print_r((object)[10,20,'php']);
print_r((object)$arr);
print '</pre>';

print_r((object)'PHP中文网');//stdClass Object ( [scalar] => PHP中文网 )   
print_r((object)150);//stdClass Object ( [scalar] => 150 )   
echo "<hr>";
print_r((object)null);//stdClass Object ( ) 

?>