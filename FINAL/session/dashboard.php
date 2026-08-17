<?php
session_start();
if(!isset($_SESSION["username"]))
    {
        header("Location:login.php");
        exit();
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <h2>Welcome,<?php  echo $_SESSION["username"];?></h2>
    
       <?php
       if(isset($_COOKIE["username"]))
        {
            echo "<p> Welcome Back,".$_COOKIE["username"]."From coockie </p>";
        }
       ?> 
<p>This is our little dashboard. Only user can see it</p>
      <a href="logout.php"><button>Logout</button></a> 
    </body>
</html>