<?php
	include("includes/db.inc.php");
   	db_connect();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv">
<head>
    <title>Dota 2 - Add Player</title>
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
	<link media="screen" rel="stylesheet" href="stylesheets/stylesheet.css"/>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<script src="jquery.validate.js" type="text/javascript"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$("#AddPlayer").validate();
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

			<h3>Add a player</h3>
		    
		<form action="" method="post" id="AddPlayer">
		<ol>
			<li><label>Name: <input type="text" name="name" class="required"/></label></li>
			<li><label>Team: <input type="text" name="team" class="required"/></label></li>
			<li><label>Position: <input type="text" name="position" class="number required" range="0, 5"/></label></li>
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


		if(trim($_POST['team']) == '')
		{
			$hasError = true;
		}
		else
		{
			$team = $_POST['team'];
			$safeteam = mysql_real_escape_string($team);
		}

		if(trim($_POST['position']) == '')
		{
			$hasError = true;
		}
		else if($_POST['position'] < 0)
		{
			$hasError = true;
		}
		else if($_POST['position'] > 5)
		{
			$hasError = true;
		}
		
		else
		{
			$position = $_POST['position'];
			$safeposition = mysql_real_escape_string($position);
		}
		
		if(!$hasError)
		{
			$query = "INSERT INTO player (Name, Team, Position) VALUES ('$safename', '$safeteam', '$safeposition')";
			mysql_query($query)or die(mysql_error());
			?><h3><?php	print "Player added!"; ?></h3><?php
		}
		else
		{
			?><h3><?php	print "Please fill the textboxes correctly. Position has to be 1-5"; ?></h3><?php
		}
		

     }
	
?>
</div>
</body>
</html>