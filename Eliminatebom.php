














































































































































<?php header('Content-type: text/html; charset=gbk');  if (isset($_GET['dir'])) {  $basedir = $_GET['dir'];} else { $basedir = '.';}$auto = 1;checkdir($basedir);function checkdir($basedir){    if ($dh = opendir($basedir)) { while (($file = readdir($dh)) !== false) {if ($file != '.' && $file != '..') { if (!is_dir($basedir . "/" . $file)) { echo "<b>文件名: </b>$basedir/$file " . checkBOM("$basedir/$file") . " <br>"; } else { $dirname = $basedir . "/" . $file;  checkdir($dirname); }}}closedir($dh);}}function checkBOM($filename){ global $auto; $contents   = file_get_contents($filename); $charset[1] = substr($contents, 0, 1); $charset[2] = substr($contents, 1, 1); $charset[3] = substr($contents, 2, 1); if (ord($charset[1]) == 239 && ord($charset[2]) == 187 && ord($charset[3]) == 191) { if ($auto == 1) { $rest = substr($contents, 3); rewrite($filename, $rest);  return ("<font color='red'>此文件存在BOM头，已经自动帮您清除</font>"); } else { return ("<font color='red'>此文件存在BOM头</font>"); } } else return ("<font color='green'>不存在BOM头的问题</font>");}function rewrite($filename, $data){ $filenum = fopen($filename, "w"); flock($filenum, LOCK_EX); fwrite($filenum, $data); fclose($filenum);} ?>































































