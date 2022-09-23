<?php
// echo '<pre>';
// print_r($_GET);
if(isset($_GET['btnSend'])){
    $username = $_GET['username'] ?? '';
    echo $username;
}