<?php
include 'dbcon.php';

// Check if the order ID is provided in the URL
if(isset($_GET['id'])) {
    // Get the order ID from the URL and escape it
    $order_id = mysqli_real_escape_string($con, $_GET['id']);

    // Update the status of the order to "Approved"
    $qry = "UPDATE orders SET Status = 'Approved' WHERE OrderID = $order_id";
    $result = mysqli_query($con, $qry);

    // Check if the query was successful
    if ($result) {
        // Redirect back to the admin panel after updating the status
        header("Location: orders.php");
        exit();
    } else {
        echo "Error updating order status: " . mysqli_error($con);
    }
} else {
    // If the order ID is not provided in the URL, display an error message
    echo "Order ID not provided";
}
?>
