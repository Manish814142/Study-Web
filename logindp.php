<?php
session_start();

$con = mysqli_connect('localhost','root');

mysqlI_select_db($con,'studyweb');

if(!isset($_POST['submit'])){

$user= $_POST['username'];
$pass= $_POST['password'];

$check="select * from userdata where username = '$user' && password = '$pass' ";
$result=mysqli_query($con,$check);
$num =mysqli_num_rows($result);
if($num==1){
   $_SESSION['uname']=$user;
    $_SESSION['passw']=$pass;
header('location:index.php');
}
else{
 $error="User Not Found!!";
header('location:loginform.php?error='.$error);
}
}
?>
