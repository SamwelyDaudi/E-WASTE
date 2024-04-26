<?php
session_start(); // Start session
include "dbcon.php";

if(isset($_POST["login"])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

   
    // Prepare and execute the query using prepared statements
    $stmt = $con->prepare("SELECT AdminID FROM staff WHERE Username=? AND UserPassword=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) { // If user exists
        $row = $result->fetch_assoc();
        $_SESSION['admin_id'] = $row['AdminID'];
        header('location:adminindex.php');
        exit(); // Stop further execution
    } else {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Wrong Username or Password'); window.location.href='loginOg.php';</script>");
        exit(); // Stop further execution
    }
}

mysqli_close($con);
?>
