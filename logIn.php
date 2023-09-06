<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link rel="stylesheet" href="logIn.css">
</head>
<body>
    <div class="container">
        <h1 class="signUp">Log In</h1>
        <form action="#" method="POST">
            <h3>Email:</h3> <input type="email" name="mail" id="mail" placeholder="abc@gmail.com">
            <br>
            <h3>Password:</h3> <input type="password" name="password" id="password" placeholder="********">
            <br>
            <a href="./signUp.php" class="logInBtn">Sign Up!</a>
            <br>
            <input class="submitBtn" type="submit" value="Submit" name="login">
        </form>
    </div>
</body>
</html>

<?php
    include("connection.php");

    if(isset($_POST['login'])){
        $mail     = $_POST['mail'];
        $password =$_POST['password'];

        $query = "SELECT * FROM logIn WHERE email = '$mail' && password = '$password' ";
        $data  = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        if($total==1){
            $targetUrl = "./index.html";
            header("Location: $targetUrl");
            exit;
        }
        else{
            echo '<script> alert("Wrong Email or Password"); </script>';
        }
    }

?>