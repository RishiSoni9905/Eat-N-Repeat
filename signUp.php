<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>
    <div class="container">
        <h1 class="signUp">Sign Up</h1>
        <form action="#" method="POST">
            <h3>Name:</h3> <input type="text" name="name" id="name" placeholder="Username">
            <br>
            <h3>Email:</h3> <input type="email" name="mail" id="mail" placeholder="abc@gmail.com">
            <br>
            <h3>Password:</h3> <input type="password" name="password" id="password" placeholder="********">
            <br>
            <a href="./logIn.php" class="signUpBtn">Login!</a>
            <br>
            <input class="submitBtn" type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        $name     = $_POST['name'];
        $email     = $_POST['mail'];
        $password = $_POST['password'];

        $query = "INSERT INTO logIn VALUES('$name', '$email', '$password')";

        $data = mysqli_query($conn,$query);

        if($data){
            $targetUrl = "./logIn.php";
            header("Location: $targetUrl");
            exit;
        }
        else{
            echo "Failed";
        }
    }


?>