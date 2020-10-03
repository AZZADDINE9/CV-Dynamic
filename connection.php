<!--     ce fichier permet d'etablir la connexion avec base de donnée        -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="cv";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>