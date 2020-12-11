
<?php

$pic = $_FILES ["pic"];

move_uploaded_file($pic["tmp_name"], "books/" .$pic["name"]); //addign the uploaded files into a directory in the root folder









session_start(); //starting a new session for the user id
include "db_conn.php"; // conneting the code to tbe database
if(isset($_POST['book_name']) && isset($_POST['book_type']) && isset($_POST['book_link'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    $book_name = validate($_POST['book_name']); //variables
    $book_type = validate($_POST['book_type']);
    $book_link = validate($_POST['book_link']);


    $user_data = '&book_name='. $book_name. '&book_type='. $book_type. '&book_link='. $book_link ; // setting a varibale to user data


    if (empty($book_name)) {
        header("Location: addbook.php?error=Please enter the book name&$user_data"); //redirecting and showing a message
        exit();


    }else if (empty($book_type)) {
        header("Location: addbook.php?error=Please enter the book type&$user_data");
        exit();
    }
    else if (empty($book_link)) {
        header("Location: addbook.php?error=Please enter the book link&$user_data");
        exit();
    }


    else{




        $sql = "SELECT * FROM books WHERE book_name ='$book_name' "; //connecting to a specific table in the database

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            header("Location: addbook.php?error=Book name already exist, try another&$user_data");
        exit();
        }else{
            $sql2 = "INSERT INTO books(book_name, book_type, book_link ) VALUES('$book_name', '$book_type', '$book_link')"; //inserting the data from the form into the table in databse
            $result2 = mysqli_query($conn, $sql2);

            if($result2){
                header("Location: addbook.php?success=Book has been added successfully");
                exit();
            }else{
                header("Location: addbook.php?error=Unknown error occured&$user_data");
                exit();
            }
        }



    }

}else{
    header("Location: addbook.php"); //redirecting to the addbook location where the form is
    exit();
}
