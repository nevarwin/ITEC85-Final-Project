<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "itec86";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$con) {
  die("Could not connect to MySql Server");
}
