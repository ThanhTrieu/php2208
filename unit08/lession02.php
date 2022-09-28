<?php
// thiet lap mui gio
// goi no truoc cac ham xu ly ve thoi gian
date_default_timezone_set('Asia/Ho_Chi_Minh');

// cac kien thuc xu ly thoi gian trong php
$date = date('Y-m-d H:i:s'); // dinh dang thoi gian can hien thi
//echo $date;
$year = date('Y');
$month = date('m');
$day = date('d');
//
$today = date('Y-m-d');
$yesterday = '2022-09-27';
// so sanh ngay nao lon hon
$timeToday = strtotime($today);
$timeYesterday = strtotime($yesterday);
if($timeToday > $timeYesterday){
    // 
}
$nextWeek = date('Y-m-d',strtotime('-3 week'));
//echo $nextWeek;
$convertDate = date('Y-m-d H:i:s', $timeToday);
//echo $convertDate;
$addTime = mktime(0,0,0,9,28+12,2022);
//echo date('Y-m-d', $addTime);
if(checkdate(2,28,2022)){
    echo 'ok';
}