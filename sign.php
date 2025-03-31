<?php
require 'config.php';
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $duplicate=mysqli_query($conn, "SELECT * FROM users WHERE name='$name' OR email= '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo 
        "<script> alert('name or email has already taken') </script>";
    }
    else{
        if($password==$confirmpassword){
            $query="INSERT INTO users VALUES('','$name','$email','$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Signin Succesfull')</script>";
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["id"];
            $_SESSION["name"]=$name;
            header("Location: main.php");
        }
        else{
            echo
            "<script> alert('Password Does not match')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Sign up</title>
    <link rel="icon" type="image/x-icon" sizes="32*32" href="logo.jpg">
    <style>
        .xyz{
            background-color:rgb(240,255,246);
            background-size:cover;
            height:650px;
            width:800px;
        }
        .sign{
            background-color:white;
            height:450px;
            width:500px;
            border-radius:20px;
            box-shadow:0px 0px 15px 3px rgb(53,143,228);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 xyz d-flex flex-column justify-content-center">
                <form class="" action="" method="post" autocomplete="off" > 
                    <div class="sign mx-auto p-3">
                        <h1>Create An Account</h1>
                        <div class="input-box pt-3">
                            <input name="name" id="name" type="text" placeholder="User Name" required style="border-color:rgb(43, 76, 226);height:45px;width:290px">
                        </div>
                        <div class="input-box pt-3">
                            <input name="email" id="email" type="text" placeholder="Your Email" required style="border-color:rgb(43, 76, 226);height:45px;width:290px">
                        </div>
                        <div class="input-box pt-3">
                           <input name="password" id="password" type="password" placeholder="Password" required style="border-color:rgb(43, 76, 226);height:45px;width:290px">
                        </div>
                        <div class="input-box pt-3 pb-3">
                            <input name="confirmpassword" id="confirmpassword" type="password" placeholder="Renter_Password" required style="border-color:rgb(43, 76, 226);height:45px;width:290px">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="button" class="btn"><a class="btn btn-primary" href="leads.html" role="button">Back</a></button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>