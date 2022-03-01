<?php
session_start();
?>
<!Doctype html>
<html>
<head>
<title>Contact us</title>
<link href="css/costomstyle.css" rel="stylesheet">
<style>
body

input[type=text],[type=email], select, textarea{
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
#contact-form
{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
</head>
<body>
 <div id="head">
    <?php require_once("include/header.php");?>
</div>
<form action="#" method="post">
<center><h1> Contact StudyWeb </h1></center>
<p>We’re here to help and answer any question you might have. We look forward to hearing from you. You can contact us for the query as given below account-related, quiz, content, business and others. you can also mail us our email id <b>Contactus@studyweb.com</b>.</p><br>

<div id="contact-form">
	<label>Full Name<input type="text" name="name" required placeholder="Enter your name..."></label>
	<label>Email Id<input type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" placeholder="Email id.."></label>
	<label>Issue related</label>
	<select required name="option">
		<option value="" selected disabled>Choose yours</option>
		<option value="account">Account issue</option>
		<option value="quiz">Quiz issue</option>
		<option value="content">Content related</option>
		<option value="business">Business related</option>
		<option value="other">other issue</option>
	</select>
	<label>Subject<textarea name="subject" placeholder="Write something.." style="height:100px"></textarea></label>
	<center><input type="submit" onclick="myFunction()" value="Submit"></center>
</div>
</form>

<script>
function myFunction(){
        alert("Submitted Successfully");
     window.location.href="index.php";
    }
</script>
<div>
<?php require_once("include/footer.php");?>
</div>
</body>
</html>