<?php

	function conexion(){

	$host = "host=viaduct.proxy.rlwy.net";
	$port = "port=20228";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=epwCsOEGQRWpQoeJqMopeBNxGBLCgsPj";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
