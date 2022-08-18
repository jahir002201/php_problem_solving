<?php
function display($num){
	if($num<=5){
		echo "$num <br/>";
		display($num+1);
	}
}
display(1);
?>
<?php
echo "<br/><br/>";
function fact($n){
	if($n<0)
	return -1;
	if($n==0)
	return 1;
	return ($n*fact($n-1));
}
echo fact(9);
?>