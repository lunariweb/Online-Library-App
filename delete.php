<?php
    
include("db_conn.php");

error_reporting(0);

$id = $_GET['rn'];
$query = "DELETE FROM users WHERE id = '$id' ";

$data=mysqli_query($conn, $query);

if($data) {
    
    echo "<font color = 'red'> User Deleted";
}else{
    
    echo "<font color = 'red'> User Delete Failed"
}

?>