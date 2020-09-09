<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "canh";
$db_name = "blogging_system";
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//define("DB_HOST", "localhost");
//define("DB_USER", "root");
//define("DB_PASSWORD", "canh");
//define("DB_DATABASE", "blogging_system");
//
//$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);


if (!$connection) {
  die("Could'nt connect to the database " . mysqli_error($connection));
}
