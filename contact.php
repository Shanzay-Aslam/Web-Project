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

    <link rel="stylesheet" type="text/css" href="style2.css">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

   

</head>
<body>
  
        <!--  NAVIGATION -->
   <nav>
       <img src="images/logo.png" alt="">
       <div class="navigation">
           <ul>
                 <i id="menu-close" class="fas fa-times"></i>
                 <li><a href="index.php">HOME</a></li>
                 <li><a href="about.html">ABOUT</a></li>
                 <li><a href="blog.html">BLOG</a></li>
                 <li><a href="course.html">COURSES</a></li>
                 <li><a class="active" href="contact.php">CONTACT</a></li>
           </ul>
               <img id="menu-btn" src="images/menu.png" alt="" >
       </div>
   </nav>

        <!--    HOME  -->
    <section id="contact-home">
        <h2>Contact Us</h2>
    </section>


    <!----  INFO   -->

    <section id="contact">
        <div class="getin">
            <h2>Get in touch</h2>
        <p>Looking for help? Fill the form and start a new adventure.</p>

        <div class="getin-details">
            <h3>Headquaters</h3>
            <div>
                <i class="far fa-home get"></i>
                <p>R-64 Ezzi City Bin Qasim Karachi , 75200</p>
            </div>
            <h3>Phone</h3>
            <div>
                <i class="fas fa-phone-alt get"></i>
                <p>
                    (+92) 0301 290 7482   <br>  (+92) 0311 254 6569
                </p>
            </div>
            <h3>Support</h3>
            <div>
                <i class="fal fa-envelope-open-text get"></i>
                <p>
                    shanzayaslam8@gmail.com  <br>  shanzayaslam41@gmail.com
                </p>
            </div>
            <h3>Follow Us</h3>
            <div class="pro-links">
                     <i class="fab fa-facebook-f"></i>
                     <i class="fab fa-instagram"></i>
                     <i class="fab fa-linkedin-in"></i>
                     <i class="fab fa-behance"></i>
            </div>
        </div>
        </div>


        <form action="data2_check.php" method="POST" class="form">>
            <h4>Let's Connect</h4>
            <p>Integer at lorem eget diam facilisis lacinia ac id massa.</p>
            <div class="form-row">
                <input type="text" name="name" placeholder="Your Name">
                <input type="text" name="email" placeholder="Email">
            </div>
            <div class="form-col">
                <input type="text" name="subject" placeholder="Subject">
            </div>
            <div class="form-col">
               <textarea name="" id="" cols="30" rows="8" name="msg" placeholder="How can we help?"></textarea>
            </div>
            <div class="form-col">
            <input style="font-size: .9rem;padding: 13px 25px; background: rgb(21, 21, 100);
 border-radius: 5px; outline: none; border: none;font-weight: 600; cursor: pointer; color: #fff;"
                 type="submit" name="apply" value="Send Messsage">
            </div>
        </form>
    </section>


    <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924234.6302710465!2d66.59495074892502!3d25.19338946981612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1678531026972!5m2!1sen!2s"
         style="border:0;" allowfullscreen="" loading="lazy" 
         referrerpolicy="no-referrer-when-downgrade"></iframe>
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