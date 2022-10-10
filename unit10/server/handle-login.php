<?php
session_start();

function checkLoginUser() {
    if(isset($_POST['btnLogin'])){
        $user = $_POST['username'] ?? null;
        $user = trim(strip_tags($user));

        $pass = $_POST['password'] ?? null;
        $pass = trim(strip_tags($pass));
        if($user === 'admin' && $pass === '12345'){
            // tao session
            $_SESSION['username'] = $user;
            header('Location:../home.php');
        } else {
            header('Location:../login.php?state=fail');
        }
    }
}
checkLoginUser();