<?php 
//面向对象编程是编程思想，不是技术
//掌握基本语法，编程思想
//面向对象最重要的概念就是类与对象
//类是对象的模板，对象是类的一个实例
class Demo{
	//属性和方法
	//属性的声明必须以访问控制符开头
	public $name='php';//公共属性，外部可以访问的
	//属性访问控制符:public ，private 和protected
	private $age=20;//私有属性，只允许类中的访问调用
	protected $sex='male';//保护属性，仅允许本类或子类调用

	//属性类型支持：标量（整数，浮点，字符串，布尔值），复合类型：数组和对象
	//方法：方法也必须也访问控制符开头：public ，private 和protected
	public function getName()
	{
		//$this是伪变量，总是指向当前对象
		return $this->name;
	}
	public function getAge(){
		return $this->age;
	}
}

//创建对象的过程，就是类的实例化

$obj=new Demo();//$obj就是类DEMO的实例
//类必须实例化，才可以访问里面的属性和方法
echo $obj->name;//用对象访问运算符（->）来直接访问属性
echo '<hr>';
echo $obj->getName();//用对象访问运算符（->）来访问方法
echo '<br>';
//echo $obj->age;//private定义的属性是不能在外部访问的 因此要用下面的方法
echo '年龄是：'.$obj->getAge();
echo '<br>';
echo '<hr>';

//对象是一个引用变量，我们对对象的赋值并没有创建新的对象，而是创建一个当前对象的引用
$obj2=$obj;
if ($obj2===$obj) {
	echo '相等';
}else{
	echo '不相等';
}
echo '<br>';
echo get_class($obj);
echo get_class($obj2);//都是从Demo类创建的
echo '<hr>';
echo $obj2->name;//和$obj是一样的

//如果在类的外部访问属性和方法，可以直接用对象
//如果在类的内部访问属性或方法，必须使用伪变量$this(虚拟引用)

 ?>


