<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>introduction</title>
    <link href="css/costomstyle.css" rel="stylesheet">
    <link href="css/quiz.css" rel="stylesheet">
</head>
<body style="background-image:linear-gradient(to right, #ee9ca7, #ffdde1); ">
   <div id="head">
 <?php require_once("include/header.php");?>
 </div>
    <div id="about">
        <div id="pic">
            <img src="image/shibli.jpg">
        </div>
         <h1 id="names">SHIBLI RAJA</h1>
        <center><p id="plines">
           Hello, This is Shibli one the developer of StudyWeb.<br> By occupation, I am a student of BCA and love to<br> learn about computers and web technologies.I always try to learn new things about web designing<br> to improve myself in web development.StudyWeb is the first website I have ever <br>designed and developed with the help of my teammates.<br> Thank You.
        </p></center>
    </div>
    <div id="about">
        <div id="pic">
            <img src="image/sonali.jpg">
        </div>
         <h1 id="names2">SONALI CHOUDHARY</h1>
        <center><p id="plines">
           I am Sonali Choudhary.I am in my final year of education <br>this is my first ever project i worked on.I am very enthusiastic to learn<br> new languages ,technology and love fixing problem.i want to be very<br> skilled web designer so,I am working on this and seeking for an opportunity to <br>learn and grow.
        </p></center>
    </div>
    <div id="about">
        <div id="pic">
            <img src="image/manish.jpg">
        </div>
        <h1 id="names"> MANISH SINGH</h1>
       <center> <p id="plines">
           My name is Manish Singh, I am an outgoing and energetic<br> young professional, seeking a career that fits my professional skills, personality. And I would like to be a<br> partof such an organization which encourages my knowledge <br> sharing and performance. 
My skills are as follows- Good knowledge of C,C++, <br>Java,Data Strucute,HTML5,CSS3,PHP,MYSQL and Javascript.
       <br>Thank You.
        </p></center>
    </div>
    <div id="dwn">
        <?php require_once("include/footer.php");?>
    </div>
</body>
</html>