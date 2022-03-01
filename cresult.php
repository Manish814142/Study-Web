<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:loginform.php');
}

$ques1= $_POST['q1'];
$ques2= $_POST['q2'];
$ques3= $_POST['q3'];
$ques4= $_POST['q4'];
$ques5= $_POST['q5'];
$ques6= $_POST['q6'];
$ques7= $_POST['q7'];
$ques8= $_POST['q8'];
$ques9= $_POST['q9'];
$ques10= $_POST['q10'];
$write=0;
$wrong=0;
$left=0;

if($ques1==11){
    $write++;
}
else{
    if($ques1==NULL){
    $left++;
} else{
    $wrong++;
}
}
if($ques2==14){
    $write++;
}else{
    if($ques2=NULL){
    $left++;
} else{
    $wrong++;
}
    
}
if($ques3==14){
    $write++;
}else{
    if($ques3==NULL){
    $left++;
} else{
    $wrong++;
}
   
}
if($ques4==13){
    $write++;
}else{if($ques4==NULL){
    $left++;
} else{
    $wrong++;
};
}
if($ques5==12){
    $write++;
}else{
    if($ques5==NULL){
    $left++;
} else{
    $wrong++;
}
    
}
if($ques6==12){
    $write++;
}else{
   if($ques6==NULL){
    $left++;
} else{
    $wrong++;
}
}
if($ques7==11){
    $write++;
}else{
    if($ques7==NULL){
    $left++;
} else{
    $wrong++;
}
}
if($ques8==13){
    $write++;
}else{
    if($ques8==NULL){
    $left++;
} else{
    $wrong++;
}
}
if($ques9==12){
    $write++;
}else{
    if($ques9==NULL){
    $left++;
} else{
    $wrong++;
}
}
if($ques10==13){
    $write++;
}else{
   if($ques10==NULL){
    $left++;
} else{
    $wrong++;
}
}

$_SESSION['wright']=$write;
$_SESSION['wrong']=$wrong;
$_SESSION['left']=$left;
$_SESSION['attempt']=$atmp;

header('location:result.php');

?>