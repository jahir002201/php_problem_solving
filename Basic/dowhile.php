<?php
$n=1;
do{
	echo "$n<br/>";
	$n++;
}while($n<=10);

echo "<br/>";
for($i=1;$i<=10;$i++){
	echo "$i <br/>";
	if($i==5){
		break;
	}
}
echo "<br/>";
for($i=1;$i<=3;$i++){
	for($j=1;$j<=3;$j++){
		echo "$i $j<br/>";
		if($i==2 && $j==2){
			break;
		}
	}
}
?>