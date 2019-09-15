<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'testtabl.mysql.tools');
define('DB_USERNAME', 'testtabl_1');
define('DB_PASSWORD', 'c1!5#6mCaK');
define('DB_NAME', 'testtabl_1');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>