<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/02/2020
 * Time: 5:19 PM
 */
$conn = mysqli_connect('localhost','root','','product');
if ($conn) {
    $setlang=mysqli_query($conn,"SET NAMES 'utf8'");
}
else {
    die("Kết nối thất bại".mysqli_connect_error());
}
?>


