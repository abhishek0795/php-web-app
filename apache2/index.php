<?php
#$servername = getenv("MYSQL_HOST");
// $servername ="myDB";
// $username = getenv("MYSQL_USER");
// $password = getenv("MYSQL_PASSWORD");
// $dbname = getenv("MYSQL_DATABASE");
$servername ="abhishek-rds-instance.cdxhhswkgl8b.us-east-2.rds.amazonaws.com";
$username = "abhishek";
$password = "abhishek123";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
  echo "connected successfully";
}
// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

// mysqli_close($conn);
?>
