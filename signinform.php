<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href="css/loginform.css" rel="stylesheet">
    <link href="css/signinform.css" rel="stylesheet">
     <link href="css/costomstyle.css" rel="stylesheet">
</head>
<body>
      <?php require_once("include/header.php");?>
     <div class="formarea">
         <div id="formbox">
         <div id="regheader">
             <h1 >Register</h1>
             <center><h5 id="messege">
               <?php
                 if(!isset($_POST['submit'])){
                 
                 if(isset($_GET['msg'])) echo $_GET['msg'];
                 }
                 ?>
             </h5> </center><br>
             <form  id="reg" action="signindp.php" method="post">
                <lebel for="firstname"></lebel>
                 <input type="text" class="reg" id="reguser" placeholder="First Name" pattern="[A-Za-z]+" title="the name should be an alphabet" name="firstname"  required> <br>
                 <lebel for="lastname"></lebel>
                 <input class="reg"type="text" id="reguser" placeholder="Last Name" name="lastname"  pattern="[A-Za-z]+" title="the name should be an alphabet" required><br>
                 <lebel for="email"></lebel>
                 <input type="email" class="reg" id="reguser" placeholder="Email" name="email" pattern="a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="should be 8 latter" required><br>
                 <lebel for="username"></lebel>
                 <input type="text" class="reg" id="reguser" placeholder="Username" name="username" required><br>
                 <lebel for="password"></lebel>
                 <input type="password" class="reg" id="regpass" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="should contain a number,special char,uppercase and lowercase" required><br>
                 <input type="submit" id="regsubmit" value="Register Now">
               
             </form>
            <h3 id="chn"><a href="loginform.php">Login</a></h3>
         </div>
         </div>
     </div>  
     <?php require_once("include/footer.php");?>
    </body>
      
</html>