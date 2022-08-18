<?php
for($n=1; $n<=10;$n++){
	echo "$n<br/>";
}
echo "<br/>";
for($i=1;$i<=3;$i++){
	for($j=1;$j<=3;$j++){
		echo "$i $j<br/>";
	}
}
echo "<br/>";
$s=array("summer","winter","spring","autumn");
foreach($s as $A=>$arr){
	echo "season is: [$A"."]=".$arr."<br/>";
}
?>