<?php
$x=123;
echo is_int($x);
echo "<br/>";
$x=56;
$y="xyz";
if(is_int($x)){
	echo "$x is integer<br/>";
}
else{
	echo "$x is not an integer<br/>";
}
if(is_int($y)){
	echo "$y is integer<br/>";
}
else{
	echo "$y is not integer<br/>";
}
echo "<br/>";
$check=12345;
if(is_int($check)){
	echo $check." is an int!";
}
else{
	echo $check." is not an int!";
}
?>