<?php
// cac kien thuc ve mang trong php
// cu phap khai bao mang php
$number = array(1,2,3,4,5);
$student = ['name' => 'Teo', 'age' => 21];
// 1 - kieu du lieu : array
var_dump($number); // hien ca kieu DL va du DL
echo "<br/>";
echo "<pre>";
print_r($student); // in mang(ko in kem kieu DL)
echo "</pre>";
$fruits = ['cam','mit',[1,2,3],['a','b','c']];

// truy cap vao gia tri cua phan tu nam trong mang
// cu phap: NameArray[key];
// echo $fruits[1];
//echo $fruits[3]; // ['a','b','c']
//echo $fruits[3][1];
$arrInfoCats = []; // mang rong
// bo sung phan vao mang rong
// $arrInfoCats['name'] = 'Tom';
// $arrInfoCats['age'] = 2;
// $arrInfoCats['color'] = 'black';
echo "<pre>";
//print_r($arrInfoCats);
$arrInfoCats[] = [
    'name' => 'Tom',
    'age' =>2,
    'color' => 'black'
];
$arrInfoCats[] = 10;
//print_r($arrInfoCats);
$arrNumber = [1,2,3,4,5,6,7,8,9,10];
// kiem tra so luong phan nam trong mang
// su dung ham count(NameArray);
$count = count($arrNumber);
//echo $count;
// duyet qua cac phan tu nam trong mang
// 1- for ...
for($i = 0; $i < $count; $i++){
    // in ra gia tri cac phan tu
    // NameArray[index]
    //echo  $arrNumber[$i];
    //echo "<br/>";
    if($arrNumber[$i] % 2 !== 0){
        echo  $arrNumber[$i];
        echo "<br/>";
    }
}
// 2 - foreach
foreach($arrNumber as $key => $item){
    // echo "index: {$key} - value: {$item}";
    // echo "<br/>";
    // in ra cac so le
    if($item % 2 !== 0){
        echo $item;
        echo "<br/>";
    }
}
$arrNumber2 = [10,2,3,4,50,6,7,8,9,15];
// viet ham tim gia tri nho nhat trong mang
function timPhanTuNhoNhat($arr){
    $first = $arr[0]; // de so sanh voi tat ca cac phan tu trong mang
    $count = count($arr);
    for($i = 0; $i < $count; $i++){
        if($first > $arr[$i]){
            $first = $arr[$i];
        }
    }
    return $first;
}
$kq = timPhanTuNhoNhat($arrNumber2);
//echo $kq;

$years = [2016,2017,2018,2019,2020,2021,2022];
// viet ham: tinh tong cac nam nhuan DL trong mang
function kiemTraNamNhuanDL($year){
    if($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0) ){
        return true;
    }
    return false;
}
function tinhTongNamNhuanDL($arrYear){
    $count = count($arrYear);
    $sum = 0;
    for($i = 0; $i < $count; $i++){
        if(kiemTraNamNhuanDL($arrYear[$i])){
            $sum += $arrYear[$i];
        }
    }
    return $sum;
}