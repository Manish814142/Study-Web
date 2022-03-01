 <header class="top" >
     <a><img src="image/icon.png" alt="craftyoursite">  </a>  
       <a href="http://localhost/projectcollege/index.php"> <h1>  StudyWeb</h1></a>
      <nav class="socialicons">
           <a href="#"><img src="image/facebook.png"></a>
           <a href="#"><img src="image/twitter.png"></a>
           <a href="#"><img src="image/whatsapp.png"> </a>
           <a href="#"><img src="image/youtube.png"></a>
       </nav>
         <div class="menubar">
     <ul class="menu">
         <li><a href="index.php">HOME</a></li>
         <li><a href="">QUIZ <img src="image/Logopit_1599727830362.png"></a>
         <ul class="down">
             <li><a href="cquiz.php">C++</a></li>
             <li><a href="javaquiz.php">JAVA</a></li>
             <li><a href="htmlquiz.php">HTML</a></li>
             <li><a href="cssquiz.php">CSS</a></li>
             <li><a href="phpquiz.php">PHP</a></li>
             
         </ul>
         </li>
         <li><a href="contact_us.php">CONTACT US</a></li>
         <li><a href="sitemap.php">SITEMAP</a></li>
     </ul>
       <span id="buttonuser">
         <?php
         if(!isset($_SESSION['uname'])){
             echo "<a href='loginform.php'>Register/Login</a>";
             } 
                  if(isset($_SESSION['uname'])){
             echo "<a href='logout.php'>Logout</a>";
             }?>
          
       </span>
       </div> 
      
      </header>
          