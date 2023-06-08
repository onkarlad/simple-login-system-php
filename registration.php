<?php
session_start();
$output="";
$success="";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAION PAGE</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
    </style>
</head>
<body>


<?php

include "dbcon.php";

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn,$_POST['name']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn,$_POST['number']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
    

        $pass = password_hash($password,PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword,PASSWORD_BCRYPT);


    $emailquery =" select * from  registration where email='$email'";
    $sql = mysqli_query($conn,$emailquery);

    if(mysqli_num_rows($sql)>0){
        $output="email already exist";
        $success="";
    }else{
        if($password === $cpassword){
            $insertquery ="insert into registration(name,email,mobile,password,cpass) values('$username','$email','$mobile','$pass','$cpass')";

            $insertqueryrun = mysqli_query($conn,$insertquery);
            $success="registered successfully";
            $output="";
        }else{
            $output="password are not matching";
            $success="";
        }
    }
    
}

?>
   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="myform">

   <h1 id="heading">CREATE ACCOUNT</h1>
    <P id="para">Get started with your free account</P>

    <input type="button" value="login via google" id="btn">
    <input type="button" value="login via facebook" id="btn">
    <br>
    <hr>
    <input type="text" name="name" id="name" placeholder="enter your name" required>
    <br><br>
    <input type="email" name="email" id="email" placeholder="enter your email" required>
    <br><br>
    <input type="number" name="number" id="number" placeholder="enter mob no" required>
    <br><br>
    <input type="password" name="password" id="password" placeholder="enter password" required>
    <br><br>
    <input type="password" name="cpassword" id="cpassword" placeholder="confirm password" required>
    <br><br>
    <input type="submit" name="submit" value="Create Account" id="btn">
    <p id="output"><?php echo $output ; ?></p>
    <span id="success"><?php echo $success ; ?></span>
    <p>Have an account? <a href="login.php" class="login">Log in</a></p>


   </form>
</body>
</html>