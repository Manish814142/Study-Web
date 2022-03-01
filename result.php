<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('location:loginform.php');
}
    if(!isset($_SESSION['wright'])){
        echo '<script>alert("please apply for a test");
        window.location.href="index.php"</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link href="css/costomstyle.css" rel="stylesheet">
</head>
<body>
   <div id="head">
    <?php require_once("include/header.php");?>
</div>
     <div id="resultarea">
     <div id="resultbox">
        <h1 id="resultheading">
            QUIZ RESULT
        </h1><br>
        <center><h1 id="h">
            Total number of questions <br><h3>10</h3> 
        
        </h1><center>
         <h1 id="h">
            Total number of questions not answered <br><h3><?php echo $_SESSION['left'];
             ?></h3>
        
        </h1>
        <h1 id="h">
            Total number of right answers  <br><h3><?php echo $_SESSION['wright'];
             ?></h3>
        
        </h1>
        <h1 id="h">
            Total number of wrong answers  <br><h3><?php echo $_SESSION['wrong'];
             ?></h3>
        
        </h1>
        
         <h1 id="resultheading">
            TRY OTHER QUIZES
        </h1><br>
        
       <center></center> <br><a id="dn" href="cquiz.php">C++</a> <a id="dn" href="cssquiz.php">CSS</a> <a id="dn"  href="javaquiz.php">JAVA</a>
        </center> 
     </div>
     </div>
</body>
</html>