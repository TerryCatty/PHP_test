<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
<body>
	<?php
		$arr = ["a", "b", "c"];
		$langArray = ["ru"=>["Русский", "Английский"], "en" => ["Russian", "English"]];
	?>
	<form action = "" method="GET">
		<select name = "lang">
			<option value = "en"><?=
				$langArray[$_GET['lang']][1] ?? "English"
			?></option>
			<option value = "ru"><?=
				$langArray[$_GET['lang']][0] ?? "Russian"
			?></option>
		</select>
		<input name = "test" value = "<?= $_GET["test"] ?? "" ?>">
		<input type = "submit" value="Сохранить">
		<br>
		<a href="?test=2345&lang=ru">click</a>
	</form>
	<?php
		for($i = 0; $i < 10; $i++){
			echo "<a href="."?test=". $i."&lang=ru".">click</a>" . "<br>";
		}
		foreach ($arr as $key => $elem) {
			if($elem == $_GET['test']){
				echo $key;	
			}
		}
	?>
</body>
</html>