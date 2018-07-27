<?php
 
 
$serverName = "localhost"; //serverName\instanceName
//$connectionInfo = array( "Database"=>"excel", "UID"=>"root", "PWD"=>"168168");

//$conn = sqlsrv_connect( $serverName, $connectionInfo);
$conn = mysql_connect( $serverName, "root","168168");  
if( $conn ) {
     echo "联接成功<br />";
}else{
     echo "联接失败<br />";
      
}
 
mysql_close($conn);
/*$query ="select * from phpwamp";
$result = sqlsrv_query($conn, $query);
while($row = sqlsrv_fetch_array($result)){
  
       print_r($row);
       echo "<br>";
}*/
 
?>