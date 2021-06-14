<?php
// $dbh = new PDO("mysql:host=localhost;dbname=manag","root","root");
$dbh = new PDO("mysql:host=localhost:3306;dbname=manag","root","1234");
$sql = " SELECT * FROM car ";
$carsQuery = $dbh->query($sql);
$getCar = $carsQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getCar));
?>
