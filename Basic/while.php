<?php 
$n=1;
while($n<=10){
	echo "$n<br/>";
	$n++;
}
echo "<br/>";
$n=1;
while($n<=10):
	echo "$n<br/>";
	$n++;
endwhile;
echo "<br/>";
$i=1;
while($i<=3){
	$j=1;
	while($j<=3){
		echo "$i $j<br/>";
		$j++;
	}
	$i++;
}
?>