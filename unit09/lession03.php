<?php
// kiem tra xem co phai URL
$url = 'https://vnexpress.net';
if(filter_var($url, FILTER_VALIDATE_URL)){
    echo 'OK';
} else {
    echo 'Error';
}
echo "<br/>";

// kiem tra xem co phai email ko ?
$email = 'test@example.com';
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Yes';
} else {
    echo 'No';
}
echo '<br />';

$myUrl = 'http://example.com?tuổi=10';
$newUrl = filter_var($myUrl, FILTER_SANITIZE_URL);
echo $newUrl;
echo '<br />';

$number = "-100";
$newNumber = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
echo $newNumber;