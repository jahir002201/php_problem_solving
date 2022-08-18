<?php
function add(...$num){
	$sum=0;
	foreach($num as $n){
		$sum+=$n;
	}
	return $sum;
}
echo add(0,1,2,3,4,5,6,7,8,9,10);
?>