<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include 'dbcon.php';
    
    // Extract POST data
    $user_id = $_POST['user_id']; 
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $order_date = $_POST['order_date']; 
    $status = 'Pending';

    // Validate input
    if (empty($user_id) || empty($item_name) || empty($quantity) || !is_numeric($quantity) || $quantity <= 0) {
        // Handle validation errors
        echo "Invalid input. Please provide valid user ID, item name, and quantity.";
    } else {
        // Prepare SQL query
        $qry = "INSERT INTO orders (UserID, item_name, quantity, OrderDate, Status) VALUES ('$user_id', '$item_name', '$quantity', '$order_date', '$status')";
        
        // Execute query
        $result = mysqli_query($con, $qry); 
        
        // Check if query was successful
        if ($result) {
            echo "Order placed successfully!";
        } else {
            // Handle database errors
            echo "Error: " . mysqli_error($con);
        }
        
        // Close database connection
        mysqli_close($con);
    }
} else {
    // Redirect to the order form if accessed directly without form submission
    header("Location: makeorder.php");
    exit();
}
?>
