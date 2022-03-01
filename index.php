<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Study Web</title>
        <link href="css/costomstyle.css" rel="stylesheet">
    <script src="js/joinus.js"></script>
</head>
<body>
  <div id="head">
    <?php require_once("include/header.php");?>
</div>
   
        <div class="mainarea">
         <h1 id="heading">About StudyWeb</h1> 
        <center><p id="abt">Computerized and online systems have been increasing in every<br> aspects of education.information technology plays a very important role in nowadays education.<br>
        Here we are providing you quizzes related to computer programs.<br>we are providing a good efforts that you can make a better version of yourself.<br>
        this website helps you to participate in online quizes by loging in to our website.we are providing <br>c++,php,java,html,css quizzes to the interested ones.</p></center>
        </div>
        <div class="category">
            <h1 id="title"> Our Developers Team</h1>
            <div id="image1"><a href="intropage.php"><img src="image/shibli.jpg" alt=""></a></div>
            <div id="image2"><a href="intropage.php"><img src="image/sonali.jpg" alt=""></a></div>
            <div id="image3"><a href="intropage.php"><img src="image/manish.jpg" alt=""></a></div>
                <h1 id="bottom1">MD SHIBLI<br><br><br><small>RAJA</small> </h1>
            <h1 id="bottom2">SONALI<br><br><br><small>CHOUDHARY</small> </h1>
                <h1 id="bottom3">MANISH<br><br><br><small>SINGH</small> </h1>
        </div>
        <?php require_once("include/footer.php");?>
       </body>
</html>
