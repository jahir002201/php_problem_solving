
<html>
	<body>
		<form method="POST">
			with:
			<input type="number" name="with">
			<br/><br/>
			length:
			<input type="number" name="length">
			<br/><br/>
			<input type="submit" name="submit" value="Calculate">
		</form>
	</body>
</html>

<?php
if(isset($_POST)){
	$with=$_POST['with'];
	$length=$_POST['length'];
	$area=$with*$length;
	echo "The area of a rectangle with $with x $length is $area";
}
?>