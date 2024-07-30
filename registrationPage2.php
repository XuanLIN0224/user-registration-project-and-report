<?php
if(isset($_REQUEST['user_Id'])) { $user_Id =$_REQUEST['user_Id']; }
else { $user_Id=0; }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Page 2</title>

<!-- Use the same styling as the previous page-->
<link type="text/css" rel="stylesheet" href="css/cssRegistrationPage.css">
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
	
	
<script>
$(document).ready(function(){	
	 /*-console.log( "ready! I tell you" );
	$("tr:even").click(function() { alert("hi you") });*/
	$("tr:odd").css("background-color", "rgb(225, 208, 225)");
	$("#navBack").click(function() { location.href = 'index.php' });
	
	
$("#date").hide();	
	
$("#date").datepicker({
showOn: "button",
buttonImage: "images/calendar_link.png",
buttonImageOnly: false,
dateFormat: "dd-mm-yy",
changeDay: true,
changeMonth: true,
changeYear: true,
yearRange: "-80:+00",
altField: "#newdate"
});

$("#paidDate").hide();	

$("#paidDate").datepicker({
showOn: "button",
buttonImage: "images/calendar_img.png",
buttonImageOnly: false,
dateFormat: "dd-mm-yy",
changeDay: true,
changeMonth: true,
changeYear: true,
yearRange: "-80:+00",
altField: "#newdatePaid"
});

$("#dueDate").hide();	

$("#dueDate").datepicker({
showOn: "button",
buttonImage: "images/calendar_img.png",
buttonImageOnly: false,
dateFormat: "dd-mm-yy",
changeDay: true,
changeMonth: true,
changeYear: true,
yearRange: "-80:+00",
altField: "#newdueDate"
});
	
$("#date").change(function(){
	var getBirth = $(this).val();
	$('#loadAgeCalc').load("php_files/getAge.php?dateIn="+getBirth);
});
	
$('#next_button').click(function(){
	//alert("next address clicked");
});
	
});

</script>

</head>

<body>

<div class="ui-datepicker-multi" id="container">
<div id="header"> Basic Information </div>
<div id="content">
	
<form action="php_files/uploadAddressToDB.php" method="post" enctype="multipart/form-data">
<table  border="0" align="center" cellpadding="10" cellspacing="0" id="contactTable">
<thead>
  <tr>
    <th width="20%" align = "left"><button type="button" id="navBack">HOME PAGE</button></th>
  </tr>
  <tr>
  <th colspan="4" align = "center">Please add details below to register a new user</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td align="right">House Name/Number</td>
	<td width="30%"><input name="house_numberName" type="text" id="house_numberName" val=""/></td>
  </tr>
  <tr>
  <td width="30%" align="right">Street Name</td>
	<td width="30%"><input name="street_name" type="text" id="street_name" val=""/></td>
  </tr>
  <tr>
    <td align="right">City</td>
    <td><input name="city" type="text" id="city" val=""/></td>
  </tr>
  <tr>
  <td align="right">Postcode</td>
  <td><input name="postCode" type="text" id="postCode" val=""/></td>
  </tr>

   <tr>
    <td align="right">Email</td>
	<td width="30%"><input name="email" type="text" id="email" val=""/></td>
  </tr>
  <tr>
  <td width="30%" align="right">Telephone</td>
	<td width="30%"><input name="telephone" type="text" id="telephone" val=""/></td>
  </tr>
  
  <tr>
    <td align="right">Fee Paid</td>
	<td width="30%"><input name="feePaid" type="text" id="feePaid" val=""/></td>
  </tr>
  <tr>
  <td align="right">Fee Paid Date <input type="text" id="paidDate"></td>
    <td><input name="newdatePaid" type="text" id="newdatePaid" val=""/></td>
  </tr>
  <td align="right">due Date <input type="text" id="dueDate"></td>
    <td><input name="newdueDate" type="text" id="newdueDate" val=""/></td>
  </tr>
  <tr>
     <td colspan=4><input name="next_button" type="submit" id="next_button" value="NEXT: Finished" val="register">
     <input type="text" name="user_Id" id="user_id" value="<?php echo $user_Id; ?>"/>
   </tr>
</tbody>
</table>
</form>


</div>

<div id="footer"> Copyright © 2024 UCL </div>
</div>             
<div id="loadAgeCalc"></div>                 

<script>
  $('#user_id').hide();
    function checkInputs() {
        var house_numberName = $('#house_numberName').val();
        var street_name = $('#street_name').val();
        var city = $('#city').val();
        var postcode = $('#postCode').val();
        var email = $('#email').val();
        var telephone = $('#telephone').val();
        var feePaid = $('#feePaid').val();
        var paidDate = $('#newdatePaid').val();
        var dueDate = $('#newdueDate').val();


        if ((house_numberName === "" )|| (street_name === "") || (city === "" )|| (postcode === "") 
        || (email === "") || (telephone === "") || (feePaid === "") || (paidDate === "") || (dueDate === "")) { 
            $('#next_button').hide();
        } else {
            $('#next_button').show();
        }
    }
    //the 3 lines below are written by the guidelines given by charGPT
    //I fully understand that in the code a event listener is attached and it is called every time any input field's value changes. 
    $(document).ready(function() {
        $('#next_button').hide(); 
        $('input').on('input', checkInputs); 
    });    
</script> 
       
</body>             
</html>             
                    