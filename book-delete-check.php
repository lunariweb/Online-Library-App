<?php

include("db_conn.php");

error_reporting(0);

$id = $_GET['rn'];
$query = "DELETE FROM books WHERE id = '$id' ";

$data=mysqli_query($conn, $query);

if($data) {

    echo "User Deleted";
}else{

    echo "User Delete Failed";
}

?>
