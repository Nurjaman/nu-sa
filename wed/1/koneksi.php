<?php
//KONVERSI PHP KE PHP 7
ob_start();
require_once "parser-php-version.php";

$mysql_host = "localhost";
$mysql_user = "nuss3952";
$mysql_pass = "1Ba9f1DT5TtW44";
$mysql_dbname = "nuss3952_sidoi";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_dbname);
if(! $conn ) {
  die('Database tidak terhubung ' . mysql_error());
}

?>

