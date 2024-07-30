<?php

$test = "hello world";
//echo $test."<hr>";

include("php_connect/DB_connect.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>User Registration System</title>

<!-- Use the same styling as the registration page-->
<link type="text/css" rel="stylesheet" href="css/cssRegistrationPage.css"/>
<link href="css/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">	
<link href="css/validate.css" rel="stylesheet" type="text/css">	
  <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>-->
<script type="text/javascript" scr="js/jquery.ui-1.10.4.datepicker.min.js"></script>
<script type="text/javascript" src="js/jquery_lib.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>	
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slider.js"></script>	
<script type="text/javascript" src="js/validator.js"></script>	
  
</script>


<script>
$(document).ready(function(){ 
	
	 /*-console.log( "ready! I tell you" );
	$("tr:even").click(function() { alert("hi you") });*/
	$("#navBack").click(function() {location.href = 'registrationPage.php' });
  $("#navList").click(function() {location.href = 'registrationSuccess.php' });
							 
							 
							 $('#clickMe').click(function() { $('#hideMe').toggle(); });
	
}); 
</script>

</head>

<body>

<div id="container">
<div id="header">User Registration System</div>
<div id="content">
	
<table  border="0" align="center" cellspacing="10" id="contactTable" width="40%">
<thead>
  <tr>
    <th colspan=2>HOME PAGE</th>
  </tr>
  <tr>
  <th align="center" ><button type = "button" href="registrationSuccess.php" id = "navList">Registered User List</button></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td width ="30%" align = "center"> <button type="button" id="navBack">Reigster New User</button></td>

</tbody>
</table>
</div>

<!-- add accordion -->
<div id="accordion">
  <h3 id="accordion_title">Introduction</h3>
  <div id="accordion_text">
    <p>
    This is the User Registration System. You can register the user information into the database. 
    Click 'Start Registering' to begin the user registration process.
    </p>
  </div>
  <h3 id="accordion_title">Usage</h3>
  <div id="accordion_text">
    <p>
    This system can be used in various occasions, such as 
    <ul>
      <li>hospitals</li>
      <li>schools</li>
      <li>companies</li>
    </ul>
    </p>
  </div>
  <h3 id="accordion_title">Declaration</h3>
  <div id="accordion_text">
    <p >
    This website is made by Xuan Lin.
    Student Number: 24238014
    UPI: XLINE56
    This is the final individual assignment of the UCL module ISSU0098: Data Driven Web-Based Applications
    </p>

  </div>
</div>
<div id="footer"> Copyright © 2024 UCL </div>
<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

<!-- end content div-->

</div>
<!-- end container div-->
 
                    
                    
                    
</body>             
</html>             
                    