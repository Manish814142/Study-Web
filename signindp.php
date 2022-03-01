<?php

$con = mysqli_connect('localhost','root');
if(!isset($_POST['submit'])){

mysqlI_select_db($con,'studyweb');

$fname= $_POST['firstname'];
$lname= $_POST['lastname'];
$mail= $_POST['email'];
$user= $_POST['username'];
$pass= $_POST['password'];

$check="select * from userdata where username = '$user' && password = '$pass'";
$result=mysqli_query($con,$check);
$num =mysqli_num_rows($result);
if($num==1){
    $msg="duplicate data";
    header('location:signinform.php?msg='.$msg);
}
else{
    $insert ="insert into userdata(firstname,lastname,email,username,password) values ('$fname','$lname','$mail','$user','$pass')";
    mysqli_query($con,$insert);
    $msg="Registration Succesfull Please Login";
    header('location:signinform.php?msg='.$msg);
}
}
?>