<?
// header("Content-Type:text/html;charset=utf-8");
// header('Content-Type:text/plain;charset=utf-8');
//连接数据库
$servername = "localhost";
$username = "root";
$password = "168168";
$dbname = "sorts";
// 创建连接
$conn = @new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}else{
    echo "数据库连接成功".'<br/><br/><br/>';
}

$set=mysqli_query($conn,"SET @i=0");
$renumber=mysqli_query($conn,"UPDATE sorts6_copy SET 序号=(@i:=@i+1)");//重新编制序号

if ($set=true && $renumber=true) {
    echo '成功更新序号,正在进行数据比对';
}
echo '<br/>';
echo '<br/>';


$sql="select * from sorts6_copy";//sql语句
$result=mysqli_query($conn,$sql);//执行SQL语句返回的结果
$num=mysqli_num_rows($result);//统计执行结果影响的行数 这里表示该表的记录总数

//程序运行时间
$starttime = explode(' ',microtime());
// echo microtime();


// for ($i=1; $i <$num+1 ; $i++) {  //根据重新编制的序号，逐条执行
//     echo "这是第.$i.条记录";
//     echo '<br/>';
// }
   
   

for ($i=1 ; $i <=$num ; $i++) {
    // $i=32678; 
    $sql="select * from sorts6_copy where 序号={$i}";
    $result=mysqli_query($conn,$sql);
    $data=$result->fetch_all(MYSQLI_ASSOC);//$data 查询结果数组 
    $tag=$data[0]['车牌'];
    $indate=$data[0]['入口时间'];
    $outdate=$data[0]['出口时间'];
    $id=$data[0]['序号'];
    echo '<br/>';
    // echo '入口时间是'.$indate.'  出口时间是'.$outdate;


    echo '<br/>';
    echo $data[0]['序号'];
    echo '----------';
    echo $data[0]['车牌'];
    echo '----------';
    echo $data[0]['入口站'];
    echo '----------';
    echo $data[0]['出口站'];
    echo '----------';
    echo $data[0]['入口时间'];
    echo '----------';
    echo $data[0]['出口时间'];

    if ($i==1) {//新建数据表
        $sql="select * from sorts6_copy left outer join ambba on ambba.tag='{$tag}' and '{$indate}'<ambba.date and  ambba.date<'{$outdate}' where 序号='{$id}' and ambba.tag<>'null'";
        $result=mysqli_query($conn,$sql);
        // $num1=mysqli_num_rows($result);
            if (mysqli_num_rows($result)>0) {//先判断拔山二义性是否有数据
                $sql="create table sorts6_point as select * from sorts6_copy left outer join ambba on ambba.tag='{$tag}' and '{$indate}'<ambba.date and  ambba.date<'{$outdate}' where 序号='{$id}' and ambba.tag<>'null'";//如有则创建表并写入数据
                $result=mysqli_query($conn,$sql);
                echo "数据库创建成功，开始处理数据";
                // continue;//跳出本次循环
            }else {
                $sql="create table sorts6_point as select * from sorts6_copy left outer join ambren on ambren.tag='{$tag}' and '{$indate}'<ambren.date and  ambren.date<'{$outdate}' where 序号='{$id}' and ambren.tag<>'null' ";
                $result=mysqli_query($conn,$sql);//拔山二义性无数据，则判断仁和是否有数据，并写入数据库

                echo '<br/>';
                echo '<br/>';
                if ($result) {
                    echo "数据库创建成功，开始处理数据";
                    }
                } 
    }else {  //已建立数据表
        $sql="select * from sorts6_copy left outer join ambba on ambba.tag='{$tag}' and '{$indate}'<ambba.date and  ambba.date<'{$outdate}' where 序号='{$id}' and ambba.tag<>'null'";
        $result=mysqli_query($conn,$sql);
        // $num1=mysqli_num_rows($result);
            if (mysqli_num_rows($result) >0) {//先判断拔山二义性是否有数据
                $sql="insert into sorts6_point select * from sorts6_copy left outer join ambba on ambba.tag='{$tag}' and '{$indate}'<ambba.date and  ambba.date<'{$outdate}' where 序号='{$id}' and ambba.tag<>'null'";//如有则插入数据
                $result=mysqli_query($conn,$sql);
                if ($result) {
                    echo "数据插入成功";
                }else {
                    echo "数据插入失败";
                }
                // continue;//跳出本次循环
            }else {
                $sql="insert into sorts6_point select * from sorts6_copy left outer join ambren on ambren.tag='{$tag}' and '{$indate}'<ambren.date and  ambren.date<'{$outdate}' where 序号='{$id}' and ambren.tag<>'null' ";
                $result=mysqli_query($conn,$sql);
                if ($result) {
                    echo "数据插入成功";
                }else {
                    echo "数据插入失败";
                }
            }
        
        
    }

    
  


    echo '<br/>';
    echo '<br/>';
    $d=$num-$i;
    echo "已处理.$i.条数据";
    echo ",还有.$d.条数据等待处理";
}


// echo '<br/>';
// echo '<br/>';
//  var_dump($data);

// $data=$result->fetch_all(MYSQLI_ASSOC);//$data 查询结果数组 
// print_r($data);
// $id=$data[0]['point'];
// echo $id;



echo '<br/>';
echo '<br/>';
echo $num;

 //程序运行时间
 $endtime = explode(' ',microtime());
 $thistime = $endtime[0]+$endtime[1]-($starttime[0]+$starttime[1]);
 $thistime = round($thistime,3);
 echo "本网页执行耗时：".$thistime." 秒。".time();

?>