<?php

session_start();
header('location:main.php');
$con = mysqli_connect('localhost','root','','userregistration');

//mysqli_connect_db($con,'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['username'] = $name;
    header('location:user.php');
}
else
{
    header('location:main.php');
}
?>