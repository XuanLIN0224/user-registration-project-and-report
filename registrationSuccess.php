<?php

//$user_Id = $_REQUEST['user_Id'];
// user Id sent from previous page, could be used to identify user for more functionality

if(!empty($_REQUEST['message'])){
$message = $_REQUEST['message'];
} else { $message = "Address added"; }

include("php_connect/DB_connect.php");

//constrain the result to the user details just uploaded 
//I added more entities so that more data can be displayed in the registration success page
$sql = "SELECT `firstName`, `lastName`, `dob`, `age`, `house_numberName`, `street_name`, `city`, `postCode`, `email`, `telephone`, `feePaid`, `datePaid`, `dateDue`FROM `users` 
left join `address` ON `users`.`user_Id` = `address`.`user_id` 
left join `contactdetails` ON `users`.`user_Id` = `contactdetails`.`user_id` 
left join `fees` ON `users`.`user_Id` = `fees`.`user_id` 
ORDER BY `address_Id` DESC ";
	
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registered Users</title>

<!-- Use the same styling as the previous page-->
<link type="text/css" rel="stylesheet" href="css/cssRegistrationSuccess.css">
<script src="js/jquery_lib.js"></script>


<script>
$(document).ready(function(){
	
	 /*-console.log( "ready! I tell you" );
	$("tr:even").click(function() { alert("hi you") });*/
	$("tr:odd").css({"background-color": "rgb(180, 75, 180)", "color": "rgb(255, 238, 255)"});
	$("#navBack").click(function() { location.href = 'registrationPage.php' });
	
	$('#truncate').click(function(){ //alert("clicked");
	$('#trucateTable').load("php_files/emptyTables.php");
	});
	$('#homeLink').click(function(){ location.href = 'index.php' });

}); 
</script>

</head>

<body>

<div id="container">
<div id="header"> List Of Registered Users </div>



<div id="content">
	
<table border="0" align="center" cellpadding="4" cellspacing="4">
  <tbody>
    <tr>
      <td width="60.7%"><button id="homeLink">HOME</button></td>
		<td ><button id="truncate">Empty Database</button></td>
	</tr>
  </tbody>
</table>

<div id="trucateTable">
<?php
	echo "<table border=\"0\" align=\"center\" cellspacing=\"10\" id=\"contactTable\">
<thead>
  <tr>
    <th colspan=4>USERS REGISTERED</th>
  </tr>
</thead>
<tbody>";

while ($row = mysqli_fetch_array($result)){
echo 
"<tr><td >first name</td><td>last name</td><td>D.O.B</td><td>Age</td></tr><tr>
<td >".$row['firstName']."</td>
<td>".$row['lastName']."</td>
<td>".$row['dob']."</td>
<td>".$row['age']."</td>
</tr>";
echo
"<tr><td>House name/no</td><td>Street</td><td>City</td><td>Post code</td></tr><tr>
<td>".$row['house_numberName']."</td>
<td>".$row['street_name']."</td>
<td>".$row['city']."</td>
<td>".$row['postCode']."</td>
</tr>";
echo
"<tr><td>Email</td><td>Telephone</td></tr><tr>
<td>".$row['email']."</td>
<td>".$row['telephone']."</td>
</tr>";
echo
"<tr><td>Paid Fee</td><td>Paid Date</td><td>Due Date</td></tr><tr>
<td>".$row['feePaid']."</td>
<td>".$row['datePaid']."</td>
<td>".$row['dateDue']."</td>
</tr>";
}

echo "</tbody></table>";
?>
</div>

<?php
echo "<br><br><br><br><br><br>";
?>

<div id="footer"> Copyright © 2024 UCL </div>
</div>
                    
                    
                    
                    
</body>             
</html>             
                    