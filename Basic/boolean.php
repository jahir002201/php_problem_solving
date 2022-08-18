<?php
$bol=true;
echo $bol;
$bol2=!false;
echo "<br/>".$bol2;
?>
<?php
$x=false;
echo "<br/>".is_bool($x)."<br/>";
$y=false;
if(is_bool($y))
echo 'This is a boolean type.';
else
echo 'This is not a boolean type.';
?>