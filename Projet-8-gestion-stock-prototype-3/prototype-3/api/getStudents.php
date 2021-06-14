<?php
$dbh = new PDO("mysql:host=localhost;dbname=schoolstd","root","sdfg");
$sql = " SELECT * FROM schoolstudents ";
$studentsQuery = $dbh->query($sql);
$getStudents = $studentsQuery->fetchAll(PDO::FETCH_ASSOC);
echo(json_encode($getStudents));
?>