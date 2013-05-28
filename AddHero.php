<?php
	include("includes/db.inc.php");
   	db_connect();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv">
<head>
    <title>DotA 2 - Add Hero</title>
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
	<link media="screen" rel="stylesheet" href="stylesheets/stylesheet.css"/>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<script src="jquery.validate.js" type="text/javascript"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#AddHero").validate();
	});
	</script>

</head>

<body>

<div id="container">
        <h1>DotA 2 </h1>
		
	<div id="menu">
	<p><a href="http://localhost/%5b725G54-webbprojekt%5d/725G54-Webbprojekt/startsida.php">Start page</a>
		<a href="http://localhost/%5b725G54-webbprojekt%5d/725G54-Webbprojekt/players.php">Players</a>
		<a href="http://localhost/%5b725G54-webbprojekt%5d/725G54-Webbprojekt/AddPlayer.php">Add a player</a>
		<a href="http://localhost/%5b725G54-webbprojekt%5d/725G54-Webbprojekt/AddHero.php">Add a hero</a>
		<a href="http://www.joindota.com">JoinDota</a>
	</p>
	</div>


		<div id="content">

			<h3>Add a hero</h3>
		    
		<form action="" method="post" id="AddHero">
		<ol>
			<li><label>Name: <input type="text" name="name" class="required"/></label></li>
			<li><label>Main attribute: <input type="text" name="mainattribute" class="required"/></label></li>
              	<li><input type="submit" name="submit" value="Skicka" /></li>
		</ol>
		</form>
		</div>

<?php

	 if ($_POST['submit'] == 'Skicka') 
	 {

		if(trim($_POST['name']) == '')
		{
			$hasError = true;
		}
		else
		{
			$name = $_POST['name'];
			$safename = mysql_real_escape_string($name);
		}


		if(trim($_POST['mainattribute']) == '')
		{
			$hasError = true;
		}
		else
		{
			$mainattribute = $_POST['mainattribute'];
			$safemainattribute = mysql_real_escape_string($mainattribute);
		}
		
		if(!$hasError)
		{
			$query = "INSERT INTO hero (Name, Mainattribute) VALUES ('$safename', '$safemainattribute')";
			mysql_query($query)or die(mysql_error());
			?><h3><?php	print "Hero added!"; ?></h3><?php
		}
		else
		{
			?><h3><?php	print "Please fill the textboxes correctly."; ?></h3><?php
		}
		

     }
	
?>
</div>
</body>
</html>