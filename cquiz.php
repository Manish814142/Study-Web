<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:loginform.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>c++ quiz </title>
<link href="css/costomstyle.css" rel="stylesheet">
<link href="css/quiz.css" rel="stylesheet">
 <script src="js/quizcheck.js"></script>
</head>
<body>
 <div id="head">
 <?php require_once("include/header.php");?>
 </div>
 <div id="quiz-mainarea">
 <form action="cresult.php" method="post">
<div id="quiz-head">
<h1>Welcome to C++ quiz</h1>
<pre>The Test provides Multiple Choice Questions (MCQs) related to C++ Framework. You will have to read all the given answers and click over the correct answer. 
The test contains 10 questions and there is no time limit, The test is not official, it's just a nice way to see how much you know, or don't know, about C++. </pre>
</div><br>
<div id="quiz-ques">
<p id="quest">1. One of the following is true for an inline function.<p><br>
<label><input type="radio" name="q1" value="11"><span id="circle"></span>
 It executes faster as it is treated as a macro internally</label><br>
<label><input type="radio" name="q1" value="12"><span id="circle"></span> It executes faster because it priority is more than normal function</label><br>
<label><input type="radio" name="q1" value="13"><span id="circle"></span> It does not executes faster compared to a normal function</label><br>
<label><input type="radio" name="q1" value="14"><span id="circle"></span> None of the above holds true for an inline function</label><br>

    <br><p id="quest">2. Which is the storage specifier used to modify the member variable even though the class object is a constant object?</p><br>

<label><input type="radio" name="q2" value="11"><span id="circle"></span> auto</label><br>
<label><input type="radio" name="q2" value="12"><span id="circle"></span> register</label><br>
<label><input type="radio" name="q2" value="13"><span id="circle"></span> static</label><br>
<label><input type="radio" name="q2" value="14"><span id="circle"></span> mutable</label><br>

<br><p id="quest">3. The programs machine instructions are store in ______ memory segment.<p><br>

<label><input type="radio" name="q3" value="11"><span id="circle"></span> Data</label><br>
<label><input type="radio" name="q3" value="12"><span id="circle"></span> Stack</label><br>
<label><input type="radio" name="q3" value="13"><span id="circle"></span> Heap</label><br>
<label><input type="radio" name="q3" value="14"><span id="circle"></span> Code</label><br>

<br><p id="quest">4. Choose the option not applicable for the constructor.<p><br>

<label><input type="radio" name="q4" value="11"><span id="circle"></span> Cannot be called explicitly.</label><br>
<label><input type="radio" name="q4" value="12"><span id="circle"></span> Cannot be overloaded.</label><br>
<label><input type="radio" name="q4" value="13"><span id="circle"></span> Cannot be overridden.</label><br>
<label><input type="radio" name="q4" value="14"><span id="circle"></span> None of the above.</label><br>

<br><p id="quest">5. Identify the C++ compiler of Linux<p><br>

<label><input type="radio" name="q5" value="11"><span id="circle"></span> cpp</label><br>
<label><input type="radio" name="q5" value="12"><span id="circle"></span> g++</label><br>
<label><input type="radio" name="q5" value="13"><span id="circle"></span> Borland</label><br>
<label><input type="radio" name="q5" value="14"><span id="circle"></span> vc++</label><br><br>

<br><p id="quest">6. Wrapping data and its related functionality into a single entity is known as<p><br>

<label><input type="radio" name="q6" value="11"><span id="circle"></span> Abstraction</label><br>
<label><input type="radio" name="q6" value="12"><span id="circle"></span> Encapsulation</label><br>
<label><input type="radio" name="q6" value="13"><span id="circle"></span> Polymorphism</label><br>
<label><input type="radio" name="q6" value="14"><span id="circle"></span> Modularity</label><br>

<br><p id="quest">7. What does polymorphism in OOPs mean?<p><br>

<label><input type="radio" name="q7" value="11"><span id="circle"></span> Concept of allowing overiding of functions</label><br>
<label><input type="radio" name="q7" value="12"><span id="circle"></span> Concept of hiding data</label><br>
<label><input type="radio" name="q7" value="13"><span id="circle"></span> Concept of keeping things in differnt modules/files</label><br>
<label><input type="radio" name="q7" value="14"><span id="circle"></span> Concept of wrapping things into a single unit</label><br>

<br><p id="quest">8. Which of the following shows multiple inheritances?<p><br>

<label><input type="radio" name="q8" value="11"><span id="circle"></span> A->B->C</label><br>
<label><input type="radio" name="q8" value="12"><span id="circle"></span> A->B; A->C</label><br>
<label><input type="radio" name="q8" value="13"><span id="circle"></span> A,B->C</label><br>
<label><input type="radio" name="q8" value="14"><span id="circle"></span> B->A</label><br>

<br><p id="quest">9. C++ is<p><br>

<label><input type="radio" name="q9" value="11"><span id="circle"></span> procedural programming language</label><br>
<label><input type="radio" name="q9" value="12"><span id="circle"></span> object oriented programming language</label><br>
<label><input type="radio" name="q9" value="13"><span id="circle"></span> functional programming language</label><br>
<label><input type="radio" name="q9" value="14"><span id="circle"></span> both procedural and object oriented programming language</label><br>

<br><p id="quest">10. Which of the following operator is used with this pointer to access members of a class?<p><br>

<label><input type="radio" name="q10" value="11"><span id="circle"></span> .</label><br>
<label><input type="radio" name="q10" value="12"><span id="circle"></span> !</label><br>
<label><input type="radio" name="q10" value="13"><span id="circle"></span> -></label><br>
<label><input type="radio" name="q10" value="14"><span id="circle"></span> ~</label><br>
</div>

<br>
<center><input id="sub" type="submit" value="Submit" onclick="return checkquiz()">
<input id="cls" type="reset" value="clear"></center>
</form>
    </div>
    <div id="foot">
<?php require_once("include/footer.php");?>
</div>
</body>
</html>