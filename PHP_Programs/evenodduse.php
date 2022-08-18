<!DOCTYPE html>
<html>
	<body>
		<form method="POST">
		Enter a number:
		<input type="number" name="number"/>
		<input type="submit" value="Sumit"/>
		</form>
	</body>
</html>
<?php
if($_POST){
	$number = $_POST['number'];
	if(($number%2)==0){
		echo "$number is an Even number";
	}else{
		echo "$number is an Odd number";
	}
}
?>