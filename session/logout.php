<?php 
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Logout</title>
    </head>
    <body>
        <h2>You are logout</h2>
        <a href="login.php"><button>Login Again</button></a>
    </body>
</html>
