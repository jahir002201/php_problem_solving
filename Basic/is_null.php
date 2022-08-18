<?php 
$var1=TRUE;
if(is_null($var1)){
	echo "Variable is NULL";
}
else{
	echo "Variable is not NULL";
}
echo "<br/>";
$x=100;
echo is_null($x);
$x=NULL;
$y="\0";
echo "<br/>";
is_null($x)?print_r("True"):print_r("Flase");
echo "<br/>";
is_null($y)?print_r("True"):print_r("False");
?>