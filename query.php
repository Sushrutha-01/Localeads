<?php
$conn = mysqli_connect("localhost", "root", "", "localeads");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $query_text = $_POST["query_text"];

    $sql = "INSERT INTO query (name, query_text) VALUES ('$name', '$query_text')";
    
    if (mysqli_query($conn, $sql)) {
        echo"<script>alert('Query Successfully submitted')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>LocaLeads</title>
    <link rel="icon" type="image/x-icon" sizes="32*32" href="logo.jpg">
    <style>
        .query{
            height:500px;
            width:700px;
            background-color:white;
            background-size: cover;
            border-radius:20px;
            box-shadow:0px 0px 15px 3px rgb(53,143,228);
        }
        .body1{
            background-color:rgb(240,255,246);
            background-size:cover;
            height:650px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class=" col-12 body1 d-flex flex-column justify-content-center">
                <div class="query mx-auto pl-5 text-center">
                    <h1 class="pb-3">Enter your quest</h1>
                    <form method="post" action="query.php">
                        <label for="name" style="font-weight:bold;">Your Name:</label>
                        <input type="text" name="name" id="name" required><br>
                        <label for="query_text" style="font-weight:bold;" >Your Query:</label>
                        <textarea name="query_text" id="query_text" cols="55" rows="12" placeholder="Type your query                                                                   ex: How to approach guide?"></textarea>
                        <br><input type="submit" value="submit" class="btn btn-primary">
                        <button type="button" class="btn"><a class="btn btn-primary" href="leads.html" role="button">Back</a></button>
                    </form>
                </div>            
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>