<?php 
//call_user_fuc_array()自定义回调函数的函数
//它提供了另一种调用函数的解决方案
class demo{
	static function func1($site,$lang)
	{
		return '我在'.$site.'学习'.$lang.'编程';//静态方法
		//声明类属性或方法为静态，就可以不实例化类而直接访问。静态属性不能通过一个类已实例化的对象来访问（但静态方法可以）。
	}
		public function func2($site,$lang)//普通方法
	{
		return '我在'.$site.'学习'.$lang.'编程';
	}
}

echo call_user_func_array(['demo','func1'],['PHP中文网','php']);//在调用类时，先写【类、函数】，后写【参数】
echo '<hr>';
echo call_user_func_array([(new demo),'func2'],['PHP中文网','js']);//调用普通方法，先new
 ?>