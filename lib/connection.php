<?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "user_system";

//$user_name = $_REQUEST['username'];     
//$user_password=$_REQUEST['password'];
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
mysqli_set_charset($conn,'utf8');

if (mysqli_errno($conn)) {
    echo mysqli_error($conn);
    exit;
}else{
  // echo'connection ok';
}


?> 