<?php 
//connection to mySQL
$host="sql36.main-hosting.eu";
$username="u597185849_ghazi";
$password="keghazian999";
$link = mysqli_connect($host,$username,$password)or die("Could not connect");
//connection to database
$db = mysqli_select_db( $link,"u597185849_ghazi")or die("Could not select database");
?>
