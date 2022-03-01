<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:loginform.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP quiz </title>
<link href="css/costomstyle.css" rel="stylesheet">
<link href="css/quiz.css" rel="stylesheet">
</head>

<body>
<div id="head">
 <?php require_once("include/header.php");?>
 </div>
 <div id="quiz-mainarea">
<form action="phpresult.php" method="post">

<div id="quiz-head">
<h1>Welcome to PHP quiz</h1>
<pre>The Test provides Multiple Choice Questions (MCQs) related to Php. You will have to read all the given answers and click over the correct answer. 
The test contains 10 questions and there is no time limit, The test is not official, it's just a nice way to see how much you know, or don't know, about Php. </pre>
</div><br>

<div id="quiz-ques">
<br><p id="quest">1. PHP Stands for?<p><br>

<label><input type="radio" name="q1" value="11"><span id="circle"></span> PHP Hypertex Processor</label><br>
<label><input type="radio" name="q1" value="12"><span id="circle"></span> PHP Hyper Markup Processor</label><br>
<label><input type="radio" name="q1" value="13"><span id="circle"></span> PHP Hyper Markup Preprocessor</label><br>
<label><input type="radio" name="q1" value="14"><span id="circle"></span> PHP Hypertext Preprocessor</label><br>

<br><p id="quest">2. Which of the following is an associative array containing session variables available to the current script?<p><br>

<label><input type="radio" name="q2" value="11"><span id="circle"></span> $GLOBALS</label><br>
<label><input type="radio" name="q2" value="12"><span id="circle"></span> $_SERVER</label><br>
<label><input type="radio" name="q2" value="13"><span id="circle"></span> $_COOKIE</label><br>
<label><input type="radio" name="q2" value="14"><span id="circle"></span> $_SESSION</label><br>

<br><p id="quest">3. Who is known as the father of PHP?<p><br>

<label><input type="radio" name="q3" value="11"><span id="circle"></span> Rasmus Lerdorf</label><br>
<label><input type="radio" name="q3" value="12"><span id="circle"></span> Willam Makepiece</label><br>
<label><input type="radio" name="q3" value="13"><span id="circle"></span> Drek Kolkevi</label><br>
<label><input type="radio" name="q3" value="14"><span id="circle"></span> List Barely</label><br>

<br><p id="quest">4. Which of the following is not true? <p><br>

<label><input type="radio" name="q4" value="11"><span id="circle"></span> PHP can be used to develop web applications.</label><br>
<label><input type="radio" name="q4" value="12"><span id="circle"></span> PHP makes a website dynamic.</label><br>
<label><input type="radio" name="q4" value="13"><span id="circle"></span> PHP applications can not be compile. </label><br>
<label><input type="radio" name="q4" value="14"><span id="circle"></span> PHP can not be embedded into html.</label><br>

<br><p id="quest">5. PHP scripts are enclosed within<p><br>

<label><input type="radio" name="q5" value="11"><span id="circle"></span> < php > . . . < /php ></label><br>
<label><input type="radio" name="q5" value="12"><span id="circle"></span> < ?php . . . ? ></label><br>
<label><input type="radio" name="q5" value="13"><span id="circle"></span> ?php . . . ?php</label><br>
<label><input type="radio" name="q5" value="14"><span id="circle"></span> < p > . . . < /p ></label><br>

<br><p id="quest">6. Which of the following variables is not a predefined variable?<p><br>

<label><input type="radio" name="q6" value="11"><span id="circle"></span> $get</label><br>
<label><input type="radio" name="q6" value="12"><span id="circle"></span> $ask</label><br>
<label><input type="radio" name="q6" value="13"><span id="circle"></span> $request</label><br>
<label><input type="radio" name="q6" value="14"><span id="circle"></span> $post</label><br>

<br><p id="quest">7. Which of the following method sends input to a script via a URL?<p><br>

<label><input type="radio" name="q7" value="11"><span id="circle"></span> Get</label><br>
<label><input type="radio" name="q7" value="12"><span id="circle"></span> Post</label><br>
<label><input type="radio" name="q7" value="13"><span id="circle"></span> Both</label><br>
<label><input type="radio" name="q7" value="14"><span id="circle"></span> None</label><br>

<br><p id="quest">8. Which of the following function returns the number of characters in a string variable?<p><br>

<label><input type="radio" name="q8" value="11"><span id="circle"></span> count($variable)</label><br>
<label><input type="radio" name="q8" value="12"><span id="circle"></span> len($variable)</label><br>
<label><input type="radio" name="q8" value="13">strcount($variable)</label><br>
<label><input type="radio" name="q8" value="14"><span id="circle"></span> strlen($variable)</label><br>

<br><p id="quest">9. Which of the following array represents an array containing one or more arrays?<p><br>

<label><input type="radio" name="q9" value="11"><span id="circle"></span> Numeric Array</label><br>
<label><input type="radio" name="q9" value="12"><span id="circle"></span> Associative Array</label><br>
<label><input type="radio" name="q9" value="13"><span id="circle"></span> Multidimentional Array</label><br>
<label><input type="radio" name="q9" value="14"><span id="circle"></span> None of the above.</label><br>

<br><p id="quest">10. Which of the following function is used to redirect a page?<p><br>

<label><input type="radio" name="q10" value="11"><span id="circle"></span> redirect()</label><br>
<label><input type="radio" name="q10" value="12"><span id="circle"></span> header()</label><br>
<label><input type="radio" name="q10" value="13"><span id="circle"></span> reflect()</label><br>
<label><input type="radio" name="q10" value="14"><span id="circle"></span> None of the above.</label><br>

</div>

<br>
<center><input id="sub" type="submit" value="Submit">
<input id="cls" type="reset" value="Clear"></center>
</form>
</div>
    <div id="foot">
<?php require_once("include/footer.php");?>
</div>
</body>
</html>