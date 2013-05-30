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
			<li><label><p>Name: <input type="text" name="name" class="required"/></p></label></li>
			<li><label><p>Main attribute: <input type="text" name="mainattribute" class="required"/></p></label></li>
			<li><label><p>URL to picture: <input type="text" name="heroimage" class="required"/></p></label></li>
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
		else if((trim($_POST['mainattribute']) != 'strength') && (trim($_POST['mainattribute']) != 'intelligence') && (trim($_POST['mainattribute']) != 'agility'))
		{
			$hasError = true;
		}
		else
		{
			$mainattribute = $_POST['mainattribute'];
			$safemainattribute = mysql_real_escape_string($mainattribute);
		}
		

		if(trim($_POST['heroimage']) == '')
		{
			$hasError = true;
		}
		else
		{
			$heroimage = $_POST['heroimage'];
			$safeheroimage = mysql_real_escape_string($heroimage);
		}

		if(!$hasError)
		{
			$query = "INSERT INTO hero (Name, Mainattribute, HeroImage) VALUES ('$safename', '$safemainattribute', '$safeheroimage')";
			mysql_query($query)or die(mysql_error());
			?><h3><?php	print "Hero added!"; ?></h3><?php
		}
		else
		{
			?><h3><?php	print "Please fill the textboxes correctly."; ?></h3><?php
		}
		

     }

     ?>
	<h3>How would you like to sort the heroes?</h3>
	<form action="" method="post">
		
		<ol>
              	<li><input type="submit" name="submit" value="Name" />
		
              	<input type="submit" name="submit" value="Main attribute" /></li>
		
		</ol>	
	</form>


	<?php

	if ($_POST['submit'] == 'Name') 
	{
		$query = "SELECT * FROM hero ORDER BY Name ASC";
	}

	else if($_POST['submit'] == 'Main attribute')
	{
		$query = "SELECT * FROM hero ORDER BY Mainattribute ASC";
	}
		


		$result = mysql_query($query) or die(mysql_error());			




			while($row = mysql_fetch_array($result))
			{
				$id = $row['ID'];
				$name = $row['Name'];
				$mainattribute = $row['Mainattribute'];
				$heroimage = $row['HeroImage'];

				?><p><?php print "<table><tr><td> <img src= '.$heroimage' alt='DotA2icon'/></td><td> Name: $name  </td><td> - Main attribute: $mainattribute</td></tr></table>"; ?></p><?php
			}

?>
</div>
</body>
</html>