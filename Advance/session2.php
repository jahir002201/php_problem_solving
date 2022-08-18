<?php
session_start();
?>
<html>
	<body>
		<?php
		echo "User is: ".$_SESSION["user"];
		?>
		<?php
		session_destroy();
		?>
	</body>
</html>