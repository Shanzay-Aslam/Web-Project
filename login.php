<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" type="text/css" href="loginphp.css">

</head>
<body>


        <!--  NAVIGATION -->
        <nav>
       <div class="navigation">
           <ul>
                 <i id="menu-close" class="fas fa-times"></i>
                 <li><a href="index.php">HOME</a></li>
                 <li><a href="about.html">ABOUT</a></li>
                 <li><a href="blog.html">BLOG</a></li>
                 <li><a href="course.html">COURSES</a></li>
                 <li><a href="contact.php">CONTACT</a></li>
           </ul>
       </div>
   </nav>

   <section>
       <div class="container">
        <div id="scene">
            <div class="layer" data-depth-x="-0.5" data-depth-y="0.25">
                <img src="form-images/moon.png" alt="">
            </div>
            <div class="layer" data-depth-x="0.15"><img src="form-images/mountains02.png" alt="">
            </div>
            <div class="layer" data-depth-x="0.25"><img src="form-images/mountains01.png" alt="">
            </div>
            <div class="layer" data-depth-x="-0.25"><img src="form-images/road.png" alt="">
            </div>
        </div>
       </div>

       <form action="login_check.php" method="POST">
        <div class="login">
            <h2 style="color: black;">Login Form</h2>
            <h4>
                <?php
                     error_reporting(0);
                session_start();
                session_destroy();
                     echo $_SESSION['loginMessage'];
                
                ?>
               </h4>
            <div class="inputBox">
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="inputBox">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="inputBox">
            <input id="btn" type="submit" value="Login">
        </div>
        </div>
       </form>
      
   </section>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" 
   integrity="sha512-/6TZODGjYL7M8qb7P6SflJB/nTGE79ed1RfJk3dfm/Ib6JwCT4+tOfrrseEHhxkIhwG8jCl+io6eaiWLS/UX1w==" 
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script>

      let scene = document.getElementById('scene');
      let parallax = new Parallax(scene);
    
 </script>
</body>
</html>