<?php

$str='Hello text within single quote';
echo $str;

echo "<br/>";

$str1='Hello text
multiple line 
text within single quoted sting';
$str2='Using double "quote" directly inside single quoted string';
$str3='Using escape sequences\n in single quoted string';
echo "$str1 <br/> $str2 <br/> $str3";

echo "<br/>";
$num1=10;
$str1='trying variable $num1';
$str2='trying backslash n and backslash t insite single quoted sting \n\t';
$str3='Using single quote \'my quote\' and \\ backslash';
echo "$str1 <br/> $str2 <br/> $str3";

echo "<br/>";
$st="Hello 'text' \"within\" double quote";
echo $st;

echo "<br/>";
?>