<!DOCTYPE html>
<html>
	<body>

	<form method="POST">
		Enter first number:<input type="number" name="first"/><br/><br/>
		Enter second number:<input type="number" name="second"/><br/><br/>
		<input type="submit" name="add" value="ADDITION"/>
		<input type="submit" name="sub" value="SUBTRACTION"/>
	</form>
	<?php
	function add($a,$b){
		$sum=$a+$b;
		echo "Sum = $sum <br/><br/>";
	}
	function sub($a,$b){
		$sub=$a-$b;
		echo "Diff = $sub <br/><br/>";
	}
	if(isset($_POST['add'])){
		add($_POST['first'],$_POST['second']);
	}
	if(isset($_POST['sub'])){
		sub($_POST['first'],$_POST['second']);
	}

	?>
	</body>
</html>
