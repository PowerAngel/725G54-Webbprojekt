<?php
function db_connect() {
    $host     = "localhost"; //databasvÃ¤rd
    $user     = "root"; //studentlogin
    $password = ""; //mysql-lösenord
    $database = "dota2"; //studentlogin
    $link_id = @mysql_connect($host, $user, $password) or die("Error: Could not contact the database server!");
    @mysql_select_db($database) or die("Error: There was a problem with the database!");
    return $link_id;
}
?>