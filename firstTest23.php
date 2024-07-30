<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SS2023</title>
	
	<script src="js/jquery_lib.js"></script>

	
	<script>
	$(document).ready(function(){ alert("jquery loaded");
		
	$('#clickMe').click(function() {
		$('#hideMe').toggle();
		});
	});
	
	</script>
	
<style>
	
	#container
	{ 
	width: 50%;
	border: thin dashed red; 
	padding: 5px;
	color: green;
	margin: auto;
	}
	
	.red{ color: orange; }
	#red { color: navy; }
	
	 #content, #footer 
	{ 
	border: thin solid grey; 
	padding: 15px;
	color: green;
	}	
	
	#header { 
		color: red;
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
	}
</style>		
	
</head>

<body>
<div id="container">
	
	<div id="header"><h2>UCL Summer School</h2></div>
	
	<div id="content">
		
	
	<table width="144" border="2" align="center" cellpadding="5" cellspacing="5">
		<tr>
			<td id="clickMe">test 1</td>
		</tr>
		<tr>
			<td id="hideMe">test 2</td>
		</tr>
	</table>	
  </div>
	
	<div id="footer"><h6>summer school 2023 coprwrite</h6></div><!--endfooter -->	
</div>	
<!--end container -->

</body>
</html>
