<?php 
//用单引号创建字符串
$phpcn=' php\'www.php.cn\'中\\文网'; //   \是转义符
echo $phpcn;
echo "<hr>";
//用双引号创建,还可以解析变量，以及所有转义字符
$phpnet="PH\n\r\$P\"www.php.net\"官网   {$phpcn}";
echo  $phpnet;
//用heredoc语法结构创建字符串，和双引号类似，且其中的双引号不需要转义
//适合大段多行的字符串
$heredoc=<<<"list"
<ul>
	<li><a href="http://www.php.cn">{$phpcn}</a></li>
	<li><a href="http://www.php.net">{$phpnet}</a></li>
</ul>
PHP"www.php.net"官网 
list;
echo "$heredoc";

//用nowdoc语法结构创建字符串，与单引号类似,不需要转义，但不能解析变量
$nowdoc=<<<'eod'
<ul>
	<li>这是一个'nowdoc'创建的列表1</li>
	<li>这是一个'nowdoc'创建的列表2</li>
</ul>
eod;
echo "$nowdoc";
 ?>