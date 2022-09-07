<?php
// cac menh de dieu kien va vong lap co ban trong php
// 1 - menh de if
// 2 - menh de if ... else
$a = 10;
if($a > 9){
    echo "OK";
} else {
    echo "ERROR";
}
// 3 - menh de if ... else long nhau
if($a > 15){
    // do something
} elseif($a > 14) {
    // do something
} elseif($a > 1) {
    // do something
} elseif($a > 5) {
    // do something     
} else {
    // do something
}
//lenh tiep theo

// switch ... case
$month = 9;
switch($month){
    case 1:
        // do something
        break;
    case 2:
        // do something
        break;
    case 9:
        // do something
        break;
    case 12:
        // do something
        break;
    default:
        // do something
        break;
}
// cac vong lap co ban trong php
// 1 - for ....
for($i = 1; $i <= 10;$i++){
    if($i % 2 === 0){
        echo $i;
    }
}
echo "<br/>";
// 2 - while() : kiem tra dieu kien truoc
$j = 1;
while($j <= 10){
    echo $j;
    $j++;
}
echo "<br/>";
// 3 - do ... while : kiem tra dieu kien sau
// tu 1 - 10 in ra cac so le
$v = 1;
do {
    if($v % 2 !== 0){
        echo $v;
    }
    $v++;
} while ($v <= 10);
// 
$n = 10;
$m = 20;
$n += $m; // $n = $n + m;
echo $n; // ??? 30
echo "<br/>";
$t = 9;
$u = 10;
$s = (++$u) + ($t++) - ($u++) + (++$t) - ($u--) + (--$t);
$s1=     11   +   9    -   11   +   11   -   12   +    10;
echo $s1; // ??? 
// 17
// 18
// 20