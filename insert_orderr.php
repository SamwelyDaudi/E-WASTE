<?php
// Include database connection file
include 'dbcon.php';

// Extract POST data
$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
$item_name = isset($_POST['item_name']) ? $_POST['item_name'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$order_date = isset($_POST['order_date']) ? $_POST['order_date'] : ''; 

// Prepare and execute SQL query
$qry = "INSERT INTO orders (UserID, item_name, quantity, OrderDate) VALUES ('$user_id', '$item_name', '$quantity', '$order_date')";
if (mysqli_query($con, $qry)) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . mysqli_error($con);
}

// Close database connection
mysqli_close($con);
?>
