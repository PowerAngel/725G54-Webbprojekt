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


	<form action="" method="post">

			<ol>
				<li><label><p>Name: </p><input type="text" name="username" class="required"/></label></li>
				<li><label><p>Comment: </p><input type="text" name="usercomment" class="required"/></label></li>
				<li><input type="submit" name="send" value="Send" /></li>
			</ol>


			<?php
			if ($_POST['send'] == "Send") 
						{
							$Playername = "Xboct";
						
							if(trim($_POST['username']) == '')
							{
								$hasError = true;
							}
							else{
								$username = $_POST['username'];
								$usersafename = htmlspecialchars($username);
								$usermoresafename = mysql_real_escape_string($usersafename);
							}

							if(trim($_POST['usercomment']) == ''){
								$hasError = true;
							}
							else{
								$comment = $_POST['usercomment'];
								$safecomment = htmlspecialchars($comment);
								$moresafecomment = mysql_real_escape_string($safecomment);
							}

							
					        if(!$hasError){
					        	echo"hej!";
								$query = "INSERT INTO comments (Playername, Name, Comment) VALUES ('$Playername', '$usermoresafename', '$moresafecomment')";
								mysql_query($query) or die(mysql_error());
							}

				        	else 
				        	{
								print "Vänligen fyll i alla fält";
							}
				    	}

			?>

	</form>


</div>
</div>

</body>