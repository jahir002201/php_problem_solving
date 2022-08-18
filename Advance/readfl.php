<?php
$fn="D:\\Text\\test.txt";
$file=fopen($fn,"r");
$fcon=fread($file,filesize($fn));
echo "<br/>";
echo "<pre>$fcon</pre>";
fclose($file);
?>