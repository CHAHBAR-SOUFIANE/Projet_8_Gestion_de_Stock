<?php
	include('../conn.php');
	if(isset($_POST['eprix'])){
		$prix=$_POST['eprix'];
		$model=$_POST['emodel'];
		$id=$_POST['id'];

		$conn->query("update car set prix='$prix', model='$model' where id='$id'");
	}
?>