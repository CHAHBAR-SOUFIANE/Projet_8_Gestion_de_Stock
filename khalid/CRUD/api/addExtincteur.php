<?php
$dbh = new PDO("mysql:host=localhost:3306;dbname=manag","root","sdfg");
$sql = " INSERT INTO car(id,prix,model) VALUES (:id,:prix,:model)";
$addStudentsQuery = $dbh->prepare($sql);
$addStudentsQuery->bindParam(":id",$_POST["id"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":prix",$_POST["prix"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":model",$_POST["model"],PDO::PARAM_STR);
$addStudentsQuery->execute();
?>
