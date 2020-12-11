<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>

    <link rel="stylesheet" href="contact-us-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

  </head>
  <header>
   <div class="headcontainer">


     <div class="logoplaceholder"><i class="fa fa-book" aria-hidden="true"></i>

     </div>
     <div class="titletext">
       <h2>Contact Us</h2>
     </div>

     <div class="menu-place1">
       <div class="menu-content1">
         <div class="homeicon">
           <i class="fa fa-home" aria-hidden="true"></i>

         </div>
         <div class="hometext">
           <h4><a href="dashboard.php">Home</a></h4>
         </div>


       </div>


     </div>
     <div class="menu-place2">
       <div class="menu-content2">
         <div class="icon2">
           <i class="fa fa-user" aria-hidden="true"></i>

         </div>
         <div class="text2">
           <h4><a href="library-browse.php">Browse</a></h4>
         </div>


       </div>

     </div>
     <div class="menu-place3">
       <div class="menu-content3">
         <div class="icon3">
           <i class="fa fa-paper-plane" aria-hidden="true"></i>

         </div>
         <div class="text3">
           <h4><a href="book-request.php">Request</a></h4>
         </div>


       </div>

     </div>
     <div class="menu-place4">
       <div class="menu-content4">
         <div class="icon4">
           <i class="fa fa-phone" aria-hidden="true"></i>

         </div>
         <div class="text4">
           <h4><a href="#">Contact</a<</h4>
         </div>


       </div>

     </div>
     <div class="menu-place5">
       <div class="menu-content5">
         <div class="icon5">
           <i class="fa fa-cog" aria-hidden="true"></i>

         </div>
         <div class="text5">
           <h4><a href="user-settings.php">Settings</a></h4>
         </div>


       </div>

     </div>
     <div class="menu-place6" href="logout.php">

       <div class="menu-content6">
         <div class="icon6">
           <i class="fa fa-sign-out" aria-hidden="true"></i>

         </div>
         <div class="text6">
           <h4>
             <?php

                 session_start();

                 if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){


             ?>
             <a href="logout.php">Logout</a>

             <?php
                 }else{
                     header("Location: index.php");
                 exit();
                 }

             ?>


           </h4>
         </div>


       </div>

     </div>



    </div>
   </div>

   </div>
  </header>

  <body>


    <div class="contact-title"> <!--creating basic form holder and creating the form -->

      <h1>Having Issues?</h1>
      <h2>Send Us A Message, We will get back to you</h2>

    </div>

    <div class="contact-form">
      <form id="contact-form" method="post" action="contact-us-email-handler.php">
        <input name="name" type="text" class="form-control" placeholder="Your Name" required> <br>
        <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
        <input type="text" name="mobile" class="form-control" placeholder="Your Mobile Number" required><br>

          <textarea name="message" class="form-control" placeholder="Your Message" rows="8" required></textarea><br>

          <input type="submit" class="form-control-submit" value="SEND REQUEST" onclick=" return checkemail()">


      </form>

    </div>



    <script type="text/javascript">

    function checkemail() {

      return confirm('Email Sent Succesfully');
    }

    </script>
  </body>






</html>
