<?php

require('../php_connect/DB_connect.php');

//grab postdat values for creating user row
$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$dob = $_REQUEST['newdate'];
$age = $_REQUEST['age'];

//convert date to year month day for insertion into database
$phpdate = strtotime( $dob );
$mysqldate = date( 'Y-m-d', $phpdate );

//insert the postdata into the database
$sql = "INSERT INTO `users` 
(`user_Id`, `firstName`, `lastName`, `dob`, `age`) 
VALUES (NULL, '$firstName','$lastName','$mysqldate','$age')";

//bug finder
if (($conn->query($sql) === TRUE)) { 
//test for insertion if/else
//echo "New record created successfully";
//pause the program to make sure that the database is updated 
sleep(0.5);	

	
//find the last user ID to carry across to the address upload php page.
//constrain the result to the user details just uploaded 
$query = "SELECT `user_Id` FROM `users` 
WHERE `firstname`='$firstName'
AND `lastName`='$lastName'
AND `dob`='$mysqldate'
ORDER BY `users`.`user_Id` DESC LIMIT 1";
	
//output data of each row
//save the query result array in the result variable
$result = $conn->query($query);

//loop through the array to fetch the user ID 
while ($row = $result->fetch_row()) {
    $user_Id = $row[0];
}

//if all ok load the address page with the user ID as post data
header("Location:../registrationPage2.php?user_Id=".$user_Id);	
//else throw an error
} else { echo "Error: ".$sql."<br>".$conn->error; }

//close the database link
$conn->close();

//varible test script 
/*echo 
	"<hr>first name ".$firstName."<br>".
	"last name ".$lastName."<br>".
	"date of birth ".$dob."<br>".
	"age ".$age,"<br>";

echo "you've submitted the form";*/
?>