<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo $value."<br>";
}


$cars = array("Volvo", "BMW", "Toyota");
echo count($cars)."<hr>";

foreach ($cars as $whatCar)
{
echo $whatCar."<br>";	
	
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
//An array stores multiple values in one single variable:
//There are three different kinds of arrays: indexed arrays, multidimensional arrays, and associative arrays
?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>loops and fuctions</title>
</head>

<body>
	
	hello world and <?php echo "<hr>hello world"; ?>
	
</body>
</html>