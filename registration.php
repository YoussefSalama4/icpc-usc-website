<?php

session_start();
//header('location:main.php');
$con = mysqli_connect('localhost','root','','userregistration');

//mysqli_connect_db($con,'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num != 1)
{
    $reg = " insert into usertable(name, password, phone, level) values ('$name', '$pass', '$phone','$level')";
    mysqli_query($con, $reg);
    header('location:main.php');
}

?>