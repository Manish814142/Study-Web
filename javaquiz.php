<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:loginform.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>java quiz </title>
<link href="css/costomstyle.css" rel="stylesheet">
<link href="css/quiz.css" rel="stylesheet">
</head>

<body>
 <div id="head">
 <?php require_once("include/header.php");?>
 </div>
 <div id="quiz-mainarea">
<form action="javaresult.php" method="post">

<div id="quiz-head">
<h1>Welcome to Java quiz</h1>
<pre>The Test provides Multiple Choice Questions (MCQs) related to Java. You will have to read all the given answers and click over the correct answer. 
The test contains 10 questions and there is no time limit, The test is not official, it's just a nice way to see how much you know, or don't know, about Java. </pre>
</div><br>

<div id="quiz-ques">
<p id="quest">1. Which of the following is not a Java features?<p><br>

<label><input type="radio" name="q1" value="11"><span id="circle"></span> Dynamic</label><br>
<label><input type="radio" name="q1" value="12"><span id="circle"></span> Architecture Neutral</label><br>
<label><input type="radio" name="q1" value="13"><span id="circle"></span> Use of pointers</label><br>
<label><input type="radio" name="q1" value="14"><span id="circle"></span> Object-oriented</label><br>

<br><p id="quest">2. The \u0021 article referred to as a<p><br>

<label><input type="radio" name="q2" value="11"><span id="circle"></span> Unicode escape sequence</label><br>
<label><input type="radio" name="q2" value="12"><span id="circle"></span> Octal escape</label><br>
<label><input type="radio" name="q2" value="13"><span id="circle"></span> Hexadecimal</label><br>
<label><input type="radio" name="q2" value="14"><span id="circle"></span> Line feed</label><br>

<br><p id="quest">3. _____ is used to find and fix bugs in the Java programs.<p><br>

<label><input type="radio" name="q3" value="11"><span id="circle"></span> JVM</label><br>
<label><input type="radio" name="q3" value="12"><span id="circle"></span> JRE</label><br>
<label><input type="radio" name="q3" value="13"><span id="circle"></span> JDK</label><br>
<label><input type="radio" name="q3" value="14"><span id="circle"></span> JDB</label><br>

<br><p id="quest">4. What is the return type of the hashCode() method in the Object class?<p><br>

<label><input type="radio" name="q4" value="11"><span id="circle"></span> Object</label><br>
<label><input type="radio" name="q4" value="12"><span id="circle"></span> int</label><br>
<label><input type="radio" name="q4" value="13"><span id="circle"></span> long</label><br>
<label><input type="radio" name="q4" value="14"><span id="circle"></span> void</label><br>

<br><p id="quest">5. What does the expression float a = 35 / 0 return?<p><br>

<label><input type="radio" name="q5" value="11"><span id="circle"></span> 0</label><br>
<label><input type="radio" name="q5" value="12"><span id="circle"></span> Not a Number</label><br>
<label><input type="radio" name="q5" value="13"><span id="circle"></span> Infinity</label><br>
<label><input type="radio" name="q5" value="14"><span id="circle"></span> Run time exception</label><br>

<br><p id="quest">6. Which of the following tool is used to generate API documentation in HTML format from doc comments in source code?<p><br>

<label><input type="radio" name="q6" value="11"><span id="circle"></span> javap tool</label><br>
<label><input type="radio" name="q6" value="12"><span id="circle"></span> javaw command</label><br>
<label><input type="radio" name="q6" value="13"><span id="circle"></span> Javadoc tool</label><br>
<label><input type="radio" name="q6" value="14"><span id="circle"></span> javah command</label><br>

<br><p id="quest">7. Which of the following creates a List of 3 visible items and multiple selections abled?<p><br>

<label><input type="radio" name="q7" value="11"><span id="circle"></span> new List(false, 3)</label><br>
<label><input type="radio" name="q7" value="12"><span id="circle"></span> new List(3, true)</label><br>
<label><input type="radio" name="q7" value="13"><span id="circle"></span> new List(true, 3)</label><br>
<label><input type="radio" name="q7" value="14"><span id="circle"></span> new List(3, false)</label><br>

<br><p id="quest">8. Which method of the Class.class is used to determine the name of a class represented by the class object as a String?<p><br>

<label><input type="radio" name="q8" value="11"><span id="circle"></span> getClass()</label><br>
<label><input type="radio" name="q8" value="12"><span id="circle"></span> intern()</label><br>
<label><input type="radio" name="q8" value="13"><span id="circle"></span> getName()</label><br>
<label><input type="radio" name="q8" value="14"><span id="circle"></span> toString()</label><br>

<br><p id="quest">9. In which process, a local variable has the same name as one of the instance variables?<p><br>

<label><input type="radio" name="q9" value="11"><span id="circle"></span> Serialization</label><br>
<label><input type="radio" name="q9" value="12"><span id="circle"></span><span id="circle"></span> Variable Shadowing</label><br>
<label><input type="radio" name="q9" value="13"><span id="circle"></span> Abstraction</label><br>
<label><input type="radio" name="q9" value="14"><span id="circle"></span> Multi-threading</label><br>

<br><p id="quest">10. Which of the following is true about the anonymous inner class?<p><br>

<label><input type="radio" name="q10" value="11"><span id="circle"></span> It has only methods</label><br>
<label><input type="radio" name="q10" value="12"><span id="circle"></span> Objects can't be created</label><br>
<label><input type="radio" name="q10" value="13"><span id="circle"></span> It has a fixed class name</label><br>
<label><input type="radio" name="q10" value="13"><span id="circle"></span> It has no class name</label><br>

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