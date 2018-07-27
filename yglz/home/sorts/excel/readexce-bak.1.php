<?
//连接数据库
$servername = "localhost";
$username = "root";
$password = "168168";
$dbname = "excel";
// 创建连接
$conn = @new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}else{
    echo "数据库连接成功".'<br/><br/><br/>';
}

$dir=dirname(__FILE__);//找到当前路径 ,然后木有用
require "../../../../phpexcel/PHPExcel/IOFactory.php"; //引入读取excel的类文件
$filename="../upload/1.xls";
$fileType=PHPExcel_IOFactory::identify($filename);//自动获取文件类型
$objReader=PHPExcel_IOFactory::createReader($fileType);//获取文件读取操作对象
$sheetName=array("Sheet2","Sheet1");  //指定要读取的sheet
$objReader->setLoadSheetsOnly($sheetName);  //传给PHPexcel

//部分加载
$objPHPExcel=$objReader->load($filename);//用objreader加载


//全部加载
// $objPHPExcel=PHPExcel_IOFactory::load($filename); //全部加载文件
// $sheetCount=$objPHPExcel->getSheetCount();  //获取文件里有多少个sheet
// for ($i=0; $i < $sheetCount; $i++) { 
//     $data=$objPHPExcel->getSheet($i)->toArray();//读取每个sheet里的数据，全部放入到数组中
//     print_r($data);
// }   //一次性全部读取


//使用phpexcel自带的迭代器
foreach ($objPHPExcel->getWorksheetIterator() as $sheet) { //循环取sheet
    foreach ($sheet->getrowiterator() as $row) { //逐行处理
        if ($row->getrowindex()<2){  //去掉表头
            continue;
        }
        foreach ($row->getCellIterator() as $cell) { //逐列处理
            $data=$cell->getValue();  //获取单元格数据
            echo $data." ";
        }
        echo '<br/>';
    }
    echo '<br/>';
}
?>