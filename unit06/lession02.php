<?php
// cac kie thuc ve file trong php
// 1- mo file
$file = fopen('data/user.txt','a+');
if($file){
    //echo "Ban mo file thanh cong";
    $data = fread($file, filesize('data/user.txt'));
    $content = 'Dang hoc php co ban';
    fwrite($file, $content);
    $file2 = fopen('data/user.txt', 'r');
    $data2 = fread($file2, filesize('data/user.txt'));
    fclose($file);
    fclose($file2);
    echo $data2;
} else {
    echo "Khong mo dc file";
}