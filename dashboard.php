<!DOCTYPE html>
<html>

  <head>
    <title> Dashboard </title>
    <link rel="stylesheet" type="text/css" href="style5.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  </head>

  <header>
   <div class="headcontainer">


     <div class="logoplaceholder"><i class="fa fa-book" aria-hidden="true"></i>

     </div>
     <div class="titletext">
       <h2> Onlne Library </h2>
     </div>

     <div class="menu-place1">
       <div class="menu-content1">
         <div class="homeicon">
           <i class="fa fa-home" aria-hidden="true"></i>

         </div>
         <div class="hometext">
           <h4>Home</h4>
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
           <h4>Contact</h4>
         </div>


       </div>

     </div>
     <div class="menu-place5">
       <div class="menu-content5">
         <div class="icon5">
           <i class="fa fa-cog" aria-hidden="true"></i>

         </div>
         <div class="text5">
           <h4>Settings</h4>
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



    <div class="blockholder">
      <div class="block">

        <div class="block-icon">
          <i class="fa fa-book" aria-hidden="true"></i>


        </div>
        <div class="block-text">

          <h2>450/1000</h2>
          <h3>Downloaded Books</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3>Browse</h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-id-card" aria-hidden="true"></i>


        </div>
        <div class="block-text">
          <h2>#OL2012081157</h2>
          <h3>User ID</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3>Details</h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-user" aria-hidden="true"></i>


        </div>
        <div class="block-text">
          <h2>Your Uname</h2>
          <h3>User Name</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3>Change</h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-briefcase" aria-hidden="true"></i>


        </div>
        <div class="block-text">
          <h2>10/50</h2>
          <h3>Personal Briefcase</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3>Browse</h3>

          </div>

        </div>

      </div>

    </div>


  </body>

</html>
