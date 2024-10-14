<?php 
session_start();
session_unset();
session_destroy();

header('location:http://localhost/BIG_PROJECT/Backend/login.php')

?>