<?php
// nhan cac du lieu tu lession01 gui len bang method GET
// su dung mot bien  supper global
// $_GET : ban chat la mot bien kieu mang
// chua tat ca cac du lieu tu method get gui len
echo "<pre>";
//print_r($_GET);
$id = $_GET['id'] ?? null;
// $id = isset($_GET['id']) ? $_GET['id'] : null;