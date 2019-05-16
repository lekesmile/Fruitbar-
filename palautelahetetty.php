<?php
$etunimi = $_POST["title"];
$etunimi = $_POST["etunimi"];
$sukunimi = $_POST["message"];
$etunimi = $_POST["email"];
$palaute = $_POST["Submit"];

$sql = "INSERT INTO palaute (ETUNIMI, SUKUNIMI, PALAUTE) VALUES ('$etunimi', '$sukunimi', '$palaute')";
if(mysqli_query($connection, $sql)){
  echo "Palaute lisätty.";
}
else{
  echo "ERROR: Couldnotableto execute $sql. " . mysqli_error($connection);
}
// Close Mysql connection
mysqli_close($connection);


 ?>
