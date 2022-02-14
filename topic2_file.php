<?php
$filename= 'test.txt';
$mode = 'a+'; //Mở file để đọc và ghi. Tạo ra file mới nếu file không tồn tại. 
  $myfile = fopen($filename, $mode);

  fread( $myfile,filesize($filename)); // Đọc file

  fwrite($myfile, date('Y-M-d H:i:s').'----'); // Ghi file

  fclose($myfile);

  echo fileperms($filename);


if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '
';
}





?>