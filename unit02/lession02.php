<?php
// ham trong php
// 1- dinh nghia ham theo tieu chuan cho moi phien ban php
$c = 10; // toan cuc
function tongHaiSo($a, $b = 5){
    global $c;
    $d = 6; // bien cuc bo : chi su dung noi bo trong ham
    return $a + $b + $c +$d;
    // function: tu khoa phai viet dung 100%
    // tongHaiSo: ten ham (do LTV tu dinh nghia - khong trung voi cac ten ham ma php da dinh nghia san)
    // $n, $m : tham so hinh thuc truyen vao ham(khong bat buoc luc nao cung phai co tham so)
    // return: tu khoa - tra ket qua ve cho ham va thoat khoi ham (nhung cau lenh ben duoi tu khoa return se ko dc thuc thi nua)
}
// su dung ham
$kq = tongHaiSo(2, 3); // 2,3 tham so thuc(that)
echo $kq;
echo "<br/>";

// function declaration
function b(){
    $a = a(); // goi ham trong ham
    return $a;
}
echo b();
function a(){
    return 1;
}
// viet ham kiem tra so nguyen to
function kiemTraSoNT($n){
    if($n <= 1){
        return false;
    }
    $flag = true;
    for($i = 2; $i <=  sqrt($n); $i++){
        if($n % $i === 0){
            //return false;
            $flag = false;
            break;
        }
    }
    return $flag;
    // return true;
}