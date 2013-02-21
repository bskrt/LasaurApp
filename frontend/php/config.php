<?php
// Connection's Parameters
$db_host="localhost";
$db_name="lasersaur";
$username="root";
$password="root";

// Connection
$cnx = mysql_connect($db_host,$username,$password);
if (!$cnx) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($db_name, $cnx);
?>