<?php
echo ( abs(-7)."<br/>");
echo ( abs(7)."<br/>");
echo ( abs(-7.3)."<br/>");

echo ( ceil(3.3)."<br/>");
echo ( ceil(7.3333)."<br/>");
echo ( ceil(-4.9)."<br/>");

echo(floor(7.3)."<br/>");
echo(floor(9.666)."<br/>");
echo(floor(-5.7)."<br/>");

echo(sqrt(64)."<br/>");
echo(sqrt(256)."<br/>");
echo(sqrt(2)."<br/>");

echo(decbin(1)."<br/>");
echo(decbin(2)."<br/>");
echo(decbin(4)."<br/>");
echo(decbin(46464)."<br/>");

echo(dechex(2)."<br/>");
echo(dechex(14)."<br/>");
echo(dechex(45)."<br/>");

echo(decoct(2)."<br/>");
echo(decoct(20)."<br/>");
echo(decoct(25)."<br/>");


$n=100;
echo (base_convert($n,10,2)."<br/>");

echo(bindec(10)."<br/>");
echo(bindec(1010)."<br/>");
echo(bindec(1011)."<br/>");

echo "random integer:<br/>";

for($i=1; $i<=10;$i++){
	echo (rand(0,1)."<br/>");
}

?>