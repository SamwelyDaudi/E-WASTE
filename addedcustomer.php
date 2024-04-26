<?php
include "dbcon.php";

if(isset($_POST["send"])){
    $CustomerID = $_POST['CustomerID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $device = $_POST['device'];
    $phone_number = $_POST['phonenumber'];

    $postedcustomer = "INSERT INTO customer (CustomerID, CustomerName, Email, CustomerLocation, Device, Phone_Number) VALUES ($CustomerID, '$name', '$email', '$location', '$device', '$phone_number')";

}

if (mysqli_query($con, $postedcustomer)) {			
    echo ("<script LANGUAGE='JavaScript'>window.alert('Device information recorded succesfully'); window.location.href='getstarted.php';</script>");
} /*else {
    echo "Error: " . $sql . ":-" . mysqli_error($db);
}	*/
mysqli_close($con);

?>








