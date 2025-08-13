<?php
session_start();
$_SESSION['username'] = "Admin";
header("location: admin_dashboard.php");

if (isset($_POST['submit'])) {
    $servername = "localhost";
    $database = "bloodbank";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        echo preg_last_error();
    } else {
        $admin_password = $_POST['passw'];
        $sql = "SELECT `user_id`, `username`, `password` FROM `users` WHERE `password`='$admin_password' AND `username`='Admin'";
        $result = mysqli_query($conn, $sql);
        $numrows = mysqli_num_rows($result);
        if ($numrows <= 0)
            echo "<h3>Password is incorrect</h3>";
        else if ($numrows == 1)
            header("location :admin_dashboard.php");


    }
}



  

