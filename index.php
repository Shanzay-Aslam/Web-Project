<?php
   error_reporting(0);
   session_start();
   session_destroy();

   if( $_SESSION['message'])
   {
    $message= $_SESSION['message'];

    echo " <script type='text/javascript'>
         alert('$message');
    </script>";
   }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" type="text/css" href="indexphp.css">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

</head>
<body>
  
        <!--  NAVIGATION -->
   <nav>
       <img src="images/logo.png" alt="">
       <div class="navigation">
           <ul>
                 <i id="menu-close" class="fas fa-times"></i>
                 <li><a class="active" href="index.php">HOME</a></li>
                 <li><a  href="about.html">ABOUT</a></li>
                 <li><a href="blog.html">BLOG</a></li>
                 <li><a href="course.html">COURSES</a></li>
                 <li><a href="contact.php">CONTACT</a></li>
                 <li> <a class="btn" href="login.php">LOGIN NOW</a></li>
           </ul>
               <img id="menu-btn" src="images/menu.png" alt="" >
       </div>
   </nav>

     <!--    HOME -->

     <section id="home">
        <h2>Enhance Your Future With Thinkfull Academy</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut animi numquam quos unde tempore
             facere autem blanditiis quibusdam officiis magnam error, in architecto corporis mollitia 
             maxime, incidunt eaque aut repellat!</p>
            <div class="btn">
                <a class="blue" href="about.html">Learn More</a>
                <a class="yellow" href="course.html">Visit Courses</a>
            </div>
     </section>
     

    <!--    FEATURES -->
    <section id="features">
            <h1>Awesome Features</h1>
        <p>Replenish man have thing gathering lights yielding shall you</p>
 <div class="fea-base">
    <div class="fea-box">
     <i class="fas fa-graduation-cap"></i>
            <h3>Scholarship Facility</h3>
        <p>One make creepeth, man bearing their a firmament won't great heaven</p>
    </div>
    <div class="fea-box">
     <i class="fas fa-file-certificate"></i>
            <h3>Dell Online Course</h3>
        <p>One make creepeth, man bearing their a firmament won't great heaven</p>
    </div>
    <div class="fea-box">
     <i class="fas fa-award"></i>
            <h3>Global Certification</h3>
        <p>One make creepeth, man bearing their a firmament won't great heaven</p>
    </div>
 </div>
 </section>


  <!--    COURSES -->
<section id="course">
    <h1>Our Popular Courses</h1>
<p>Replenish man have thing gathering lights yielding shall you</p>
<div class="course-box">

<div onclick="window.location.href='course-inner.html';" class="courses">
<img src="images/c1.jpg">
<div class="details">
    <span>Updated 21/01/2023</span>
    <h6>Javascript Beginners Course</h6>
        <div class="star">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
         <span>(239)</span>
        </div>
</div>
<div class="cost">$49.99</div>
</div>

<div onclick="window.location.href='course-inner2.html';" class="courses">
<img src="images/c2.jpg">
<div class="details">
    <span>Updated 21/01/2023</span>
    <h6>HTML & CSS Beginners Course</h6>
        <div class="star">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
         <span>(239)</span>
        </div>
</div>
<div class="cost">$49.99</div>
</div>

<div onclick="window.location.href='course-inner3.html';" class="courses">
<img class="imgp" src="images/c3.jpeg">
<div class="details">
    <span>Updated 21/01/2023</span>
    <h6>Python Beginners Course</h6>
        <div class="star">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
         <span>(239)</span>
        </div>
</div>
<div class="cost">$49.99</div>
</div>

<div onclick="window.location.href='course-inner4.html';"  class="courses">
<img class="imgw" src="images/cse4.jpg">
<div class="details">
    <span>Updated 21/01/2023</span>
    <h6>Web Design Crash Course</h6>
        <div class="star">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
         <span>(239)</span>
        </div>
</div>
<div class="cost">$49.99</div>
</div>

<div onclick="window.location.href='https://www.reed.co.uk/courses/web-development/369022#/courses/web-development';"  class="courses">
<img class="imgd" src="images/c5.jpeg">
<div class="details">
    <span>Updated 21/01/2023</span>
    <h6>Web Development Crash Course</h6>
        <div class="star">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
         <span>(239)</span>
        </div>
</div>
<div class="cost">$49.99</div>
</div>

<div onclick="window.location.href='https://www.udemy.com/course/the-complete-guide-to-angular-2/';"  class="courses">
<img class="imga" src="images/c6.png">
<div class="details">
    <span>Updated 21/01/2023</span>
    <h6>Angular Beginners Course</h6>
        <div class="star">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
         <span>(239)</span>
        </div>
</div>
<div class="cost">$49.99</div>
</div>
 
</div>
</section>

<!--   registration     -->
   
<section id="registration">
<div class="reminder">
    <p>Get 100 Online Courses For Free</p>
    <h1>Register To Get It</h1>
    <div class="time">
        <div class="date">
            18
            <br>
            Days
        </div>
        <div class="date">
            23
            <br>
            Hours
        </div>
        <div class="date">
            06
            <br>
            Minutes
        </div>
        <div class="date">
            58
            <br>
            Seconds
        </div>
    </div>
</div>

<form action="data_check.php" method="POST" class="form">
   <h3>ADMISSION FORM</h3>
   <input type="text" placeholder="Name" name="name" id="">
   <input type="text" placeholder="Email Address" name="email" id="">
   <input type="text" placeholder="Phone Number" name="phone" id="">
   <textarea name="message" id="" cols="30" rows="08" placeholder="Message"></textarea> 
   <input class="btn" type="submit" name="apply" value="Apply">
</form>

</section>

<!--    PROFILES   -->
<section id="experts">
               <h1>Community Experts</h1>
        <p>Replenish man have thing gathering lights yielding shall you</p>
   <div class="expert-box">
        <div class="profile">
            <img src="images/pro1.webp" alt="">
                 <h6>Emma Irik</h6>
              <p>Python &amp; Algorithm Expert</p>
                  <div class="pro-links">
                     <i class="fab fa-facebook-f"></i>
                     <i class="fab fa-instagram"></i>
                     <i class="fab fa-linkedin-in"></i>
                  </div>
        </div>

        <div class="profile">
            <img src="images/pro2.webp" alt="">
                 <h6>Jason</h6>
              <p>Data Design Expert</p>
                  <div class="pro-links">
                     <i class="fab fa-facebook-f"></i>
                     <i class="fab fa-instagram"></i>
                     <i class="fab fa-linkedin-in"></i>
                  </div>
        </div>

        <div class="profile">
            <img src="images/pro3.webp" alt="">
                 <h6>Maalik</h6>
              <p>Full Stack Developer</p>
                  <div class="pro-links">
                     <i class="fab fa-facebook-f"></i>
                     <i class="fab fa-instagram"></i>
                     <i class="fab fa-linkedin-in"></i>
                  </div>
        </div>

        <div class="profile">
            <img src="images/pro4.webp" alt="">
                 <h6>Jennifer</h6>
              <p>Design Expert</p>
                  <div class="pro-links">
                     <i class="fab fa-facebook-f"></i>
                     <i class="fab fa-instagram"></i>
                     <i class="fab fa-linkedin-in"></i>
                  </div>
        </div>



   </div>
 </section>

 <!--   FOOTER     -->
 <footer>
     <div class="footer-col">
        <h3>Top Products</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Services</li>
     </div>

     <div class="footer-col">
        <h3>Quick Links</h3>
        <li>Jobs</li>
        <li>Brand Assets</li>
        <li>Investor Relations</li>
        <li>Terms of Service</li>
     </div>

     <div class="footer-col">
        <h3>Features</h3>
        <li>Manage Reputation</li>
        <li>Power Tools</li>
        <li>Managed Website</li>
        <li>Marketing Services</li>
     </div>

     <div class="footer-col">
        <h3>Resources</h3>
        <li>Guides</li>
        <li>Research</li>
        <li>Experts</li>
        <li>Marketing Services</li>
     </div>

     <div class="footer-col">
        <h3>Newsletter</h3>
        <p>You can trust us. We only send promo offers. </p>
            <div class="subscribe">
                <input type="text" placeholder="Your Email Address">
                <a href="#" class="yellow">SUBSCRIBE</a>
            </div>
     </div>

<div class="copyright">
    <p>Copyright ©2023 All rights reserved!</p>
    <div class="pro-links">
                     <i class="fab fa-facebook-f"></i>
                     <i class="fab fa-instagram"></i>
                     <i class="fab fa-linkedin-in"></i>
                  </div>
</div>
 </footer>

 <!----  SCRIPT ----->
 <script>
    
    $('#menu-btn').click( function()
       {
        $('nav .navigation ul').addClass('active')
       });
    $('#menu-close').click( function()
       {
        $('nav .navigation ul').removeClass('active')
       });
    
 </script>
</body>
</html>