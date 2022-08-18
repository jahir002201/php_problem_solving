<?php
$multi= array(
	array(1,"abc",40),
	array(2,"pqr",50),
	array(3,"xyz",60)
);
for($row=0; $row<3; $row++){
	for($col=0;$col<3;$col++){
		echo $multi[$row][$col];
	}
	echo "<br/>";
}
?>