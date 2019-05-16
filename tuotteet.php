<?php include("include/header.php"); ?>
<?php include("include/navigations.php"); ?>


<?php

require("database.php");
$query= "SELECT typpi, id_tuote, hinta FROM tuote";
$result= mysqli_query($connection, $query);

// while(mysqli_fetch_array($result)) {
//   echo"<br><br><br><br><br><br>";
//   Print_r(mysqli_fetch_array($result));
// }

for ($i=0; $i < 10 ; $i++) {
  echo"<br><br><br><br><br><br>";
  Print_r(mysqli_fetch_array($result));
}


// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//       Print_r(mysqli_fetch_array($result));
//     }

 ?>







<?php include("include/footer.php"); ?>
