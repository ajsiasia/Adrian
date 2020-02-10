<?php

$db_username = 'admin';
$db_password = 'root1234';
$db_hostname = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com';
$db_port = '3306';
$db_name = 'db_1821599';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$q = "SELECT * FROM information";
$r = mysqli_query($conn, $q);

header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>";
while ($item = mysqli_fetch_object($r)) {
	echo "<item>
	<firstname>$item->firstname</firstname>
	<lastname>$item->lastname</lastname>
	<address>$item->address</address>
	<contacts>$item->contacts</contacts>
	</item>
	";
}