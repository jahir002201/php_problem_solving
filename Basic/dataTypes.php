<?php
$year = 2022;
var_dump($year);
echo "<br/>";
$number = 9.999;
var_dump($number);
echo "<br/>";
$arr = array("HTML","CSS","JAVASCRIPT","PHP","MySqli");
var_dump($arr);
echo "<br/>";
$variable = null;
var_dump($variable);
echo "<br/>";
class Subject{ 
	public $course = "PHP";
}
$learn = new Subject();
echo $learn->course;
?>