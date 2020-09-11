<?php

$user = 'root';
$pass = '';
$banco = 'login';

$conn = mysqli_connect('localhost',$user,$pass,$banco);
mysqli_set_charset($conn, 'utf8');
?>