<?php
	include('../conn.php');
	if(isset($_POST['prix'])){
		$prix=$_POST['prix'];
		$model=$_POST['model'];

		$conn->query("insert into car (prix, model) values ('$prix', '$model')");
	}

?>