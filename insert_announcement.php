<?php
include "dbcon.php";

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $announcement = mysqli_real_escape_string($con, $_POST['announcement']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $organizer = mysqli_real_escape_string($con, $_POST['organizer']);

    // Insert data into the database
    $query = "INSERT INTO announce (announcement, dat, organizer) VALUES ('$announcement', '$date', '$organizer')";

    if (mysqli_query($con, $query)) {
        echo "Announcement added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
} else {
    echo "Invalid request!";
}
?>
