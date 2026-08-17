<?php 
session_start();

if(isset($_SESSION["username"]))
    {
        header("Location: dashboard.php");
    }

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $remember=isset($_POST["remember"]);
if($user=="Admin"&& $pass=="1234")
    {
        $_SESSION["username"]=$user;
    }

 if($remember)
    {
        setcookie("username",$user,time()+(86400*30),"/");
     
    header("Location:dashboard.php");
exit();
 } 
else{
    $error="Invalid username or password";
}
    
    }
?>

<!DOCTYPE html>
<html>
<head> <title>Login Page</title></head>    

<body>
<h2>Login</h2>
<form method="post">
    <input type="text" name="username" placeholder="Username" value="<?php echo isset($_COOKIE['username'])? $_COOKIE['username']: '';?>"> <br>
    <input type="password" name="password" placeholder="Password"> <br>

    <label><input type="checkbox" name="remember"> Remember ME </label> <br>
    <input type="submit" value="Login">
</form>

<a href="registration.php"> New User</a>
<?php if(isset($error))echo $error; ?>
</body>
</html>
