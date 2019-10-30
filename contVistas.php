<!DOCTYPE html>
<html>
<head>
	<title>Contador de visitas</title>
</head>
<body>
	<div class="cont">
		<img src="eye.png" class="contim">
		<?php
			if(isset($_COOKIE['contador'])){
				setcookie('contador', $_COOKIE['contador']+1, time()+365*24*60*60);
				echo $_COOKIE{'contador'};
			}
			else{
				setcookie('contador', 1, time()+365*24*60*60);
				echo "Hola que tal";
			}
		?>
	</div>
</body>
</html>