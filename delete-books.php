<!DOCTYPE html>


<html>
<head>
  <title>Manage Books</title>
    <link rel="stylesheet" type="text/css" href="delete-books-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >














    </head>

    <header>
     <div class="headcontainer">


       <div class="logoplaceholder"><i class="fa fa-book" aria-hidden="true"></i>

       </div>
       <div class="titletext">
         <h2>Manage Books</h2>
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
             <h4><a href="#">Books</a></h4>
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



    <table border="2">

        <tr>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Book Type</th>
        <th>Action</th>


        </tr>



<?php
    include("db_conn.php");


error_reporting(0);

$query = "SELECT * FROM books";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


echo $result['id'] . " " . $result['book_name'] . " " . $result['book_type'];

    if($total!=0){



        while($result=mysqli_fetch_assoc($data)){

             echo  "

             <tr>

             <td> " .$result['id']."</td>
             <td> " .$result['book_name']."</td>
             <td> " .$result['book_type']."</td>
             <td> <a href = 'book-delete-check.php?rn=$result[id]' onclick='return checkdelete()' >Delete</td>
             </tr>
             ";





        }
    }


?>


        </table>

        <script type="text/javascript">

        function checkdelete() {

          return confirm('Are You Sure You Want To Delete This Book?');
        }

        </script>


    </body>
    </html>

















</DOCTYPE>
