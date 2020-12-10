<?php
  include "db_conn.php";
 ?>

 <!DOCTYPE html>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Search Results</title>
   </head>
   <body>

     <h1>Search Page</h1>

     <div class="article-container">
       <?php
          if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM books WHERE book_name LIKE '%$search%' OR book_type LIKE '%$search%' OR book_link LIKE '%$search%'";

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
