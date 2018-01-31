<?php
$server = 'sql12.freesqldatabase.com';
$username   = 'sql12218697';
$password   = 'uJEXQMxpDw';
$database   = 'sql12218697';
 $connection=mysqli_connect($server, $username,  $password);
if(!$connection)
{
    exit('Error: could not establish database connection');
}
$db=mysqli_select_db($database);
if(!$db)
{
    exit('Error: could not select the database');
}	
?>
