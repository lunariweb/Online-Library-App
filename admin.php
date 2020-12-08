<DOCTYPE html>


<html>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <head>


    <title>Admin Panel</title>


<?php

        session_start();

        if (isset($_SESSION['id']) && isset($_SESSION['admin_uname'])){


?>





        <form action="admin_home.php" method="post">

            <h3> Hello, <?php echo $_SESSION['admin_name']; ?></h3>

            <button action="submit"><a href="logout.php">Logout</a></button>




        </form>

                <?php
}else{
    header("Location: admin_home.php");
    exit();
}

?>


        <h1>Library</h1>
        <h2>Admin Panel</h2>




    </head>

    <body>

    <table border="2">

        <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>Name</th>
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



        while($result=mysqli_fetch_assoc($data)){

             echo  "

             <tr>

             <td> " .$result['id']."</td>
             <td> " .$result['user_name']."</td>
             <td> " .$result['name']."</td>
             <td> <a href = 'delete1.php?rn=$result[id]' >Delete</td>
             </tr>
             ";





        }
    }


?>


        </table>


    </body>
    </html>

















</DOCTYPE>
