<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "dbcon.php";
    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $emailsearch = "select * from registration where email='$email'";
        $runquery = mysqli_query($conn,$emailsearch);
        if(mysqli_num_rows($runquery)>0){
            $getregisteredpass = mysqli_fetch_assoc($runquery);
            $pass = $getregisteredpass['password'];
            $_SESSION["username"]=$getregisteredpass['name'];

            $match_pass = password_verify($password,$pass);
            if($match_pass){
                ?>
            <script>
                window.location.replace("home.php");
            </script>

            <?php
                
            }
            else{
                echo "password incorrect";
            }
        }else{
            echo "user not found";
        }

    }

?>
  
<form action="" method="POST" id="myform">

<h1 id="heading">create account</h1>
<p id="para">Get started with your free account</p>
<input type="button" value="login via google" id="btn">
<input type="button" value="login via facebook" id="btn">
<hr>
<input type="email" name="email" id="email" placeholder="enter email">
<br><br>
<input type="password" name="password" id="password" placeholder="enter password">
<br><br>
<input type="submit" value="login now" name="submit" id="btn">
<br>
<p>Dont have an account? <a href="registration.php">Sign up here</a></p>


</form>

</body>
</html>