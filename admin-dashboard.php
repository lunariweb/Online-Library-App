<!DOCTYPE html>
<html>

  <head>
    <title> Admin Dashboard </title>
    <link rel="stylesheet" type="text/css" href="admin-dashboard-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  </head>

  <header> <!--adding a header file and creating the navigation menu -->
   <div class="headcontainer">


     <div class="logoplaceholder"><i class="fa fa-book" aria-hidden="true"></i>

     </div>
     <div class="titletext">
       <h2>Admin Dashboard</h2>
     </div>

     <div class="menu-place1">
       <div class="menu-content1">
         <div class="homeicon">
           <i class="fa fa-home" aria-hidden="true"></i>

         </div>
         <div class="hometext">
           <h4><a href="#">Home</a></h4>
         </div>


       </div>


     </div>
     <div class="menu-place2">
       <div class="menu-content2">
         <div class="icon2">
           <i class="fa fa-user" aria-hidden="true"></i>

         </div>
         <div class="text2">
           <h4><a href="delete-books.php">Books</a></h4>
         </div>


       </div>

     </div>
     <div class="menu-place3">
       <div class="menu-content3">
         <div class="icon3">
           <i class="fa fa-plus" aria-hidden="true"></i>

         </div>
         <div class="text3">
           <h4><a href="addbook.php">Add Books</a></h4>
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

                 if (isset($_SESSION['id']) && isset($_SESSION['admin_uname'])){


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



    <div class="blockholder"> <!--designing blocks to create dashboard data panels -->
      <div class="block">

        <div class="block-icon">
          <i class="fa fa-user" aria-hidden="true"></i>


        </div>
        <div class="block-text">



          <?php
            include "db_conn.php"; //connecting to the database and fetching the details to fill the blocks

            $query = "SELECT id FROM users ORDER BY id";
            $query_run = mysqli_query($conn,$query);


            $row = mysqli_num_rows($query_run);
            echo '<h2>' .$row. '/500 </h2>';?> <!--echos out the number of rows in the dataabase -->
          <h3>Users Registered</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a href="admin.php">Manage</a></h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-book" aria-hidden="true"></i>


        </div>
        <div class="block-text">

          <?php
            include "db_conn.php";

            $query = "SELECT id FROM books ORDER BY id";
            $query_run = mysqli_query($conn,$query);


            $row = mysqli_num_rows($query_run);
            echo '<h2>' .$row. '/1000 </h2>';?> <!-- fetiching the number of rows to add into the block -->




          <h3>Books</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a href="delete-books.php">Manage Books</a></h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-user" aria-hidden="true"></i>


        </div>
        <div class="block-text">

          <?php
            include "db_conn.php";

            $query = "SELECT id FROM adminsl ORDER BY id";
            $query_run = mysqli_query($conn,$query);


            $row = mysqli_num_rows($query_run);
            echo '<h2>' .$row. '/10 </h2>';?> <!--same -->





          <h3>Admins</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3><a href="view-admins.php">View</a></h3>

          </div>

        </div>

      </div>
      <div class="block">
        <div class="block-icon">
          <i class="fa fa-id-card" aria-hidden="true"></i>


        </div>
        <div class="block-text">


          <h2>#OLAD2020_<?php echo $_SESSION['id']; ?></h2> <!--generating a library issued id for the admin -->
          <h3>Admin ID Card</h3>
        </div>

        <div class="block-controler">
          <div class="button">
            <h3>View</h3>

          </div>

        </div>

      </div>

    </div>


  </body>

</html>
