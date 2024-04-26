<?php
include "dbcon.php";

if(isset($_POST["signup"])){
    $userid = $_POST['userid'];
    $name = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind the statement
    $stmt = $con->prepare("INSERT INTO useraccount (UserID, UserName, UserPassword) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $userid, $name, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script LANGUAGE='JavaScript'>window.alert('You have signed up Succesfully'); window.location.href='userlogin.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close database connection
$con->close();
?>
