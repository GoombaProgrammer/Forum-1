<?php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'db';
 $connection=mysqli_connect($server, $username,  $password);
if(!$connection)
{
    exit('Error: could not establish database connection');
}
$db=mysqli_select_db( $connection, $database);
if(!$db)
{
    exit('Error: could not select the database');
}	
?>
