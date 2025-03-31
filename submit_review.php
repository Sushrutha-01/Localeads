<?php
$conn = mysqli_connect("localhost", "root", "", "localeads");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $place_id = $_POST["place_id"];
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $sql = "INSERT INTO reviews (place_id,name,comment) VALUES ($place_id,'$name','$comment')";
    
    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Review updated sucessfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>