<!DOCTYPE html>


<html>
<head>
  <title>Manage Users</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >














    </head>

    <header> <!--header -->
     <div class="headcontainer">


       <div class="logoplaceholder"><i class="fa fa-book" aria-hidden="true"></i>

       </div>
       <div class="titletext">
         <h2>Manage Users</h2>
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
             <h4><a href="#">Settings</a></h4>
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

<!--creating the table to show the data from the datavbase -->

    <table border="2">

        <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>User Fullname</th>
        <th>Action</th>


        </tr>



<?php
    include("db_conn.php");


error_reporting(0);

$query = "SELECT * FROM users";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


echo $result['id'] . " " . $result['user_name'] . " " . $result['name'];

    if($total!=0){



        while($result=mysqli_fetch_assoc($data)){ //fetching the data from the databse and adding them into a table with a delete button

             echo  "

             <tr>

             <td> " .$result['id']."</td>
             <td> " .$result['user_name']."</td>
             <td> " .$result['name']."</td>
             <td> <a href = 'delete1.php?rn=$result[id]' onclick='return checkdelete()' >Delete</td>
             </tr>
             ";





        }
    }




?>





        </table>
<!--creating a conmfirmation message -->
        <script type="text/javascript">

        function checkdelete() {

          return confirm('Are Your Sure You Wand To Delete This User?');
        }

        </script>







    </body>
    </html>

















</DOCTYPE>
