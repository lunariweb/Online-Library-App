<DOCTYPE html>
<html>
<!-- the main login window and the homepahe pf the web app-->
<head>
    <h1> Online Library </h1>

    <title> Online Library </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2> LOGIN </h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label> User Name </label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label> Password </label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
        <!---<a href="admin_home.php" class="button3">Admin Login</a> -------------------------------->

        <h3>Don't have an account?</h3>
        <a href="signup.php" class="button2">Create an account</a>




    </form>


    <div>


    </div>




</body>
</html>
