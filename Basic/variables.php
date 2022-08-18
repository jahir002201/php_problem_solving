<?php
$x="abc";
$$x=200;
echo $x."<br/>";
echo $$x."<br/>";
echo $abc;
echo "<br/>";
?>
<?php
$x="Gujarat";
$$x="Gandhinagar";
echo $x."<br/>";
echo $$x."<br>";
echo "Capital of $x is ".$$x;
?>
<?php
$name="Cat";
${$name}="Dog";
${${$name}}="Monkey";
echo $name."<br/>";
echo ${$name}."<br/>";
echo $Cat."<br/>";
echo ${${$name}}."<br/>";
echo $Dog."<br/>";
?>