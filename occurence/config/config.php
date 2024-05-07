<?php 

  session_start();

  define('SITEURL', 'http://localhost/occurence/');

  define('LOCALHOST', 'localhost');
  define('ROOT', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'ob_database');

  $conn =  mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or die(mysqli_error());
  $db_select = mysqli_select_db($conn, DATABASE) or die(mysqli_error());


?>