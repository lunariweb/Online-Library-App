<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Browse Library</title>
    <link rel="stylesheet" type="text/css" href="style6.css">
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
           <h4>Browse</h4>
         </div>


       </div>

     </div>
     <div class="menu-place3">
       <div class="menu-content3">
         <div class="icon3">
           <i class="fa fa-search" aria-hidden="true"></i>

         </div>
         <div class="text3">
           <h4>Search</h4>
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
    <!-- navigation of the library (not the main navigation ---->

    <nav>
        <a href="#" class="logo">
          <img src="#" alt="">
        </a>

        <!-- menu of the library browser --->

        <ul class="menu">
          <li><a href="#">Home </a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="#">TV Shows</a></li>
          <li><a href="#">Hollywood</a></li>
          <li><a href="#">Horror</a></li>

        </ul>

        <!--- search bar--->

        <div class="search">
          <input type="text" placeholder="Find Movies">
          <i class="fa fa-search" aria-hidden="true"></i>

        </div>
    </nav>

    <section id="main">
      <!-- latets books showcase -->
      <!-- below he header-->

      <h1 class="showcase-heading">Showcase</h1>
      <div class="showcase-box">
        <img src="books_library_shelves_138556_1920x1080.jpg">

      </div>

    </section>

  </body>



</html>
