<?php
$db = ""; //YOUR HOSTNAME
$dbuser = ""; //YOUR USERNAME
$dbpassword = ""; //YOUR PASSWORD

// creating the db server connection
$dbserver =  new mysqli($db, $dbuser, $dbpassword);

// naming and creating the database for images
$photodb = 'photoapp';
$dbserver->query("CREATE DATABASE IF NOT EXISTS $photodb");
$dbserver->query("CREATE TABLE IF NOT EXISTS $photodb.photo (id INT(10) PRIMARY KEY AUTO_INCREMENT, filename VARCHAR(25), text VARCHAR(25))");

// naming and creating the database for user
$users = 'photoappusers';
$dbserver->query("CREATE DATABASE IF NOT EXISTS $users");
$dbserver->query("CREATE TABLE IF NOT EXISTS $users.user (id INT(10) PRIMARY KEY, username VARCHAR(25), password VARCHAR(25))");

// creating a  default user
$defaultuserid = 0;
$defaultusername = 'jesse';
$defaultuserpassword = 'james';
$dbserver->query("INSERT IGNORE INTO $users.user (id, username, password) VALUES ('$defaultuserid', '$defaultusername', '$defaultuserpassword')");

// creating a variable for photo database connection
$connphoto = mysqli_connect($db, $dbuser, $dbpassword, $photodb) or die ("DB not connected");
// creating a variable for user database connection
$connusers = mysqli_connect($db, $dbuser, $dbpassword, $users) or die ("DB not connected");


?>