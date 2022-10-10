<?php
// get data cookie
// su dung bien super global $_COOKIE
// $_COOKIE : bien kieu mang
$myCookie = $_COOKIE['t3h'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get data cookie</title>
</head>
<body>
    <h1> Data Cookie: <?= $myCookie; ?></h1>
    <a href="lession03.php"> xoa cookie</a>
</body>
</html>