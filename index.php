<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
<body>
	<form action = "" method="GET">
		<input name = "a"><p>X^2</p><br>
		<input name = "b"><p>X</p><br>
		<input name = "c"><br><br>
		<input type="submit">
	</form>
	<?php
		if(!empty($_GET)){
			$D = ($_GET["b"] ** 2) - (4 * $_GET["a"] * $_GET["c"]);
			if($D < 0){
				echo "Нет корней";
			}elseif ($D > 0) {
				$x1 = (-1 * $_GET["b"] + sqrt($D));
				$x2 = (-1 * $_GET["b"] - sqrt($D));
				echo $x1 . "<br>" . $x2;
			}else{
				$x = (-1) * ($_GET["b"] / (2 *$_GET["a"]));
				echo $x;
			}
		}
	?>
</body>
</html>