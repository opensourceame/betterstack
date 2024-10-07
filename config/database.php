<?php

/*
* This is template of database config.
* Fill out database configuration options below and rename this file to 'database.php'
*/

$database = array(
	'address' 	=>  getenv('DB_ADDRESS')  ? getenv('DB_ADDRESS')  : 'localhost',
	'username'	=>  getenv('DB_USERNAME') ? getenv('DB_USERNAME') : 'betterstack',
	'password'	=>  getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : 'setterback',
	'database'	=>  getenv('DB_DATABASE') ? getenv('DB_DATABASE') : 'betterstack'
);
