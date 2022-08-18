<?php
$salary = array("Jahir"=>"250000","kamal"=>"150000","jamal"=>"100000");
echo "Jahir salary: ".$salary["Jahir"]."<br/>";
echo "Kala salary: ".$salary["kamal"]."<br/>";
echo "Jamal salary: ".$salary["jamal"]."<br/>";
?>
<?php
$r[0]="a";
$r[1]="b";
$r[2]="c";
echo "$r[0]<br/>";
echo "$r[1]<br/>";
echo "$r[2]<br/>";
$salary = array("Jahir"=>"250000","kamal"=>"150000","jamal"=>"100000");
foreach($salary as $k=>$v){
	echo "key- $k value- $v <br/>";
}
?>