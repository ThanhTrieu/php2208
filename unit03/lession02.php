<?php
// cac kien thuc ve chuoi trong php
// chuoi duoc khai bao trong nhay don hoac nhay kep
// dung nhay kep thi su dung bien trong chuoi duoc - nhay don thi ko
$time = "18h30";
$string = "Dang hoc php co ban bat dau tu luc {$time}";
//echo $string;
$myString = "Hoc \"php\" ";
$myString2 = 'Hoc "PHP" ';
//echo $myString;
$script = "<script>alert('hello')</script>";
$script2 = htmlentities($script);
$script3 = html_entity_decode($script2);
// $script3 === $script
//echo $script3;

$string2 = "Dang hoc js";
$newStr = str_replace('js','php',$string2); // thay the ky tu nam trong chuoi
//echo $string2 . " -- " . $newStr; // . toan tu ghep chuoi

$title = "<h1>Ngay mai la <em>Trung Thu </em></h1>";
//echo strip_tags($title,'<h1>,<em>');

if(strpos($newStr, 'php') !== false){
    // tim thay ky tu trong chuoi
    echo "oke";
}
$title2 = "     Sap dc nghi roi";
echo ltrim($title2); // ko truyen tham so thu 2 thi mac dinh hieu la xoa khoang trang
echo "<br/>";
echo rtrim($title2,'roi');
