<?php 
/* POST提交后、执行需要长时间处理的程序。这里什么也不处理只是停止10s */ 
if ($_POST['submit']) { 
  sleep(10); 
   echo 'finish!'; 
} else { 
} 
?> 