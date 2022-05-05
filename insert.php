<?php
include './config.php'; 


if (isset($_POST['upload'])) {
   
    // creates local folder for images
    if(!is_dir('images')) {
        mkdir('images');
    };

    // form data for insert
    // creates unique filename
    $photo=substr($_FILES['photo']['tmp_name'], 5).$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];
    $text=$_POST['text'];
  
    // destination for images locally
    $destination ='./images/'.$photo;
    // moving the images to the destination
    move_uploaded_file($tmp_name, $destination);
       
    // insert query for database
    $insert = "INSERT INTO photo (filename, text) VALUES('$photo', '$text')";
    $insertQuery=mysqli_query($connphoto, $insert);
    } 
?>
    <a href="logout.php">Log Out</a>
    <form action="home.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="photo">Choose photo</label>
            <input type="file" name="photo" id="photo" accept="image/png, image/jpeg" required>
        </div>
        <div>
        <textarea type="text" placeholder="Whats in this photo?" name="text"></textarea>
        </div>
        <div>
            <input class="button" type="submit" name="upload" value="send it!">
        </div>
    </form>





