<?php  
function sayHello($name,$age){

	return "Hello $name, you are $age years old<br>";
}
echo sayHello("shawon",23);
?>
<?php   
function adder(&$str2){
	$str2.=' Call By Reference';
}
$str='Hello';
adder($str);
echo $str;
?>
<?php 
echo "<br/>";
function hey($nm="Jahir"){
	echo "Hello $nm <br/>";
}
hey();
hey("×͜×");
?>
<?php  
function cube($n){
	return $n*$n*$n;
}
echo "Cube of 3 is: ".cube(3);
?>