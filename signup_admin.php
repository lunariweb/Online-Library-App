<?php
session_start();
include "db_conn.php";
if(isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_password'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $name = validate($_POST['name']);
    $re_pass = validate($_POST['re_password']);
    
    $user_data = 'uname='. $uname. '&name='. $name;
    
    
    if (empty($uname)) {
        header("Location: admin_signup.php?error=Please enter the Username&$user_data");
        exit();


    }else if (empty($pass)) {
        header("Location: admin_signup.php?error=Please enter the password&$user_data");
        exit();
    }
    else if (empty($re_pass)) {
        header("Location: admin_signup.php?error=Please re-enter the password&$user_data");
        exit();
    }
    else if (empty($name)) {
        header("Location: admin_signup.php?error=Please enter your name&$user_data");
        exit();
    }
    
    else if ($pass !== $re_pass) {
        header("Location: admin_signup.php?error=Passwords doesn't match&$user_data");
        exit();
    }
    
    else{
        //hashing password
        
        $pass = md5($pass);
        
        
        
        $sql = "SELECT * FROM adminsl WHERE admin_uname ='$uname' ";
        
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0){
            header("Location: admin_signup.php?error=Username already exist, try another&$user_data");
        exit();
        }else{
            $sql2 = "INSERT INTO adminsl(admin_uname, admin_password, admin_name ) VALUES('$uname', '$pass', '$name')";
            $result2 = mysqli_query($conn, $sql2);
            
            if($result2){
                header("Location: admin_signup.php?success=Your account has been created successfully");
                exit();
            }else{
                header("Location: admin_signup.php?error=Unknown error occured&$user_data");
                exit();
            }
        }
          
            
            
    }
        
}else{
    header("Location: admin_signup.php");
    exit();
}

