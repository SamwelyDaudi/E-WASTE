<?php
session_start();
include "dbcon.php"; 
if(isset($_POST["login"])){
    $UserID = mysqli_real_escape_string($con, $_POST['UserID']);
                        $password = mysqli_real_escape_string($con, $_POST['password']);

                        $query      = mysqli_query($con, "SELECT * FROM useraccount WHERE  UserPassword='$password' AND UserID='$UserID'");
                        $row        = mysqli_fetch_array($query);
                        $num_row    = mysqli_num_rows($query);
                        
                        if ($num_row > 0) 
                            {           
                                $_SESSION['user_id']=$row['UserID'];
                                header('location:UserDashboard.php');
                                
                            }
                        else
                            {
                                echo ("<script LANGUAGE='JavaScript'>window.alert('Wrong Username or Password'); window.location.href='userlogin.php';</script>");    
                            }
}
mysqli_close($con);
?>