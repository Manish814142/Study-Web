<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href="css/loginform.css" rel="stylesheet">
     <link href="css/costomstyle.css" rel="stylesheet">
</head>
<body>
      <?php require_once("include/header.php");?>
     <div class="formarea">
         <div id="formbox">
         <div id="loginheader">
             <h1 >Login</h1>
             <h4 id="error">
               <?php
                 if(isset($_GET['error'])) echo $_GET['error'];
                 ?>
             </h4>
             <form class="login" id="login" action="logindp.php" method="post">
                 <input type="text" id="user" placeholder="Username" name="username" required><br>
                 <input type="password" name="password" id="pass" placeholder="Password" required><br>
                 <input type="submit" id="submit" value="Login">
             </form>
             <h4 id="msg"><sup>**</sup>Create New Account</h4>
             
             <h3><a href="signinform.php">Register</a></h3>
         </div>
         </div>
     </div>  
     <?php require_once("include/footer.php");?>
    </body>
      
</html>
