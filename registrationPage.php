<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registratoin Page</title>
	
<link href="css/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">	
<link href="css/validate.css" rel="stylesheet" type="text/css">	
<link type="text/css" rel="stylesheet" href="css/cssRegistrationPage.css">
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
buttonImage: "images/calendar_img.png",
buttonImageOnly: false,
dateFormat: "dd-mm-yy",
changeDay: true,
changeMonth: true,
changeYear: true,
yearRange: "-80:+00",
altField: "#newdate"
});
	
$("#date").change(function(){
	var getBirth = $(this).val();
	$('#loadAgeCalc').load("php_files/getAge.php?dateIn="+getBirth);
});
	
$('#next_address').click(function(){
	//alert("next address clicked");
});
	
});

</script>

</head>


<body>

<div class="ui-datepicker-multi" id="container">
<div id="header">Basic Information</div>
<div id="content">
	
<form action="php_files/uploadToDB.php" method="post" enctype="multipart/form-data">
<table  border="0" align="center" cellpadding="10" cellspacing="0" id="contactTable">
<thead>
  <tr>
    <th align = "left"><button type="button" id="navBack" >HOME PAGE</button></th>
  </tr>
  <tr >
    <th colspan="4">Please add details below to register a new user</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td width ="20%" align="right">First Name</td>
	<td width="30%"><input name="firstName" type="text" id="firstName" val=""/></td>
  </tr>
  <tr>
  <td width="30%" align="right">Last Name</td>
	<td width="30%"><input name="lastName" type="text" id="lastName" val=""/></td>
  </tr>
  <tr>
    <td align="right">Date Of Birth <input type="text" id="date"></td>
    <td><input name="newdate" type="text" id="newdate" val=""/></td>
  </tr>
  <tr>
  <td align="right">Age</td>
  <td><input name="age" type="text" id="age" val=""/></td>
  </tr>

  

  <tr>
    <td colspan=4 align = "left">
    <button type="submit" id="next_button" val="register">NEXT: Address</button>
  </tr>
</tbody>
</table>
</form>

</div>

<div id="footer"> Copyright © 2024 UCL </div>
</div>      
<div id="loadAgeCalc"></div>                      
<script>
    function checkInputs() {
        var f_nameCheck = $('#firstName').val();
        var l_nameCheck = $('#lastName').val();
        var dob = $('#newdate').val();
        var age = $('#age').val();

        if ((f_nameCheck === "" )|| (l_nameCheck === "") || (dob === "" )) { 
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
                    