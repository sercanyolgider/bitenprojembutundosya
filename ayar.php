<?php

$host = "localhost";
$user = "root";
$pass = "";

$connect = mysql_connect($host,$user,$pass);

if(! $connect) die("MySQL Veritabani Baglantisi Saglanamadi !!");

$db = "test";

mysql_select_db($db,$connect) or die ("Veritabani Baglantisi Saglanamadi");

 ?>