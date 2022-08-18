<html>
	<body>
		<form method="post">
		Enter the Year:
		<input type="text" name="year">
		<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>
<?php
if($_POST){
	$year=$_POST['year'];
	if(!is_numeric($year)){
		echo "Strings not allowed, Input should be a number";
		return;
	}
	if(($year % 4==0) and ($year % 100!==0) or ($year % 400==0)){
		echo $year." is a Leap Year";
	}
	else{
		echo $year." is not a Leap Year";
	}
}
?>