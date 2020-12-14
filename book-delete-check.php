<?php

include("db_conn.php");

error_reporting(0);

$id = $_GET['rn'];
$query = "DELETE FROM books WHERE id = '$id' ";

$data=mysqli_query($conn, $query);

if($data) {

    echo "<script>alert ('Book Deleted') </script>";


    header("Location: delete-books.php");







}


else{

    echo "User Delete Failed";
}

?>
