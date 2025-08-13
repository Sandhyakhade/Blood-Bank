<?php
session_start();
if (isset($_POST['submit'])) {
     $servername = "localhost";
    $database = "bloodbank";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username,$password,$database);
    if (!$conn) {
        echo preg_last_error();
    } else {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $bloodgroup = $_POST['bloodgroup'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $phoneno = $_POST['fullname'];
        $quantity = $_POST['quantity'];
         $date_of_request = $_POST['dorequest'];
        $date_of_receive = $_POST['doreceive'];
        $sql = "INSERT INTO `receivers`(`id`, `name`, `age`, `blood_grp`, `phone_no`, `city`, `address`, `date_of_request`, `date_of_receive`, `email`, `quantity`, `status`) VALUES ('','$name','$age','$bloodgroup','$phoneno','$city','$address','$darequest','$dareceive','$email','$quantity','pending')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "ERROR";
        } else {
            echo "<h3>your request has been sent<h3><br><h2>It is waiting to get approval from the admin</h2>";
        }
        
    }

}