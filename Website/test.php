<?php


define('DB_NAME', 'Drinks');
define('DB_USER', 'awsuser');
define('DB_PASSWORD, 'GeHir4urh6cDuz2qhlpg');
define('DB_HOST', 'drinks.clphufpnignj.us-east-1.rds.amazonaws.com');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 3306);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected){
	die('Cant\'t use ' . DB_NAME . ': ' . mysql_error());
}

echo 'Connected successfully';

?>