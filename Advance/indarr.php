<?php
$size=array("Big","Medium","Short");
echo "Size: $size[0], $size[1] and $size[2]";
?>

<?php
echo "<br/><br/>";
$s[0]="Big";
$s[1]="Medium";
$s[2]="Short";
echo "Size: $size[0], $size[1] and $size[2]";
?>
<?php
echo "<br/><br/>";
$size=array("Big","Medium","Short");
foreach($size as $a=>$b){
	echo "Size is: [$a] = $b<br/>";
}
echo "<br/><br/>";
$size=array("Big","Medium","Short");
echo count($size);
?>