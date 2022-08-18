<?php
function adder(&$str3){
	$str3.='Call By Reference';
}
$str='This is ';
adder($str);
echo $str;
?>
<?php
echo "<br/>";
function increment(&$i){
	$i++;
}
$i=10;
increment($i);
echo $i;
?>