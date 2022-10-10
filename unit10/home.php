<?php
session_start();
require 'helpers.php';
if(!ifRedirectLogin()){
    header('Location:login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <?php
        $user = $_SESSION['username'] ?? null;
    ?>
    <h1>Welcome : <?= $user; ?></h1>
    <form method="post" action="server/logout.php">
        <button type="submit" name="btnLogout"> dang xuat</button>
    </form>
</body>
</html>