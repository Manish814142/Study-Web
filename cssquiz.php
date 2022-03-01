<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:loginform.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Css quiz </title>
<link href="css/costomstyle.css" rel="stylesheet">
<link href="css/quiz.css" rel="stylesheet">
</head>
<body>
<div id="head">
 <?php require_once("include/header.php");?>
 </div>
 <div id="quiz-mainarea">
<form action="cssresult.php" method="post">

<div id="quiz-head">
<h1>Welcome to CSS quiz</h1>
<pre>The Test provides Multiple Choice Questions (MCQs) related to Css. You will have to read all the given answers and click over the correct answer.
The test contains 10 questions and there is no time limit, The test is not official, it's just a nice way to see how much you know, or don't know, about Css. </pre>
</div><br>

<div id="quiz-ques">
<br><p id="quest">1. Which of the following selector matches a element based on its id?<p><br>

<label><input type="radio" name="q1" value="11"><span id="circle"></span> The Id Selector</label><br>
<label><input type="radio" name="q1" value="12"><span id="circle"></span> The Universal Selector</label><br>
<label><input type="radio" name="q1" value="13"><span id="circle"></span> The Descendant Selector</label><br>
<label><input type="radio" name="q1" value="14"><span id="circle"></span> The Class Selector</label><br>

<br><p id="quest">2. Which of the following defines a measurement in centimeters?<p><br>

<label><input type="radio" name="q2" value="11"><span id="circle"></span> %</label><br>
<label><input type="radio" name="q2" value="12"><span id="circle"></span> cm</label><br>
<label><input type="radio" name="q2" value="13"><span id="circle"></span> em</label><br>
<label><input type="radio" name="q2" value="14"><span id="circle"></span> ex</label><br>

<br><p id="quest">3. Which of the following property is used to control the scrolling of an image in the background?<p><br>

<label><input type="radio" name="q3" value="11"><span id="circle"></span> background-attachment</label><br>
<label><input type="radio" name="q3" value="12"><span id="circle"></span> background</label><br>
<label><input type="radio" name="q3" value="13"><span id="circle"></span> background-repeat</label><br>
<label><input type="radio" name="q3" value="14"><span id="circle"></span> background-position </label><br>

<br><p id="quest">4. In css what does "color:red" can be called as<p><br>

<label><input type="radio" name="q4" value="11"><span id="circle"></span> Selector</label><br>
<label><input type="radio" name="q4" value="12"><span id="circle"></span> Rule</label><br>
<label><input type="radio" name="q4" value="13"><span id="circle"></span> Declaration</label><br>
<label><input type="radio" name="q4" value="14"><span id="circle"></span> None of the above</label><br>

<br><p id="quest">5. Which of the following property is used to set the text direction?<p><br>

<label><input type="radio" name="q5" value="11"><span id="circle"></span> color</label><br>
<label><input type="radio" name="q5" value="12"><span id="circle"></span> direction</label><br>
<label><input type="radio" name="q5" value="13"><span id="circle"></span> letter-spacing</label><br>
<label><input type="radio" name="q5" value="14"><span id="circle"></span> word-spacing</label><br>

<br><p id="quest">6. Which of the following property of a anchor element signifies an element that currently has the user's mouse pointer hovering over it?<p><br>

<label><input type="radio" name="q6" value="11"><span id="circle"></span> :link</label><br>
<label><input type="radio" name="q6" value="12"><span id="circle"></span> :visited</label><br>
<label><input type="radio" name="q6" value="13"><span id="circle"></span> :hover</label><br>
<label><input type="radio" name="q6" value="14"><span id="circle"></span> :active</label><br>

<br><p id="quest">7. Which of the following property changes the width of bottom border?<p><br>

<label><input type="radio" name="q7" value="11"><span id="circle"></span> :border-bottom-width</label><br>
<label><input type="radio" name="q7" value="12"><span id="circle"></span> :border-top-width</label><br>
<label><input type="radio" name="q7" value="13"><span id="circle"></span> :border-left-width</label><br>
<label><input type="radio" name="q7" value="14"><span id="circle"></span> :border-right-width</label><br>

<br><p id="quest">8. Which of the following property serves as shorthand for the marker properties?<p><br>

<label><input type="radio" name="q8" value="11"><span id="circle"></span> list-style-type</label><br>
<label><input type="radio" name="q8" value="12"><span id="circle"></span> list-style-position</label><br>
<label><input type="radio" name="q8" value="13"><span id="circle"></span> list-style-image</label><br>
<label><input type="radio" name="q8" value="14"><span id="circle"></span> list-style</label><br>

<br><p id="quest">9. Which of the following property serves as shorthand for the padding properties?<p><br>

<label><input type="radio" name="q9" value="11"><span id="circle"></span> padding</label><br>
<label><input type="radio" name="q9" value="12"><span id="circle"></span> padding-top</label><br>
<label><input type="radio" name="q9" value="13"><span id="circle"></span> padding-left</label><br>
<label><input type="radio" name="q9" value="14"><span id="circle"></span> padding-right</label><br>

<br><p id="quest">10. Suppose we want to arragnge five nos. of DIVs so that DIV4 is placed above DIV1. Now, which css property will we use to control the order of stack?<p><br>

<label><input type="radio" name="q10" value="11"><span id="circle"></span> d-index</label><br>
<label><input type="radio" name="q10" value="12"><span id="circle"></span> s-index</label><br>
<label><input type="radio" name="q10" value="13"><span id="circle"></span> x-index</label><br>
<label><input type="radio" name="q10" value="14"><span id="circle"></span> z-index</label><br>

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