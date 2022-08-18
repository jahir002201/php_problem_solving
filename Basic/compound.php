<?php
$arr = array(10,20,30);
print_r($arr);
echo "<br/>";
$arr=array(10,'Jahir',30);
print_r($arr);
echo "<br/>";
?>
<?php
class vehicle{
	function car(){
		echo "Display tata motors";
	}
}
$obj=new vehicle;
$obj->car();

?>
<?php
class student{
	function student(){
		$this->jsk=100;
	}
}
$obj=new student;
$obj->student();
echo "<br/>";
echo $obj->jsk;
echo "<br/>";
?>
<?php
class greeting {
	public $str="Hello Developer";
	function show_greeting(){
		return $this->str;
	}
}
$obj=new greeting;
var_dump($obj);
?>
