<?php
//echo "<h1> Hi you</h1>";
// khai bao bien trong php
$myName = 'Trieu';
//$: ky tu cu phap bat buoc phai co
// mot bien dc goi la hop le
// khong co khoang trang giu ky tu $ va ten bien
//$ myAge = 10; // sai
// ten bien khong duoc phep bat dau bang chu so
//$1myEmail = 'trieu@gmail.com'; // sai
// cach dinh nghia hang so
define('PI', 3.14);
//PI = 3.15; // khong dc phep thay doi gia tri cua hang so
// hang so ko co ky tu $
echo PI;
const AGE = 20;
echo AGE;

// lam quen cac kieu du lieu co ban
// 1 - int
$a = 10; // gia tri so nguyen
echo "<br/>";
echo gettype($a);
// 2 - float
$b = 31.4;
echo "<br/>";
echo gettype($b);
// 3 - boolean
$checking = true;
echo "<br/>";
echo gettype($checking);
// 4 - string
$title = 'Sap dc nghi roi';
// 5 number string
$phone = '04334545';
$n1 = '10';
$n2 = 10;
$n3 = $n1 + $n2;
echo "<br/>";
echo $n3;
echo "<br/>";
echo gettype($n3);
// 0 == '' == false 
// 1 == true
$test = false;
if($test === 0){
    echo 'OK';
} else {
    echo 'ERR';
}