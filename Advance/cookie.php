<?php 
setcookie("user","Code Jupiter");
setcookie("CookieName",time()-3600);
?>
<html>
	<body>
		<?php
		if(!isset($_COOKIE['user'])){
			echo "Sorry, cookie is not found!";
		}
		else{
			echo "<br/>Cookie Value:".$_COOKIE['user'];
		}
       echo "<br/>";
		if(!isset($_COOKIE['CookieName'])){
			echo "Sorry, cookie is not found!";
		}else{
			echo "Cookie Value:".$_COOKIE['CookieName'];
		}

		?>
	</body>
</html>