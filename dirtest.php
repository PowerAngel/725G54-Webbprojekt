<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv">

<head>

    <title>DotA 2 - players</title>
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
	<link media="screen" rel="stylesheet" href="stylesheets/stylesheet.css"/>

</head>


<body>
	<?php
			$dir = opendir('\\images\players\navi');
			while(($file = readdir($dir))!=false)
			{
				echo "filename: " . $file . "<br/>";
			}
			closedir($dir);






			if ($handle = opendir('/images')) 
			{
    	 	echo "Directory handle: $handle\n";
   		 	echo "Entries:\n";

   			 /* This is the correct way to loop over the directory. */
   		 	while (false !== ($entry = readdir($handle))) 
   		 	{
     	 	  echo "$entry\n";
   	 	 	}

    		/* This is the WRONG way to loop over the directory. */
   			 while ($entry = readdir($handle)) {
       		 echo "$entry\n";
    		}

    		closedir($handle);
}
	?>

</body>

