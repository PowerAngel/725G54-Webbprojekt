<?php
  include("includes/db.inc.php");
    db_connect();
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv">

<head>
  <title>DotA 2 - players</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
  <link media="screen" rel="stylesheet" href="stylesheets/stylesheet.css"/>
</head>

<body>

<div id="container">
  <h1>DotA 2 </h1>
  <div="content">
  <?php
  $query = "SELECT * FROM player WHERE Name='Chuan' ORDER BY Name ASC";

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

        ?>

        <!-- 
        BEST PRACTICE:
        Det är bättre att inte skriva in html inne i echo eller print, utan istället
        använda <?php echo $foobar ?> för att skriva ut strängarna i html,
        se nedan
         -->
        <table>
          <tr>
            <td>
              <img src="<?php echo $playerimage ?>" alt="DotA2icon" />
            </td>
            <td>
              Name: <?php echo $name ?>
            </td>
            <td>
              Team: <?php echo $team ?>
            </td>
            <td>
              Position: <?php echo $position ?>
            </td>
            <td>
              <img src="<?php echo $TopPlayerImage0 ?>" alt="DotA2icon" />
            </td>
            <td>
              <img src="<?php echo $TopPlayerImage0 ?>" alt="DotA2icon" />
            </td>
            <td>
              <img src="<?php echo $TopPlayerImage0 ?>" alt="DotA2icon" />
            </td>
          </tr>
        </table>

        <form action='test-comment.php' method='post'>
          <ol>
            <li>
              <label>
                Name: <input type="text" name="name" class="required"/>
              </label>
            </li>
            <li>
              <label>
                Comment: <input type="text" name="comment" class="required"/>
              </label>
            </li>
            <li>
              <input type="submit" name="action" value="Send" />
              <!-- <input type="hidden" name="action" value="send"/> -->
              <input type="hidden" name="Playername" value="<?php echo $name ?>"/>
            </li>
          </ol>
          <?php echo "<p>[DEBUG Spelarnamn: " . $name . "]</p>" ?>
        </form>

        <!-- Visa kommentarer + Ta bort -->
        <?php
          $query4 = "SELECT * FROM comments WHERE Playername='$name' ORDER BY Timestamp DESC";
          $result4 = mysql_query($query4);
          while($row = mysql_fetch_array($result4))
          {
            $Name = $row['Name'];
            $Comment = $row['Comment'];
            $Time = $row['Timestamp'];
            $CommentID = $row['CommentID'];
        ?>                
          <form action='test-comment.php' method='post'>
            <table>
              <tr>
                <td><?php echo $CommentID ?>. </td>
                <td><?php echo $Time ?>. </td>
                <td><?php echo $Name ?>. </td>
                <td><?php echo $Comment ?></td>
                <td>
                  <div>
                    <input type="hidden" name="CommentID" value="<?php echo $CommentID ?>"/>
                    <input type="submit" name="action" value="Ta bort"/>
                  </div>
                </td>
              </tr>
            </table>
            </form>
          <?php 
          } //Visa kommentarer + Ta bort
      } // slut på while-loop
      ?>

      <!-- Ta hand om formulärpostning -->
      <?php

        // Lägg till kommentar
        if ($_POST['action'] == "Send") {
          echo "Action är lika 'Send'";
          if(trim($_POST['name']) == '')
          {
            echo "<br />";
            echo "name är null";
            $hasError = true;
          }
          else
          {
            $username = $_POST['name'];
            $usersafename = htmlspecialchars($username);
            $usermoresafename = mysql_real_escape_string($usersafename);
          }

          if(trim($_POST['comment']) == ''){
            echo "<br />";
            echo "comment är null";
            $hasError = true;
          }
          else{
            $comment = $_POST['comment'];
            $safecomment = htmlspecialchars($comment);
            $moresafecomment = mysql_real_escape_string($safecomment);
          }

          $Playername = $_POST['Playername'];

          echo "<p>";
          echo "DEBUG: Playername: " . $Playername . ". usermoresafename: " . $usermoresafename . ". moresafecomment: " . $moresafecomment;
          echo "</p>";
          
              if(!$hasError){
                echo"<p>DEBUG <br />";
                echo"querysend är: ";
                $querysend = "INSERT INTO comments (Playername, Name, Comment) VALUES ('$Playername', '$usermoresafename', '$moresafecomment')";
                echo"<br />";
                mysql_query($querysend) or die ("SQL-error: " . mysql_error(). " with query ". $sql);
                echo"</p>";
          } else {
            echo "<br />";
            print "Vänligen fyll i alla fält";
          }
        }

        // Ta bort kommentar
        if ($_POST['action'] == "Ta bort") {
          $varCommentID = $_POST['CommentID'];
          $querysend = "DELETE FROM comments WHERE CommentID='$varCommentID'";
          mysql_query($querysend) or die ("SQL-error: " . mysql_error(). " with query ". $sql);
          echo "Action är lika 'Ta bort'";
          echo "<br />";
          echo $querysend;
          echo "<br />";
          echo $_POST['CommentID'];
        }

      ?>
  </div>
</div>
</body>