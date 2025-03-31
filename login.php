<?php
require 'config.php';
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $password=$_POST["password"];
    $result=mysqli_query($conn,"SELECT * FROM users WHERE name='$name'");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password==$row["password"]){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["id"];
            $_SESSION["name"]=$name;
            header("Location: main.php");
            exit();
        }
        else{
        echo 
        "<script> alert('Wrong Password');</script>";
        }
    }
    else{
        echo 
        "<script> alert('User is not registered ');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>LocaLeads</title>
    <link rel="icon" type="image/x-icon" sizes="32*32" href="logo.jpg">
    <style>
        .body1{
            background-color: rgb(240, 255, 246);
            padding:60px;
            height:100%;
            background-size: cover;
        }
        .head{
            font-size:30px;
            font-family:'mistral';
            font-weight:bold;

        }
        .login{
            background-color:white;
            padding:20px;
            height:500px;
            width:800px;
            box-shadow:0px 0px 15px 3px rgb(53, 143, 228);
            border-radius:20px;
        }
        .ima{
            height:400px;
            width:400px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="body1 d-flex flex-row">
                <div class="login mx-auto">
                    <div class="d-flex flex-row">
                        <div class="justify-content-start">
                            <h1 class="head">LocaLeads</h1>
                        </div>
                        <div class="justify-content-end ml-auto">
                            <p style="font-size:18px;font-weight:500">New User? <a href="sign.php"><span style="color:blue;font-size:18px">Sign Up</span></a></p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="col-6">
                            <img src="https://img.freepik.com/free-vector/gradient-world-tourism-day-illustration_52683-129641.jpg?w=740&t=st=1702992411~exp=1702993011~hmac=8d6f3b6ede5a7e639ceb792d4ee2b9a5852766b9cd7cafda3e0c99ce05e1268d" class="ima"/>
                        </div>
                        <div class="col-6 pt-3">
                            <h1 style="font-size:27px;font-weight:bold">Welcome Back!</h1>
                            <p style="color:grey;font-size:15px">Login to continue</p>
                            <form class="" action="login.php" method="post" autocomplete="off" >
                                <div class="input-box pt-3">
                                    <input type="text"  name="name" id="name" placeholder="  Username" required style="border-color:rgb(43,76,226);height:45px;width:290px">
                                    <i class='bx bxs-user'></i>
                                </div>
                                <div class="input-box pt-2 pb-3">
                                    <input type="password" name="password" id="password" placeholder="  Enter Password" required style="border-color:rgb(43,76,226);height:45px;width:290px">
                                    <i class='bx bxs-lock-alt' ></i> 
                                </div>
                                <!--<button type="button" class="btn" style="width:75"><a class="btn btn-primary" href="main.html" role="button">Login</a></button>-->
                                <div class="col-6">
                                    <button type="submit" name="submit" class="btn btn-primary" style="width:75">submit</button>
                                    <button type="button" class="btn"><a class="btn btn-primary" href="leads.html" role="button">Back</a></button>
                                </div>
                            </form>
                            <!--<div class="col-6 justify-content-end ml-auto">
                                <button type="button" class="btn"><a class="btn btn-primary" href="leads.html" role="button">Back</a></button>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>