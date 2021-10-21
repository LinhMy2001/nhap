<?php
    //Doc và hiển thị danh sách tệp tin trong thư muc resuly
    $_FILES = scandir('result/'); //file là 1 mảngg
    foreach($_FILES as $_FILES){
        echo $_FILES.'<br>';
    }
    //lấy ra 1 tệp tin bất kì
    $FILES_1=$FILES_[2];
    echo $FILES_1; //tachs chuỗi
    echo '<br>';
    $mark = explode('.',$items[6][0]);
    echo $mark;
    echo '<br>';
    $path = 'result/'.$file_1;
    echo 'a href="view.php?file ='.$path.'</a>';
?>