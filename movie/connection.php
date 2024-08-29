<?php

$dbhost = "localhost";
$dbuser = "fbeni";
$dbpass = "DutchGiant2";
$dbname = "fbeni";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
