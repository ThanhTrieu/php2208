<?php

function uploadFile(){
    if(isset($_POST['btnUpload'])){
       if(!empty($_FILES['upload'])){
            $check = true;
            foreach($_FILES['upload']['name'] as $key => $val) {
               $tmp  = $_FILES['upload']['tmp_name'][$key];
               $name = $_FILES['upload']['name'][$key];
               $check = move_uploaded_file($tmp, '../uploads/'.$name);
               if(!$check){
                    break;
               }
            }
            if($check){
                // header
            } else {
                // header
            }
       }
    }
}
uploadFile();