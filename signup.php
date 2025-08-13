<?php
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $database = "bloodbank";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username,$password,$database);
     $user_name = $_POST['email'];
    $pass = $_POST['passw'];
    if (!$conn) {
        echo preg_last_error();
    } else {
        $sql = "SELECT * FROM `users` WHERE username='$user_name' ";
        $result = mysqli_query($conn, $sql);
        $numrows = mysqli_num_rows($result);
        if($numrows>0){
            echo "<h1>the user already exists</h1>";
        } 
        else
        {
            $sql = "INSERT INTO `users`(`user_id`, `username`, `password`) VALUES ('','$user_name','$pass')";
            $result = mysqli_query($conn, $sql);
            echo "You are registred";
        }

        }
    }

    
    
  