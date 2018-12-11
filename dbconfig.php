<?php
$host = 'localhost';
$user = 'root';
$password = '123456';
$database = 'usertest';

$conn = mysqli_connect($host, $user, $password, $database);

mysqli_query("set session character_set_connection=utf8;");
mysqli_query("set session character_set_results=utf8;");
mysqli_query("set session character_set_client=utf8;");

?>