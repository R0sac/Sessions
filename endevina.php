<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>endevina</title>
</head>
<body>
	<p>Endevina el nombre:</p>
	<?php
		session_start();
        $random = rand(1,10);
        $_SESSION['oculto']=$random;
		if(!isset($_GET['endevina'])){
			?>
				<form>
					<label>ENDEVINA</label>
					<input type="number" name="endevina">
					<input type="submit">
				</form>
			<?php
		}else{
			if($_SESSION['oculto'] > $_GET['endevina']){
				echo "<p>El numero a endevinar es major</p>";
							?>
				<form>
					<label>ENDEVINA</label>
					<input type="number" name="endevina">
					<input type="submit">
				</form>
			<?php

			}else if($_SESSION['oculto'] < $_GET['endevina']){
				echo "<p>El numero a endevinar es menor</p>";
				?>
				<form>
					<label>ENDEVINA</label>
					<input type="number" name="endevina">
					<input type="submit">
				</form>
			<?php
			}else{
				echo "<p>El numero a endevinar es aquest</p>";
				echo "<a href='ex41pagina1.php'>Tornar a jugar</a>";
			}
		}
	?>
</body>
</html>