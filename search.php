<DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
    include "db_conn.php";
    
    if (isset($_POST["submit"])) {
        $str = $POST["bookname"];
        $sth = $con->prepare("SELECT * FROM 'booknames' WHERE bookname = '$str'");
        
        $sth->setFetchMode(PDO:: FETCH_OBJ);
        $sth->execute();
        
        
        if ($row = $sth->fetch()) {
            
            ?>
    
            <br><br><br>
            <table>
    
                <tr>
                    <th>bookname</th>
                </tr>
                
                <tr>
                    <td> <?php echo $row->bookname; ?></td>
                
                </tr>
            </table>
            
            
            
    <?php 
            
        }
    
    
            else{
                echo "Book is not available"; 
            }
        
    }
    
?>
    </body>
    </html>
    
    
</DOCTYPE>