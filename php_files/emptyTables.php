<?php

//load and connect database
require('../php_connect/DB_connect.php');
//code to empty the two tables
mysqli_query($conn,'TRUNCATE TABLE users');
mysqli_query($conn,'TRUNCATE TABLE address');
//empty more tables as more tables are used
mysqli_query($conn,'TRUNCATE TABLE contactdetails');
mysqli_query($conn,'TRUNCATE TABLE fees');
//save the "rows cleared" to the message variable
//$message = "All rows cleared";
//load jquery page reload script
$user_Id = "All rows cleared";
echo "<script>alert('All rows Cleared');  window.location.reload(true); </script>";

//header("Location:../index.php?message=TABLES CLEARED");


?>
