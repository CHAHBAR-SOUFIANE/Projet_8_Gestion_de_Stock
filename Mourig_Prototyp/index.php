<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='style.css' rel='stylesheet'>

</head>
<body>


<form action="" method="post">
    <input type='text' name='label'>
    <input type="number" name="prix">
    <input type="submit" value="save" name='save'>
</form>

<?php
//connection 
$connect = mysqli_connect("localhost","root","sdfg","feutre");
$result = mysqli_query($connect,"SELECT id, label, prix FROM feutre");


echo "<table>
<tr>
<th>Nom</th>
<th>Prix</th>
<th>delete</th>
</tr>
";
while( $row = mysqli_fetch_assoc($result) ) {

    echo "<tr><td>".$row['label']."</td>" .
         "<td>".$row['prix']."</td>".
         "<td>
         <form action='' method='post'>
         <input type='submit' value='".$row['id']."' name='delete'>
         </td>
         </form>
         </tr>";
}

echo "</table>";

if (isset($_POST['delete'])) {
    $deleteMe = $_POST['delete'];
    mysqli_query($connect,"DELETE FROM feutre WHERE id=$deleteMe");
    header('location:index.php');
}

if (isset($_POST['save']) && isset($_POST['label']) && isset($_POST['prix'])) {

    // mysqli_query($connect," INSERT INTO feutre (label, prix) VALUES (value2, value3) ");
    // header('location:dashbord.php');

$label = $_POST['label'];
$prix = $_POST['prix'];

$sql = " INSERT INTO feutre (label, prix) VALUES ('$label', '$prix') ";
mysqli_query($connect,$sql);

}


?>
</body>
</html>