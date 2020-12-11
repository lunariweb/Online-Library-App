<DOCTYPE html>
<html>

<head>
    <title> ADD BOOKS </title>  <!-- the title that is showing in the new tab title bar -->
    <link rel="stylesheet" type="text/css" href="style7.css"> <!--linking the stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" > <!-- linking font awesome cdn to use icons -->
</head>

<header>
 <div class="headcontainer"> <!-- new divs-->


   <div class="logoplaceholder"><i class="fa fa-book" aria-hidden="true"></i> <!--fetching the icon from the fontawesome cdn -->

   </div>
   <div class="titletext">
     <h2>Add Books</h2>
   </div>

   <div class="menu-place1">
     <div class="menu-content1">
       <div class="homeicon">
         <i class="fa fa-home" aria-hidden="true"></i>

       </div>
       <div class="hometext">
         <h4><a href="admin-dashboard.php">Home</a></h4>
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
         <h4><a href="#">Add Books</a></h4>
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

               session_start(); //strting a new session for the user id

               if (isset($_SESSION['id']) && isset($_SESSION['admin_uname'])){


           ?>
           <a href="logout.php">Logout</a> <!--addign the logout button to end the session and linking the button to the session destroying php file -->

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
  <div class="formholder">


    <form action="addbook-check.php" method="post" class="form2" enctype="multipart/form-data"> <!--new form to check the books and add the books to the databse -->
        <h2> ADD BOOKS </h2>
        <?php if (isset($_GET['error'])) { ?> <!--adding the labels and inputs to the addbook form and adding new variables using php to access the database and fetch and add the details -->
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>


        <label> Book Name </label>
        <?php if (isset($_GET['book_name'])) { ?>

            <input type="text" name="book_name" placeholder="Book Name" value="<?php echo $_GET['book_name']; ?>"><br>
        <?php }else{ ?>
                <input type="text" name="book_name" placeholder="Book Name"><br>
        <?php }?>

        <label> Book Type </label>
        <?php if (isset($_GET['book_type'])) { ?>

            <input type="text" name="book_type" placeholder="Book Type" value="<?php echo $_GET['book_type']; ?>"><br>
        <?php }else{ ?>
                <input type="text" name="book_type" placeholder="Book Type"><br>
        <?php }?>

        <label>Book Image</label>
        <input type="file" name="pic" multiple>

        <label> Book Link </label>
        <?php if (isset($_GET['book_link'])) { ?>

            <input type="text" name="book_link" placeholder="Book Link" value="<?php echo $_GET['book_link']; ?>"><br>
        <?php }else{ ?>
                <input type="text" name="book_link" placeholder="Book Link"><br>
        <?php }?>









        <button type="submit">Add Book</button> <!--button to submit the form data to the datavbase -->


    </form>

    </div>
</body>
</html>
