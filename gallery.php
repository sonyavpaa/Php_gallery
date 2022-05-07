<?php
include 'config.php';
include 'edit.php';

$select ="SELECT * FROM photoapp.photo";
$result= $connphoto->query($select);
$data=mysqli_num_rows($result);



if($data) {
    while($row=mysqli_fetch_array($result)) {
        ?>
        <div class="photo"> <?php if($logged_in) { ?>
            <a href="delete.php?id=<?php echo $row['id']?>">x</a><?php } ?>
            <img src="images/<?php echo $row['filename']?>" style="width:10em;height:10em;object-fit:contain">
            <div class="editFrame">
                <?php if($logged_in) { ?>
                <form action="home.php" method="post">
                <textarea name='text' ><?php echo $row['text'] ?></textarea>
                <input name='id' class="id" value='<?php echo $row['id'] ?>'>
                    <input type="submit" class="button" name="edit" value="update text">
                    <?php } else { ?>
                        <p><?php echo $row['text'] ?></p>
                        <?php } ?>
                </form>
            </div>
            
        </div>
        <?php
    };

} else {

echo "<p class='nophotos'>no photos!</p>";
}
?>

