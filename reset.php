<?php

$con = mysqli_connect('localhost','root','','userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$ph = $_POST['phone'];
$s = " select * from usertable where name = '$name' && phone = '$ph'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    if(isset($_POST['del']))
    {
        $del = "delete from usertable where name = '$name' && password = '$pass' && phone = '$ph'";
        $result = mysqli_query($con,$del);
        header('location:register.php');

    }
    else
    {
        $query = "UPDATE usertable SET password='$pass' WHERE name = '$name'";
        $edit = mysqli_query($con, $query);
        header('location:main.php');
    }
    
}
else
{
    header('location:forgetPassword.php');

}



?>