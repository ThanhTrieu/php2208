<?php
session_start();
require 'data/productions.php';

$method = $_GET['m'] ?? null;
$method = trim(strtoupper($method));

switch ($method) {
    case 'ADD':
        addToCart();
        break;
}
function addToCart() {
    $id = $_GET['id'] ?? null;
    $id = is_numeric($id) ? $id : 0;
    $productions = getDataProductions();
    // lay ra dc san pham nam trong productions theo id truyen len
}