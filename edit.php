<?php

include 'config.php';
if(isset($_POST['edit'])) {

    $text = $_POST['text'];
    $id = $_POST['id'];
    $query = "UPDATE photo SET text='$text' WHERE id=$id";
    $editQuery=mysqli_query($connphoto, $query);

;}

?>