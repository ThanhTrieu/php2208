<?php
declare(strict_types=1); // giup phat hien loi cac cu phap theo chuan phien ban php7 tro len

// tiep tuc cac kien thuc ve ham trong php
// truyen tham so theo kieu tham chieu - tham tri trong ham php
// 1 - tham tri: tham so truyen ham khong bi thay doi theo logic trong ham

$n = 10;
function test($number){
    // truyen tham so theo kieu tham tri
    $number += 10;
    return $number;
}
echo test($n); // ???
echo "<br/>";
echo $n; // ket qua van nhu ban dau  so voi truoc khi truyen vao ham
//  2 tham chieu(tham bien): tham so truyen vao ham se bi thay doi theo logic trong ham

$m = 10;
function demo(&$number){
    // truyen bien vao ham theo kieu tham chieu
    // co ky tu & dung dang truoc ten bien
    $number += 30;
    return $number;
}
echo "<br/>";
echo demo($m); // ???
echo "<br/>";
echo $m; // ???
/***********************************************/
// bien static trong function php
// su dung tu khoa static khai bao bien trong ham

function testStatic(){
    static $count = 0;
    $count++;
    echo $count;
}
echo "<br/>";
testStatic(); // ???
echo "<br/>";
testStatic(); // ???
echo "<br/>";
testStatic(); // ???
/*****************************************/

// Dinh nghia ham theo chuan cua php 7 tro len
function tongHaiSo(int $a, int $b) : float {
    return $a+$b;
    //return "{$a} + {$b}"; // su dung bien trong chuoi
    // :int : yeu cau phai tra ket qua ve la int
    // int $a: tham so truyen vao ham bat buoc phai co kieu int
}
echo "<br/>";
echo tongHaiSo(1,2);
// viet ham theo chuan php 7: kiem tra 1 so co phai la so chinh phuong ko ?

function kiemTraSoCP(int $n) : bool {
    // tim dc gia can bac hai cua so can kiem tra
    $m = sqrt($n); // float
    //var_dump($m);die;
    // $m : co phai la so nguyen ko ?
    if(filter_var($m, FILTER_VALIDATE_INT)){
        return true;
    }
    return false;
}
echo "<br/>";
$number = 80;
if(kiemTraSoCP($number)){
    echo "{$number} la so chinh phuong";
} else {
    echo "{$number} ko phai la so chinh phuong";
}
// viet ham cho biet tu 1 - 100 co bao nhieu so cp???
function demSoCP(int $u, int $v) : int {
    $count = 0;
    for($i = $u; $i <= $v; $i++){
        if(kiemTraSoCP($i)){
            $count += 1;
        }
    }
    return $count;
}
echo "<br/>";
echo demSoCP(1,100);
echo "<br/>";
// *******************************************
// lamda function
// ham khong co ten va dai dien thong qua 1 bien
$kiemTraCL = function(int $n) : bool {
    return $n % 2 === 0;
};
if($kiemTraCL(2)){
    echo "so chan";
} else {
    echo "so le";
}
echo "<br/>";
$d = 10;
//Lamda Closures
$sumNumber = function(int $a, int $b) use ($d) : int {
    //global $d;
    return $a + $b + $d;
};
echo $sumNumber(1,2);