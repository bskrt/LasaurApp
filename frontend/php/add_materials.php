<?php
// //Configure and Connect to the Databse
include 'config.php';

 //Pull data from home.php front-end page
 if($_POST) {
 $name=$_POST['Name'];
 $feed=$_POST['Feed'];
 $power=$_POST['Power'];
 //Insert Data into mysql
$query=mysql_query("INSERT INTO materials(name,feed,power) VALUES('$name','$feed','$power')");

if($query){
echo "Data for $name inserted successfully!";
}
else{ echo "An error occurred!"; }
}
?>