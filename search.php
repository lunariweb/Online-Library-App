<?php
  include "db_conn.php";
 ?>

 <!DOCTYPE html>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="search-results-style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
     <title>Search Results</title>
   </head>
   <!--- ---------------------------------------------------------------------------------------------------------->
   <header>
    <div class="headcontainer">


      <div class="logoplaceholder"><i class="fa fa-book" aria-hidden="true"></i>

      </div>
      <div class="titletext">
        <h2>Search Books</h2>
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
   <!--- ---------------------------------------------------------------------------------------------------------->




   <body>

     <div class="back-btn">

       <i class="fa fa-arrow-left" aria-hidden="true"></i>
       <a class="abc" type="submit" name="button" href="search-books.php">Back</a>

     </div>

     <div class="title">
       <h1>Search The Library</h1>

     </div>

     <h1>Results</h1>

     <div class="article-container"> <!--showing the result which has been fetched from the databse -->
       <?php
          if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM books WHERE book_name LIKE '%$search%' OR book_type LIKE '%$search%' OR book_link LIKE '%$search%'"; //seleccting the data from the databse and the data selected fom the databse doesnt matter the format of the search keyword it always gives th result

            $result = mysqli_query($conn, $sql);

            $queryResult = mysqli_num_rows($result);

            echo "<div class='result-count'><h2> There are ".$queryResult." results! <h2> </div>";

            if ($queryResult > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='article-box'>
                    <h3>".$row['book_name']."</h3>
                    <h3>".$row['book_type']."</h3>
                    <p>".$row['book_link']."</p>


                </div>";
              }
            }else{

              echo "<h3> Please check the keyword and try again</h3>";

            }


          }

        ?>

     </div>

   </body>
 </html>
