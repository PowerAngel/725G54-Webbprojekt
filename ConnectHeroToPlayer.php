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

			<h3>Connect player to hero</h3>
		    
		<form action="" method="post" id="AddPlayer">
		<ol>
			<p>Pick a player: </p>
			<select name="player" id="player">
			<option value=''>Player</option>
			
			<?php
			$query = "SELECT * FROM player ORDER BY Name ASC";
			$result = mysql_query($query) or die(mysql_error());			


			while($row = mysql_fetch_array($result))
			{

				$name = $row['Name'];
				echo "<option value='{$name}'>$name</option>";
			}


		  	?>


			<li><input type="submit" name="submit" value="Lägg till" /></li>
		  	
		  	<p>And now pick a hero: </p>
		  	<select name="hero" id="hero">
		  		<option value=''>Hero</option>

		  		<?php

		  		$query = "SELECT * FROM hero ORDER BY Name ASC";
		  		$result = mysql_query($query) or die(mysql_error());

		  		while($row = mysql_fetch_array($result))
		  		{
		  			$name = $row['Name'];
		  			echo "<option value='{$name}'>$name</option>";
		  		}

		  		?>
			</select>


		<?php
	 	if ($_POST['submit'] == 'Lägg till') 
	 	{
	 		$playername = $_POST['player'];
	 		$heroname = $_POST['hero'];
			$count = 0;

	 		$query = "SELECT * FROM topplayed ORDER BY Playername ASC";
	 		$result = mysql_query($query) or die(mysql_error());
	 		while($row = mysql_fetch_array($result))
	 		{
	 			if($playername == $row['Playername'])
	 			{
	 				$count++;
	 			}

	 			if($count >= 3)
	 			{
	 				$hasError = true;
	 			}
	 		}

	 		if(!$hasError)
	 		{
	 			
	 			$query = "INSERT INTO topplayed (Playername, Heroname) VALUES ('$playername', '$heroname')";
	 			mysql_query($query);
	 		}
	 		else
	 		{
	 			?><p><?php echo "The player already has three top heroes";?></p><?php
	 		}

    	}

	
?>


              	
		</ol>
		</form>


		</div>

</div>
</body>