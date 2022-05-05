<?php

/*
Open this in browser and visualize

Step 1: Read the code in include files
Step 2: Try to login and see how the page layout looks

*/

include 'includes/sessions.php';

if(!isset($_SESSION['logged_in'])) {
    include 'login.php';
} else {
include 'main01.php';
include 'insert.php';
include 'main02.php';}


?>
