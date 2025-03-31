<?php
$conn = mysqli_connect("localhost", "root", "", "localeads");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch reviews for a specific place
$place_id_to_display = isset($_GET['place_id']) ? $_GET['place_id'] : NULL;

if ($place_id_to_display !== null) {
    $sql = "SELECT * FROM reviews WHERE place_id = $place_id_to_display";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>{$row['name']}</strong>: {$row['comment']}</p>";
            }
        } else {
            echo "No reviews for this place yet.";
        }
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid place_id parameter.";
}

// Close database connection
$conn->close();
?>


