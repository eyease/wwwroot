<?php 

		$conn=mysqli_connect("localhost","root","168168");//数据库帐号密码
		if (mysqli_errno($conn)) {
			echo mysqli_errno($conn);
			exit;
		}
		mysqli_select_db($conn,"performance");
		mysqli_set_charset($conn,'utf8');
		$sql="select * from userdb_yg";
		$result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        $colums=mysqli_num_fields($result);//获取列数
        
        // $num1=mysqli_fetch_array($result);
        echo '现有收费员身份证信息'.$num.'人';
        echo '现有数据'.$colums.'条';
        
		echo "<table style='border-color: #efefef;' text-align: center; border='1px' cellpadding='5px' cellspacing='0px'><tr>";
		// for($i=0; $i < $colums; $i++){
		// 	$field_name=mysql_field_name($result,$i);
		// 	echo "<th>$field_name</th>";
		// }
		// echo "</tr>";
		while($row=mysqli_fetch_row($result)){
			echo "<tr>";
			for($i=0; $i<$colums; $i++){
				echo "<td>$row[$i]</td>";
			}
			echo "</tr>";
		}
		echo "</table>";



       
                // $conn=mysqli_connect("localhost","root","168168");//数据库帐号密码
                // if (mysqli_errno($conn)) {
                //     echo mysqli_errno($conn);
                //     exit;
                // }else {
                //     echo "连接成功";
                // }


 ?>