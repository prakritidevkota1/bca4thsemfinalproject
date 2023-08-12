<?php include('dbconnector.php') ?>

<?php

 if (isset($_SESSION['email']) && isset($_SESSION['type'])) {
  

session_unset();
session_destroy();
header("Location: ../homepage.php"); 
exit();
  }


?>
