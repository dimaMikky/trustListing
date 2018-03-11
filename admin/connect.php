<?php
	If ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
		$con=mysql_connect("localhost","root","") or die('Error DataBase connection1'); }
	else {
		$con=mysql_connect("localhost","gambling","gambling") or die('Error DataBase connection1');
	};
    mysql_select_db("gambling") or die('Error DataBase connection2');
?>