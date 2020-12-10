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
<!--fetching the bok linl--------------------------------------------------------------------------------- >






    <!--- -------------------------------------------------------------------------------------->

  </head>

  <header>
   <div class="headcontainer">


     <div class="logoplaceholder"><i class="fa fa-book" aria-hidden="true"></i>

     </div>
     <div class="titletext">
       <h2>Browse Library</h2>
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
           <h4><a href="#">Browse</a></h4>
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
           <h4><a href="contact-us.php">Contact</a></h4>
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
<!--- - to be completed in sprint 3----------------------------------------------------->
        <ul class="menu">
          <li><a href="#">All</a></li>
          <li><a href="#">Fantasy</a></li>
          <li><a href="#">Novels</a></li>
          <li><a href="#">Comics</a></li>
          <li><a href="#">Adventure</a></li>

        </ul>

        <!--- search bar--->

        <div class="search">
          <a href="search-books.php" class="search-books-btn">Search</a>
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
            <img src="books\covers\Harry-Potter-pop-up-book-matthew-reinhart.jpg">

          </div>
        </li>

        <!-- showcase box 2--->
        <li class="item-b">
          <div class="showcase-box">
            <img src="books\covers\harrypotter-deathlyhallows-stanvince-frontpage.jpg">

          </div>
        </li>

        <!-- showcase box 3--->
        <li class="item-c">
          <div class="showcase-box">
            <img src="books\covers\LRS_Landscape_Horiz_w2.0_web.jpg">

          </div>
        </li>

        <!-- showcase box 4--->
        <li class="item-d">
          <div class="showcase-box">
            <img src="books\covers\wallpaper2you_5291.jpg">

          </div>
        </li>

        <!-- showcase box 5--->
        <li class="item-e">
          <div class="showcase-box">
            <img src="books\covers\wallpaper2you_5293.jpg">

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
              <img src="books\covers\philsophers-stone-uk-childrens-edition-600x0-c-default.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Harry Potter 1997</strong>
              <p>Philsophers Stone</p>

            </div>


          </div>
        </li>

        <!--- --------------------------------------------------------------------------------->

        <!--- slider box 2-------------------------------------->
        <li class="item-b">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books\covers\chamber-of-secrets-uk-childrens-edition-2014-400x0-c-default.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Harry Potter 1998</strong>
              <p>Chamber Of Secrets</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------>

        <!--- slider box 3-------------------------------------->
        <li class="item-c">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books\covers\prisoner-of-azkaban-uk-childrens-edition-2014-400x0-c-default.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Harry Potter 1999</strong>
              <p>Prisoner Of Azkaban</p>

            </div>


          </div>
        </li>

        <!--- --------------------------------------------------------------------------------------------->

        <!--- slider box 4-------------------------------------->
        <li class="item-d">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books\covers\goblet-of-fire-adult-edition-301x0-c-default.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Harry Potter 2000</strong>
              <p>Goblet Of Fire</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 5-------------------------------------->
        <li class="item-e">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books\covers\order-of-the-phoenix-us-childrens-edition-2013-600x0-c-default.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Harry Potter 2003</strong>
              <p>Order Of The Phoenix</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 6-------------------------------------->
        <li class="item-f">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books\covers\half-blood-prince-adult-edition-311x0-c-default.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Herry Potter 2005</strong>
              <p>Half-Blood Prince</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 7-------------------------------------->
        <li class="item-g">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books\covers\deathly-hallows-signature-edition-313x0-c-default.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Harry Potter 2007</strong>
              <p>Deathly Hallows</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 8-------------------------------------->
        <li class="item-h">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books\covers\81NUBiDacoL.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Narnia</strong>
              <p>The Wardrobe, The Lion and The Witch</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 9-------------------------------------->
        <li class="item-i">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books\covers\51EstVXM1UL._SX331_BO1,204,203,200_.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>Lord Of The Rings</strong>
              <p>First Edition</p>

            </div>


          </div>
        </li>

        <!--- ------------------------------------------------------------------------------------------------->

        <!--- slider box 10-------------------------------------->
        <li class="item-j">
          <div class="latest-box">
            <!--- image of the latest boz-------------------------------->
            <div class="latest-b-img">
              <img src="books\covers\27cf91f605923223613909c7b9d2219f.jpg">

            </div>

            <!--- text of the image box------------------------------------>
            <div class="latest-b-text">
              <strong>The Hobbit</strong>
              <p>First Edition</p>

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
          <div class="quality">1997</div>
          <img src="books\covers\philsophers-stone-uk-childrens-edition-600x0-c-default.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="books\pdfs\harry_potter_and_the_sorcerers_-_j.k._rowling.pdf" download>
        Harry Potter And The Philsophers Stone
      </a>

      </div>

      <!--- box 2------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">1998</div>
          <img src="books\covers\chamber-of-secrets-uk-childrens-edition-2014-400x0-c-default.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://archive.org/download/1HarryPotterAndTheSorcerersStone/2-harry-potter-and-the-chamber-of-secrets.pdf">
        Harry Potter And The Chamber Of Secrets
      </a>






      </div>

      <!--- box 3------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">1999</div>
          <img src="books\covers\prisoner-of-azkaban-uk-childrens-edition-2014-400x0-c-default.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="http://www.passuneb.com/elibrary/ebooks/HARRY%20POTTER%20AND%20THE%20PRISONER%20OF%20AZKABAN.pdf">
        Harry Potter And The Prisoner Of Azkaban
      </a>

      </div>

      <!--- box 4------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">2000</div>
          <img src="books\covers\goblet-of-fire-adult-edition-301x0-c-default.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://mcqueenglish.weebly.com/uploads/3/2/2/6/32260387/harry_potter_and_the_goblet_of_fire.pdf">
        Harry Potter And the Goblet Of Fire
      </a>

      </div>

      <!--- box 5------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">2003</div>
          <img src="books\covers\order-of-the-phoenix-us-childrens-edition-2013-600x0-c-default.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://www.missskirtich.com/uploads/2/3/3/7/23374820/5_-_harry_potter_and_the_order_of_the_phoenix_chapter_37.pdf">
        Harry Potter And The Order Of The Phoenix
      </a>

      </div>

      <!--- box 6------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">2005</div>
          <img src="books\covers\half-blood-prince-adult-edition-311x0-c-default.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://englishfun.vn/wp-content/uploads/2018/04/6Harry-Potter-and-the-Half-Blood-Prince.pdf">
        Harry Potter And The Half-Blood Prince
      </a>

      </div>

      <!--- box 7------------------------>
      <div class="books-box"> <!--- change this to books-box later----------------------------------------->
        <!-- book image----------------------->
        <div class="books-img"><!--- change this to books-img------------------------>
          <div class="quality">2007</div>
          <img src="books\covers\deathly-hallows-signature-edition-313x0-c-default.jpg">

        </div>

      <!--- text ------------------------------------------------------------>
      <a href="https://getfreestories.weebly.com/uploads/7/9/0/2/79020522/harry_potter_and_the_deathly_ha_-_j.k._rowling.pdf">
        Harry Potter And The Deathly Hallows
      </a>

    </div>

    <!--- box 8------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">1st Edition</div>
        <img src="books\covers\81NUBiDacoL.jpg">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="http://www.samizdat.qc.ca/arts/lit/PDFs/LionWitchWardrobe_CSL.pdf">
      The Chronicles Of Narnia
    </a>

    </div>

    <!--- box 9------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">1st Edition</div>
        <img src="books\covers\51EstVXM1UL._SX331_BO1,204,203,200_.jpg">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://s3.amazonaws.com/scschoolfiles/112/j-r-r-tolkien-lord-of-the-rings-01-the-fellowship-of-the-ring-retail-pdf.pdf">
      Lord Of The Ring
    </a>

    </div>

    <!--- box 10------------------------>
    <div class="books-box"> <!--- change this to books-box later----------------------------------------->
      <!-- book image----------------------->
      <div class="books-img"><!--- change this to books-img------------------------>
        <div class="quality">1st Edition</div>
        <img src="books\covers\27cf91f605923223613909c7b9d2219f.jpg">

      </div>

    <!--- text ------------------------------------------------------------>
    <a href="https://www.readingsanctuary.com/wp-content/uploads/2018/10/The-Hobbit-byJ-RR-Tolkien-EBOOK.pdf">
      The Hobbit
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
