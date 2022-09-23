<?php
if(isset($_POST['btnLogin'])){
    $username = trim(strip_tags($_POST['username']) ?? '');
    $password = trim(strip_tags($_POST['password']) ?? '');

    // kiem tra tinh hop le cua du lieu
    if(empty($username) || empty($password)){
        header('Location:../lession02.php?state=error');
        exit();
    }

    if(checkUserLogin($username, $password)){
        // dang nhap thanh cong
        // chuyen trang - ve trang home.php
        header('Location:../home.php');
        exit();
    }
    // khong thanh cong
    // quay ve lai dung form dang nhap
    header('Location:../lession02.php?state=failure');
}

function checkUserLogin($username, $password){
    $data = readDataFile('../database/data.txt');
    // so sanh voi du lieu nguoi dung gui len
    $matchData   = "{$username}/{$password}";
    $arrDataUser = explode(';',$data);
    return in_array($matchData,$arrDataUser);
}

function readDataFile($pathFile){
    if(empty($pathFile)){
        return null;
    }
    $openFile = fopen($pathFile, 'r');
    if($openFile){
        $data = fread($openFile, filesize($pathFile));
        return $data;
    }
    return null;
}