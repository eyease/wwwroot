<?php
header("Content-Type: text/html;charset=gb2312"); 
        echo exec("dir",$file);
        echo "</br>";
        print_r($file);
?>

