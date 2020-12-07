<DOCTYPE html>
    
<html>

    <head> 
        
        <title> Online Library </title>
    
        <link rel="stylesheet" type="text/css" href="style2.css">
        
        <?php

            session_start();
        
            if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
    

        ?>
        
        
        <a href="logout.php" class="b2">Logout</a>
        
        
        
        <?php
            }else{
                header("Location: index.php");
            exit();
            }

        ?>
    
    </head>
    
    <body>
        
        <h1> Welcome To Online Library </h1>
    
        <form action="search.php" method="post">
            
            
            <label> Name of the Book: </label>
            <input type="text" name="bookname" placeholder="Name of the Book"><br>
            
            <button type="submit">Search</button>
            
            
            <a href="browse_books.php" class="button2">Browse Library</a>
            
            
            
        </form>
    
    
    </body>
    
    
    
    
</html>
    
    


    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</DOCTYPE>