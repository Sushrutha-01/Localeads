<?php
// Establish database connection
if (!function_exists('displayReviews')) {
$conn = new mysqli('localhost', 'root', '', 'localeads');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to display reviews for a specific place
function displayReviews($place_id) {
    global $conn;

    $sql = "SELECT * FROM reviews WHERE place_id = $place_id";
    $result = $conn->query($sql);
    if ($result === false) {
        echo "<p>Error executing query: " . $conn->error . "</p>";
        return;
    }
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>{$row['name']}</strong>: {$row['comment']}</p>";
            }
        } else {
            echo "<p>No reviews for this place yet.</p>";
        }
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
}

// Close database connection (optional if included in another script)
// $conn->close();
?>
