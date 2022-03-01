<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:loginform.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>html quiz </title>
<link href="css/costomstyle.css" rel="stylesheet">
<link href="css/quiz.css" rel="stylesheet">
</head>
<body>
<div id="head">
 <?php require_once("include/header.php");?>
 </div>
 <div id="quiz-mainarea">
<form action="htmlresult.php" method="post">
<div id="quiz-head">
<h1>Welcome to HTML quiz</h1>
<pre>The Test provides Multiple Choice Questions (MCQs) related to HTML. You will have to read all the given answers and click over the correct answer. 
The test contains 10 questions and there is no time limit, The test is not official, it's just a nice way to see how much you know, or don't know, about HTML. </pre>
</div><br>

<div id="quiz-ques">
<br><p id="quest">1. HTML stands for?<p><br>

<label><input type="radio" name="q1" value="11"><span id="circle"></span> Hyper Text Markup Language</label><br>
<label><input type="radio" name="q1" value="12"><span id="circle"></span> High Text Markup Language</label><br>
<label><input type="radio" name="q1" value="13"><span id="circle"></span> Hyper Tabular Markup Language</label><br>
<label><input type="radio" name="q1" value="14"><span id="circle"></span>None of these</label><br>

<br><p id="quest">2. which of the following tag is used to mark a begining of paragraph ?<p><br>

<label><input type="radio" name="q2" value="11"><span id="circle"></span> TD tag</label><br>
<label><input type="radio" name="q2" value="12"><span id="circle"></span> BR tag</label><br>
<label><input type="radio" name="q2" value="13"><span id="circle"></span> P tag</label><br>
<label><input type="radio" name="q2" value="14"><span id="circle"></span>TR tag</label><br>

<br><p id="quest">3. Correct HTML tag for the largest heading is<p><br>

<label><input type="radio" name="q3" value="11"><span id="circle"></span> head tag</label><br>
<label><input type="radio" name="q3" value="12"><span id="circle"></span> h6 tag</label><br>
<label><input type="radio" name="q3" value="13"><span id="circle"></span> heading tag</label><br>
<label><input type="radio" name="q3" value="14"><span id="circle"></span> h1 tag</label><br>

<br><p id="quest">4. The attribute of FORM tag<p><br>

<label><input type="radio" name="q4" value="11"><span id="circle"></span> Method</label><br>
<label><input type="radio" name="q4" value="12"><span id="circle"></span> Action</label><br>
<label><input type="radio" name="q4" value="13"><span id="circle"></span> Both (a)&(b)</label><br>
<label><input type="radio" name="q4" value="14"><span id="circle"></span> None of these</label><br>

<br><p id="quest">5. Markup tags tell the web browser<p><br>

<label><input type="radio" name="q5" value="11"><span id="circle"></span> How to organise the page</label><br>
<label><input type="radio" name="q5" value="12"><span id="circle"></span> How to display the page</label><br>
<label><input type="radio" name="q5" value="13"><span id="circle"></span>How to display message box on page</label><br>
<label><input type="radio" name="q5" value="14"><span id="circle"></span> None of these</label><br>

<br><p id="quest">6. www is based on which model?<p><br>

<label><input type="radio" name="q6" value="11"><span id="circle"></span> Local-server</label><br>
<label><input type="radio" name="q6" value="12"><span id="circle"></span> Client-server</label><br>
<label><input type="radio" name="q6" value="13"><span id="circle"></span> 3-tier</label><br>
<label><input type="radio" name="q6" value="14"><span id="circle"></span> None of these</label><br>

<br><p id="quest">7. Web pages starts with which ofthe following tag?<p><br>

<label><input type="radio" name="q7" value="11"><span id="circle"></span>Body tag</label><br>
<label><input type="radio" name="q7" value="12"><span id="circle"></span> Title tag</label><br>
<label><input type="radio" name="q7" value="13"><span id="circle"></span> HTML tag</label><br>
<label><input type="radio" name="q7" value="14"><span id="circle"></span> Form tag</label><br>

<br><p id="quest">8. How can you open a link in a new browser window?<p><br>

<label><input type="radio" name="q8" value="11"><span id="circle"></span> < a href = "url" target = "new" ></label><br>
<label><input type="radio" name="q8" value="12"><span id="circle"></span> < a href = "url" target= "_blank" ></label><br>
<label><input type="radio" name="q8" value="13"><span id="circle"></span> < a href = "url".new ></label><br>
<label><input type="radio" name="q8" value="14"><span id="circle"></span> < a href = "url" target ="open" ></label><br>

<br><p id="quest">9. Which of the tag is used to creates a number list?<p><br>

<label><input type="radio" name="q9" value="11"> <span id="circle"></span> < LI ></label><br>
<label><input type="radio" name="q9" value="12"><span id="circle"></span> < OL ></label><br>
<label><input type="radio" name="q9" value="13"><span id="circle"></span> < LI > and < OL ></label><br>
<label><input type="radio" name="q9" value="14"><span id="circle"></span> None of these</label><br>

<br><p id="quest">10. < INPUT > is<p><br>

<label><input type="radio" name="q10" value="11"><span id="circle"></span> format tag</label><br>
<label><input type="radio" name="q10" value="12"><span id="circle"></span> empty tag</label><br>
<label><input type="radio" name="q10" value="13"><span id="circle"></span> both (a) and (b)</label><br>
<label><input type="radio" name="q10" value="13"><span id="circle"></span> none of these</label><br>

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