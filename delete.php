<?php
include 'config.php';
$id=$_GET['id'];
$select = "SELECT filename FROM photo WHERE id='$id'";
$selectQuery = mysqli_query($connphoto, $select);
$result = mysqli_fetch_array($selectQuery);
$filename = $result['filename'];
$delete="DELETE FROM photo WHERE id='$id'";

// checks do the local images still exists and if they do deletes them as well
if(file_exists('images/'.$filename)) {
    unlink('images/'.$filename);
}

$deleteQuery=mysqli_query($connphoto,$delete);
header('location:home.php');


?>