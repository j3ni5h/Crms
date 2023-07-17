<?php

$server   = "localhost";
$user     = "root";
$pass     = "";
$database = "crms";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
 ?>
 die("
 <script>
 alert('Connection Failed.');
 </script>"
 );
    <?php

}
?>
