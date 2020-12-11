<DOCTYPE html>
<html>

<head>
    <h1> Online Library </h1>

    <title> Online Library </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login_admin.php" method="post"> <!--simple form to implement the admin login form-->
        <h2> ADMIN LOGIN </h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label> User Name </label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label> Password </label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
        <a href="index.php" class="button3">User Login</a>






    </form>


    <div>


    </div>




</body>
</html>
