<?php
session_start();
// destroying the session which generated for the user ids and logging out safely
session_unset();
session_destroy();

header("Location: index.php");
?>
