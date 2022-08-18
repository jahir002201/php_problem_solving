<?php
$season=array("summer","winter","spring","autumn");
echo "Season are: $season[0], $season[1], $season[2] and $season[3] ";

echo "<br/><br/>";
$salary=array("a"=>"10","b"=>"20","c"=>"30","d"=>"40");
print_r(array_change_key_case($salary,CASE_UPPER));

echo "<br/><br/>";

$salary=array("a"=>"10","b"=>"20","c"=>"30","d"=>"40");
print_r(array_chunk($salary,3));

echo "<br/>";
$season=array("summer","winter","spring","autumn");
echo count($season);
echo "<br/>";

$season=array("summer","winter","spring","autumn");
sort($season);
foreach($season as $s){
	echo "$s <br/>";
}

echo "<br/>";
$season=array("summer","winter","spring","autumn");
$revseason=array_reverse($season);
foreach($revseason as $s){
	echo "$s <br/>";
}

$season=array("summer","winter","spring","autumn");
$key=array_search("spring",$season);
echo $key;

echo "<br/>";
$name1=array("abc","pqr","xyz","mno");
$name2=array("def","abc","stu","xyz");
$name3=array_intersect($name1,$name2);
foreach($name3 as $n){
	echo "$n <br/>";
}


?>