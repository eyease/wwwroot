<?
// header("Content-Type:text/html;charset=utf-8");
// header('Content-Type:text/plain;charset=utf-8');

set_time_limit(0); 
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


require "../../../../phpexcel/PHPExcel/IOFactory.php"; //引入读取excel的类文件
$filename="../upload/1.29.xlsx";
//实例化PHPExcel类
$objPHPExcel = new PHPExcel();
//默认用excel2007读取excel，若格式不对，则用之前的版本进行读取
$PHPReader = new PHPExcel_Reader_Excel2007();
if (!$PHPReader->canRead($filename)) {
    $PHPReader = new PHPExcel_Reader_Excel5();
    if (!$PHPReader->canRead($filename)) {
        echo 'no Excel';
        return;
    }
}
//读取Excel文件
$PHPExcel = $PHPReader->load($filename);
//读取excel文件中的第一个工作表
$sheet = $PHPExcel->getSheet(0);
//取得最大的列号
$allColumn = $sheet->getHighestColumn();
//取得最大的行号
$allRow = $sheet->getHighestRow();

echo $allColumn;
echo $allRow;

//从第2行开始插入
for ($currentRow = 2; $currentRow <= $allRow; $currentRow++) {
    //获取B列的值
    $number = $PHPExcel->getActiveSheet()->getCell("B" . $currentRow)->getValue();
    $insite = $PHPExcel->getActiveSheet()->getCell("C" . $currentRow)->getValue();
    $indate = $PHPExcel->getActiveSheet()->getCell("D" . $currentRow)->getValue();
    $outsite = $PHPExcel->getActiveSheet()->getCell("E" . $currentRow)->getValue();
    $outdate = $PHPExcel->getActiveSheet()->getCell("F" . $currentRow)->getValue();
    $money = $PHPExcel->getActiveSheet()->getCell("R" . $currentRow)->getValue();

    // echo $number.'<br/>';
    // echo $insite.'<br/>';
    // echo $outsite.'<br/>';

    //插入数据
    $sql = "INSERT INTO sorts (number, insite, indate, outsite,outdate,money) VALUES ('$number','$insite','$indate','$outsite','$outdate','$money')";
    // if ($conn->query($sql) === TRUE) {
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}
echo '导入成功!';
//关闭数据库连接
$conn->close();
?>