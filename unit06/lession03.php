<?php
// tiep cac kien thuc ve xu ly file
// cac ham co san ho tro xu ly file
// ktem tra xem file co ton tai
if(file_exists('data/user.txt')){
    echo 'File co ton tai';
}
echo "<br/>";
// kiem tra xem file co dc cap quyen ghi du lieu
if(is_writable('data/user.txt')){
    //echo 'File dc phep ghi du lieu';
    // ghi noi dung vao file - ko can dung fwrite
    file_put_contents('data/user.txt','Hoc php xu ly file');
}
// doi ten file
if(file_exists('data/logs.txt')){
    // doi ten file
    //rename('data/user.txt','data/logs.txt');
    //echo 'doi thanh cong';

    // copy file
    //copy('data/logs.txt','data/test.txt');
    //echo 'copy thanh cong';

    if(file_exists('data/test.txt')){
        // xoa file
        unlink('data/test.txt');
    }
}

// kiem tra thu muc co ton tai ko?
if(!is_dir('data/sql')){
    // tao thu muc
    mkdir('data/sql');
}