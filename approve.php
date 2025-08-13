<?php
session_start();
$id = $_POST['id'];
$servername = "localhost";
    $database = "bloodbank";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username,$password,$database);
if (!$conn) {
    echo preg_last_error();
}
        if(isset($_POST['approve'])){   
            $id = $_POST['id'];
            $query = "UPDATE `receivers` SET `status`='Approved' WHERE `id`='$id'";
            $result = mysqli_query($conn, $query);
    echo "approved";
    
        
}
if (isset($_POST['delete'])) {

    $id = $_POST['id'];
    $query = "DELETE FROM `receivers` WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    header("location: _dashboard.php");
}
