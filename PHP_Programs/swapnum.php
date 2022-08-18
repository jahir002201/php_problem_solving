<?php
$a=30;
$b=40;
$t=$a;
$a=$b;
$b=$t;
echo "After swapping:<br/><br/>";
echo "a=".$a." b=".$b;

echo "<br/>";
$x=200;
$y=300;
$x=$x+$y;
$y=$x-$y;
$x=$x-$y;
echo "Value of x: $x <br/>";
echo "Value of y: $y <br/>";
?>