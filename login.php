<?php
include 'config.php';

    
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select ="SELECT * FROM user WHERE password='$password' AND username='$username'";
        $result= mysqli_query($connusers, $select);
        if(mysqli_num_rows($result) > 0) {
            login();
            header('Location: home.php');
            exit;
        }else {
            echo "Login failed";
        }}


include 'main01.php';
    ?>

<form class="userLogin" action="index.php" method="post">
    <div>
        <h3>Login:</h3>
    </div>
        <div>
            <label for="username">Username</label><input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">Password</label><input type="password" id="password" name="password">
        </div>
        <div>
           <input class="loginButton button" type="submit" name="login" value="login">
        </div>
    </form>
    <?php
    include 'main02.php'; 

