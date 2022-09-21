<?php
// cac ham bo tro trong mang php (co san)
$student = ['NAME' => 'Teo', 'AGE' => 20];
$newSt = array_change_key_case($student, CASE_LOWER);
echo '<pre>';
//print_r($newSt);
$number = [1,2,3,1,2,1,2];
$newNumber = array_count_values($number);
//print_r($newNumber);
array_push($number,5);// them phan tu vao cuoi mang
//print_r($number);
$lastEl = array_pop($number);
//echo $lastEl;
echo "<br/>";
//print_r($number);
array_unshift($number,$lastEl);
//print_r($number);
$firstEl = array_shift($number);
//echo $firstEl;
echo "<br/>";
//print_r($number);
$arrNumber = [1,2,3,4,5,6,7,8,9];
$newArrNumber = array_chunk($arrNumber, 2);
//print_r($newArrNumber);
if(is_array($newArrNumber)){
    echo "OK";
}
echo "<br/>";
if(in_array(6,$arrNumber)){
    echo "Yes";
}
echo "<br/>";
if(array_key_exists('AGE', $student)){
    echo 1;
}
echo "<br/>";
$arrUnique = [1,1,2,2,3,4,3,5];
$newArrUnique = array_unique($arrUnique);
//print_r($newArrUnique);
$newStudent = array_values($student);
//print_r($newStudent);
$sum = array_sum($newArrUnique);
//echo $sum;
$newChildArr = array_slice($arrUnique,-2,3,true);
//print_r($newChildArr);
array_splice($arrUnique,2,2,[100,200]);
//print_r($arrUnique);
// viet ham xu ly : lay ma id cua link bai viet trang vnexpress
function getIdPostFromUrl($url){
    $arrUrl = explode('-',$url);
    $endEl  = end($arrUrl); // id.html ?? lay dc id ra ??
    return intval($endEl); // lay ra so nguyen trong chuoi
}
$url = 'https://vnexpress.net/viet-nam-vs-singapore-4514126.html';
$result = getIdPostFromUrl($url);
//print_r($result);
// sap xep mang
$randomNumber = [100,200,1,3,10,5,8,2,9];
//asort($randomNumber);
//arsort($randomNumber);
//print_r($randomNumber);
$fruits = ['f' => 'Tao', 'a' => 'Mit', 's' => 'Oi'];
//ksort($fruits);
//print_r($fruits);
// viet ham sap xep mang theo trat tu tang hoac giam dan
function sapXepMang($arr){
    // 1 - for
    /*
    $tmp = null;
    for($i = 0; $i < count($arr); $i++){
        for($j = $i+1; $j < count($arr); $j++){
            if($arr[$i] < $arr[$j]){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    */
    // 2 foreach
    $tmp = null;
    foreach($arr as $i => $item){
        foreach($arr as $j => $val) {
            if($arr[$i] < $arr[$j]){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    return $arr;
}
print_r(sapXepMang($randomNumber));
// tim kiem tuyen tinh
foreach($randomNumber as $i){
    if($i == 10){
        //
    }
}