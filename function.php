<?php
	$pass = 123456;
	if($_POST['pass'] != $pass){
		echo "Wrong password!";
	}else{
		echo "Welcome!";	
	}
?>	