<?php 
const DB_HOST = 'mydb15.surf-town.net';
const DB_USER = 'hb47298_hellokit';
const DB_PASS = 'hellosecret';
const DB_NAME = 'hb47298_hellokittydb';

$connection = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($connection->connect_error) {
		die('Connect Error ('.$connection->connect_errno.') '.$connection->connect_error);	
	}
$connection->set_charset('uft8');
?>