<?php

//this code takes the chosen birthdate and the current year to work out the age of the registrant
//get todays date, format the argument day month year seperate with hyphon
$today = date('d-j-Y');

//get the postdata from the form that is the chosen birth date
$ageDate = $_REQUEST['dateIn'];

//split the date into an array using the three part hyphon
$splitAgeDate = explode("-", $ageDate);
//test the selection of the array (position two = year)
//echo out the selected year and if ok, comment out the echo
//echo "birth year ".$splitAgeDate[2];

//split today's date into an array
$splitDate = explode("-", $today);
//test the selection of the array (position two = year)
//echo out the selected year and if ok, comment out the echo
//echo "<br>This year ".$splitDate[2];

//minus the birthyear from the current year and save into $ageNow variable
$ageNow = $splitDate[2] - $splitAgeDate[2];
//test the output and comment out if ok
//echo "<hr>AGE NOW =".$ageNow;

//notice that the day and the month is recorded but not used
?>

<!--use script to aggign the $ageNow variable into the 'age' input in the form-->
<script>	
var currentAge = "<?php echo $ageNow; ?>";
$('#age').val(currentAge); 
</script>