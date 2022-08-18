<?php
$x=22.41;
echo $x;
echo "<br/>";
$a=11.365;
var_dump($a);
echo "<br/>";
$a=6.203;
$b=2.3e4;
$c=7E-10;
var_dump($a);
echo "<br/>";
var_dump($b);
echo "<br/>";
var_dump($c);
?>
<?php 
echo "<br/>";
$x=123.41;
echo is_float($x);
echo "<br/>";
$a=123.41;
$b=12;
var_dump(is_float($a));
echo "<br/>";
var_dump(is_float($b));
echo "<br/>";
$var_name=126.56;
if(is_float($var_name))
	echo 'This is a float value.<br/>';
	else
	echo 'This is not a float value.<br/>';
	var_dump(is_float('javapoint'));
	echo "<br/>";
	var_dump(is_float(85));
?>