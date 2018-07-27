<?php
$dir=__DIR__;//找到当前脚本所在路径
//echo $dir."/phpexcel/phpexcel.php";
require $dir."/phpexcel/phpexcel.php";//引入文件

$objphpexcel= new phpexcel();//实例化phpexcel类，赞同于在桌面上新建一个excel文件
$objsheet=$objphpexcel->getactivesheet();//获得当前活动sheet的操作对象
$objsheet->settitle("demo");//给当前活动SHEET设置名称
/*$objsheet->setcellvalue("a1","姓名")->setcellvalue("b1","分数");//给当前活动sheet填充数据
$objsheet->setcellvalue("a2","开开")->setcellvalue("b2","99");//给当前活动sheet填充数据*/

$array=array(  //最外面这个数组可以看做是整个sheet表
		array(),//第一行空行
		array("","姓名","分数"),//""表示第一列空列
		array("","dd","60"),
		array("","kk","70")
);//并在推荐在大数据时使用数组方法，耗内存，也不能设置样式

$objsheet->fromArray($array);//直接加载数据块来填充数据

$objWriter=PHPExcel_IOFactory::createwriter($objphpexcel,"excel2007");//按照指定格式生成Excel文件
$objWriter->save($dir."/demo1.xlsx");//保存文件

echo "Excel文件生成完毕";
?>