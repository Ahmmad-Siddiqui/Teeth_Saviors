<?php
   // echo is used to print or display
   /*echo "Hello World! Welcome to PHP <br>";

   $name = "Ahmmad";
   $surname = "Siddiqui";

   echo($name);     //displaying the content of the name variable
*/

$server = "localhost";
$username = "root";
$password = "";
$database = "voting";

// connecting to the dental_clin ic database
$connection = mysqli_connect($server, $username, $password, $database);

if ($connection) {
   echo "Connection Successful";
}


?>