<?php
// khong duoc phep truy cap thang truc tiep vao day
// moi ung dung deu chay qua file root index.php
if(!defined('APP_PATH')){
    die('Ban khong co quyen truy cap');
}
// load model vao controller
require 'model/Movie_model.php';

function Movie(){
    // goi du lieu tu model ra
    $data = searchMovieByName();
    // goi view
    require 'view/movie_view.php';
}
Movie();