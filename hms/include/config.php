<?php
define('DB_SERVER','127.0.0.1');
define('DB_USER','devroot');
define('DB_PASS' ,'123');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>