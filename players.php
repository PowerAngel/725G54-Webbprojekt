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
	


	<?php

	$query = "SELECT * FROM player ORDER BY Name ASC";

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
		
		$result = mysql_query($query) or die ("Error: ". mysql_error(). " with query ". $query);


			while($row = mysql_fetch_array($result))
			{
				$id = $row['ID'];
				$name = $row['Name'];
				$team = $row['Team'];
				$position = $row['Position'];
				$playerimage = $row['PlayerImage'];

				$TopPlayerImage0 = "/images/dota2.png";
				$TopPlayerImage1 = "/images/dota2.png";
				$TopPlayerImage2 = "/images/dota2.png";



				$query2 = "SELECT * FROM topplayed WHERE Playername='$name'";
				$result2 = mysql_query($query2) or die ("Error: ". mysql_error(). " with query ". $query2);


				$i = 0;
				while($row = mysql_fetch_assoc($result2))
				{
					$playername = $row['Playername'];
					$heroname = $row['Heroname'];

					$query3 = "SELECT * FROM hero WHERE Name='$heroname'";
					$result3 = mysql_query($query3) or die ("Error: ". mysql_error(). " with query ". $query3);

					while($row = mysql_fetch_assoc($result3))
					{
						if($i == 0)
						{
							$TopPlayerImage0 = $row['HeroImage'];
						}

						if($i == 1)
						{
							$TopPlayerImage1 = $row['HeroImage'];
						}

						if($i == 2)
						{
							$TopPlayerImage2 = $row['HeroImage'];
						}

						$i++;
					}

				}

				?><p><?php echo "<table><tr><td> <img src= '.$playerimage' alt='DotA2icon'/></td><td> Name: $name  </td><td> Team: $team</td><td> Position: $position </td><td><img src= '.$TopPlayerImage0' alt='DotA2icon'/></td><td><img src= '.$TopPlayerImage1' alt='DotA2icon'/></td><td><img src= '.$TopPlayerImage2' alt='DotA2icon'/></td></tr></table>"; ?></p>


				<form action='' method='post'>
							
				<ol>
					<li><label><p>Name: </p><input type="text" name="name" class="required"/></label></li>
					<li><label><p>Comment: </p><input type="text" name="comment" class="required"/></label></li>
						<input type="hidden" name="action" value="send"/>
						<input type="hidden" name= <?php "$name" ?> value= <?php "$name" ?>/>
					<li><input type="submit" name="playername" value="Send" /></li>
				</ol>
				<?php echo"$name"; ?>

				</form>


				<?php
							$query4 = "SELECT * FROM comments WHERE Playername='$name' ORDER BY Time DESC";
							$result4 = mysql_query($query4);
							while($row = mysql_fetch_array($result4))
							{
								$Name = $row['Name'];
								$Comment = $row['Comment'];
								$Time = $row['Time'];
								$Id = $row['ID'];
						
								
								print"<table><tr><td>$Time -</td><td> $Name - </td><td>$Comment</td>
								<td>
								<form action='' method='post'>
									<div>
									<input type='hidden' name='action' value='delete'/>
									<input type='hidden' name='id' value='$id'/>
									<input type='submit' name='submit' value='Ta bort'/>
									</div>
								</form>
								</td>
								</tr></table>";
							}




				}

							if ($_POST['action'] == "send") 
							{

								echo "Hej!";
								if(trim($_POST['name']) == '')
								{
									$hasError = true;
								}
								else
								{
									$username = $_POST['name'];
									$usersafename = htmlspecialchars($username);
									$usermoresafename = mysql_real_escape_string($usersafename);
								}

								if(trim($_POST['comment']) == ''){
									$hasError = true;
								}
								else{
									$comment = $_POST['comment'];
									$safecomment = htmlspecialchars($comment);
									$moresafecomment = mysql_real_escape_string($safecomment);
								}

								$Playername = $_POST['$name'];

								echo "$Playername $usermoresafename $moresafecomment";
								
						        if(!$hasError){
						        	echo"hej!";
									$querysend = "INSERT INTO comments (Playername, Name, Comment) VALUES ('Faith', '$usermoresafename', '$moresafecomment')";
									mysql_query($querysend) or die ("Error: ". mysql_error(). " with query ". $sql);
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