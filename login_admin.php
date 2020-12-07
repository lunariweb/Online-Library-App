<?php
session_start();
include "db_conn.php";
if(isset($_POST['uname']) && isset($_POST['password'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: admin_home.php?error=User Name Is Required");
        exit();


    }else if (empty($pass)) {
        header("Location: admin_home.php?error=Please enter the password");
        exit();
    }else{
        //hashing password
        
        $pass = md5($pass);
        
        
        $sql = "SELECT * FROM adminsl WHERE admin_uname ='$uname' AND admin_password = '$pass'";
        
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['admin_uname'] === $uname && $row['admin_password'] === $pass){
                $_SESSION['admin_uname'] = $row['admin_uname'];
                $_SESSION['admin_name'] = $row['admin_name'];
                $_SESSION['id'] = $row['id'];
                header("Location: admin.php");
                exit();
                
            }else{
                
            header("Location: admin_home.php?error=Incorrect Username or password");
            exit();
        }
            
            
        }else{
            header("Location: admin_home.php?error=Incorrect Username or password");
            exit();
        }
    }

        
}else{
    header("Location: admin_home.php");
    exit();
}

