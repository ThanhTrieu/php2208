<?php
// bieu thuc chinh quy
// regular expression
$string = "phpAD";
// kiem tra trong chuoi co tu php ?
// xay dung 1 btcq kiem tra xem trong chuoi ban dau co tu khoa php ?
$btcq = '/php/'; // // khai bao bieu thuc chinh quy - tat cac cu phap nam trong do
// can kiem tra xem btcq co hoat dong voi du lieu truyen vao hay ko?

// kiem tra xem chuoi co bat dau bang ky tu php hay ko?
$btcq2 = '/^php/';

// kiem tra xem chuoi co ket thuc bang ky tu php hay ko?
$btcq3 = '/^php$/';

// kiem tra trong chuoi chi chua cac ky tu la chu cai va la chu thuong
$btcq4 = '/^[^0-9]{3,5}+$/'; //  + 1 hoac nhieu lan xuat hien
// [] : pham vi
// {} : do dai
/* / ? . + *  */ // cac ky tu nam trong bieu thuc chinh quy

$str = "hom nay hoc php phai ko ?";
$btcq5 = '/\?$/'; // kiem tra ? co nam cuoi chuoi ko

if(preg_match($btcq5, $str, $match)){
    //echo "Tim thay";
    // $match : bien tuy chon(co the truyen vao hoac bien)
    // $match : tra ve mang chua cac ket qua ma btcq tim thay
    echo "<pre>";
    print_r($match);
} else {
    echo "Ko tim thay";
}
echo "<br/>";
// kiem tra 1 so co 3 chu so: so thu nhat tuy y(ko bang 0 (1-9)), so thu 2 la so le. so thu 3 la so chia het cho 5
// 235 : hop le
$number = '236'; // du lieu can kiem tra
$btcq6 = '/^[1-9][1,3,5,7,9][0,5]$/';
if(preg_match($btcq6, $number, $match)){
    echo "<pre>";
    print_r($match);
} else {
    echo "Ko tim thay";
}
echo "<br/>";
// | ()
// kiem tra xem co phai so dien thoai nha mang viettel voi dau so 09 ???
$phone = '0981234567';
$checkPhone = '/^[09]{2}[6-8]\d{7}$/';
if(preg_match($checkPhone, $phone, $match)){
    echo "<pre>";
    print_r($match);
} else {
    echo "Ko tim thay phone";
}
echo "<br/>";
// dd/mm/yyyy
// 01/02/2002
// viet bieu thuc chinh quy kiem tra dinh dang ngay thanh theo chuan VN
$date = "29/02/2022";
$checkDate = "/^(0[1-9]|1\d|2\d|3[0-1])\/(0[1-9]|1[0-2])\/([1-9]\d{3})$/";
// ??? MySQL ???
if(preg_match($checkDate, $date, $match)){
    //echo "<pre>";
    //print_r($match);
    // xu ly logic kiem tra xem du lieu ngay thang dung hay sai
} else {
    echo "Dinh dang ngay thang khong dung";
}
// ????
// viet bieu thuc chinh quy kiem tra do manh yeu cua mk
// 8 ky tu tro len, it mot chu thuong, it nhat mot chu hoa, it nhat 1 con so, it nhat 1 ky tu dac biet