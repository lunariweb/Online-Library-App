<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--- meta lines to make the programm resposive------------------->
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- --------------------------------------------------------------------------------------->



    <title>Browse Library</title>
    <link rel="stylesheet" type="text/css" href="style6.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="lightslider.css">

    <!-- java scrpit jQuery link--------------------->

    <script src="js/JQuery3.3.1.js"></script>
    <script src="js/lightslider.js"></script>
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

        <!--- Button at the menu---------------------------------------------------->
        <!--<input type="checkbox" class="menu-btn" id="menu-btn"/>    optional----------------->
      <!--  <label class="menu-icon" for="menu-btn"> ------------>
        <!--  <span class="nav-icon"></span> ----------->
      <!--- </label>-------------------->



        <!-- menu of the library browser --->

        <ul class="menu">
          <li><a href="#">Home </a></li>
          <li><a href="#">books</a></li>
          <li><a href="#">TV Shows</a></li>
          <li><a href="#">Hollywood</a></li>
          <li><a href="#">Horror</a></li>

        </ul>

        <!--- search bar--->

        <div class="search">
          <input type="text" placeholder="Find books">
          <i class="fa fa-search" aria-hidden="true"></i>

        </div>
    </nav>

    <section id="main">
      <!-- latets books showcase -->
      <!-- below he header-->

      <h1 class="showcase-heading">Showcase</h1>


      <ul id="autoWidth" class="cs-hidden">
        <!-- showcase box 1--->
        <li class="item-a">
          <div class="showcase-box">
            <img src="books_library_shelves_138556_1920x1080.jpg">

          </div>
        </li>

        <!-- showcase box 2--->
        <li class="item-b">
          <div class="showcase-box">
            <img src="books_library_shelves_138556_1920x1080.jpg">

          </div>
        </li>

        <!-- showcase box 3--->
        <li class="item-c">
          <div class="showcase-box">
            <img src="books_library_shelves_138556_1920x1080.jpg">

          </div>
        </li>

        <!-- showcase box 4--->
        <li class="item-d">
          <div class="showcase-box">
            <img src="books_library_shelves_138556_1920x1080.jpg">

          </div>
        </li>

        <!-- showcase box 5--->
        <li class="item-e">
          <div class="showcase-box">
            <img src="books_library_shelves_138556_1920x1080.jpg">

          </div>
        </li>


      </ul>






    </section>

    <!-- Latest Books Add here------------------------------------------------>
    <section id="latest">
      <h2 class="latest-heading">Latest Books</h2>
      <!--- slider -------------------------------------------------------------->
      <ul id="autoWidth2" class="cs-hidden">
        <!--- slider box 1-------------------------------------->
        <li class="item-a">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>

        <!--- --------------------------------------------------------------------------------->

        <!--- slider box 2-------------------------------------->
        <li class="item-b">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------>

        <!--- slider box 3-------------------------------------->
        <li class="item-c">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>

        <!--- --------------------------------------------------------------------------------------------->

        <!--- slider box 4-------------------------------------->
        <li class="item-d">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 5-------------------------------------->
        <li class="item-e">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 6-------------------------------------->
        <li class="item-f">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 7-------------------------------------->
        <li class="item-g">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 8-------------------------------------->
        <li class="item-h">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 9-------------------------------------->
        <li class="item-i">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 10-------------------------------------->
        <li class="item-j">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books_library_shelves_138556_1920x1080.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Kin 2018</strong>
              <p>Action Movie</p>

            </div>


          </div>
        </li>



      </ul>
    </section>


    <!--- Books----------------------------------------------------------------->
    <div class="books-heading"> <!--- change this to books later------------------------------------>
      <h2>Books</h2>

    </div>

    <section id="books-list"> <!--- change this to books list later--------------------------------------->
      <!--- box 1------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">HDRip</div>
          <img src="images\AGU-Stock-blank-book-pencil.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="#">
        Tin (2018) Full movie wih english subs
      </a>

      </div>

      <!--- box 2------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">HDRip</div>
          <img src="images\AGU-Stock-blank-book-pencil.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="#">
        Tin (2018) Full movie wih english subs
      </a>

      </div>

      <!--- box 3------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">HDRip</div>
          <img src="images\AGU-Stock-blank-book-pencil.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="#">
        Tin (2018) Full movie wih english subs
      </a>

      </div>

      <!--- box 4------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">HDRip</div>
          <img src="images\AGU-Stock-blank-book-pencil.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="#">
        Tin (2018) Full movie wih english subs
      </a>

      </div>

      <!--- box 5------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">HDRip</div>
          <img src="images\AGU-Stock-blank-book-pencil.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="#">
        Tin (2018) Full movie wih english subs
      </a>

      </div>

      <!--- box 6------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">HDRip</div>
          <img src="images\AGU-Stock-blank-book-pencil.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="#">
        Tin (2018) Full movie wih english subs
      </a>

      </div>

      <!--- box 7------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">HDRip</div>
          <img src="images\AGU-Stock-blank-book-pencil.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="#">
        Tin (2018) Full movie wih english subs
      </a>

    </div>

    <!--- box 8------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">HDRip</div>
        <img src="images\AGU-Stock-blank-book-pencil.jpg">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="#">
      Tin (2018) Full movie wih english subs
    </a>

    </div>



    </section>

  <!--- Buttons on the bottom of the browse page---------------------->
  <div class="btns">
    <a href="#">Previous</a>
    <a href="#">Next</a>

  </div>

  <!--- Footer ------------------------------------------------------------------------------------------------------->

  <footer>
    <p>Online Library, A Project Of SLTC</p>
    <p>Copyright 2020 - Team Dominators (SLTC)</p>
  </footer>


    <!--- the slider scrpit form JQuery--->
    <script>
    $(document).ready(function() {
    $('#autoWidth,#autoWidth2').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth, #autoWidth2').removeClass('cS-hidden');
        }
    });
  });



    </script>

  </body>



</html>
