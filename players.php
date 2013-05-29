<?php
	include("includes/db.inc.php");
   	db_connect();
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv">

<head>

    <title>DotA 2 - players</title>
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
	<link media="screen" rel="stylesheet" href="stylesheets/stylesheet.css"/>

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

	<div="content">

<h3>How would you like to sort the players?</h3>
	<form action="" method="post">
		
		<ol>
              	<li><input type="submit" name="submit" value="Name" />
				<input type="submit" name="submit" value="Team" />
              	<input type="submit" name="submit" value="Position" /></li>
		
		</ol>	
	</form>


	<?php

	if ($_POST['submit'] == 'Name') 
	{
		$query = "SELECT * FROM player ORDER BY Name ASC";
	}

	else if($_POST['submit'] == 'Team')
	{
		$query = "SELECT * FROM player ORDER BY Team ASC";
	}

	else if($_POST['submit'] == 'Position')
	{
		$query = "SELECT * FROM player ORDER BY Position ASC";
	}
		
		$result = mysql_query($query) or die(mysql_error());			


			while($row = mysql_fetch_array($result))
			{
				$id = $row['ID'];
				$name = $row['Name'];
				$team = $row['Team'];
				$position = $row['Position'];
				$playerimage = $row['PlayerImage'];

				?><p><?php echo "<table><tr><td> <img src= '.$playerimage' alt='DotA2icon'/></td><td> Name: $name  </td><td> Team: $team</td><td> Position: $position </td></tr></table>"; ?></p><?php
			}

?>

	</div>
</div>
</body>