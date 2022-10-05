<?php
define('PATH_UPLOAD_FILE', '../uploads/');

function changNameFile($nameFile = null)
{
    if($nameFile === null){
        return false;
    }
    $arrNameFile = explode('.', $nameFile);
    $extension = is_array($arrNameFile) ? end($arrNameFile) : null;

    if($extension === null){
        return false;
    }
    $file = rand(5, 15).time();
    return $file.".".$extension;
    // tao ngau nhien ten ko trung lap
}

function checkTypeFile($typeFile = null){
    if($typeFile === null){
        return false;
    }
    $allowTypeFiles = ['image/jpeg','image/jpg','image/png'];
    return in_array($typeFile,$allowTypeFiles);
}

function uploadFile()
{
    if(isset($_POST['btnUpload'])){
        // muon nhan dc thong tin file tu client gui len
        // dung bien super global $_FILES
        // $_FILES : mang chua thong file gui len
        // kiem tra nguoi dung co upload file len ko?
        if(!empty($_FILES['upload'])){
            $tmpName  = $_FILES['upload']['tmp_name'];
            $nameFile = $_FILES['upload']['name'];
            $nameFile = changNameFile($nameFile);
            //var_dump($nameFile);die;
            $typeFile = $_FILES['upload']['type'];
            if(checkTypeFile($typeFile)){
                $up = move_uploaded_file($tmpName, PATH_UPLOAD_FILE.$nameFile);
                if($up){
                    header("Location:../upload.php?state=ok&img={$nameFile}");
                }else {
                    header("Location:../upload.php?state=error"); 
                }
            } else {
                // nguoi dung up file ko dung dinh dang
                header("Location:../upload.php?state=error_type"); 
            }
        }
    }
}
uploadFile();