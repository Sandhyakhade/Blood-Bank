<?php
session_start();
     $servername = "localhost";
    $database = "bloodbank";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username,$password,$database);
    if (!$conn) {
        echo preg_last_error();
} else {
    $user = $_SESSION['user'];
    $sql = "SELECT `id`, `name`, `age`, `blood_grp`, `phone_no`, `city`, `address`, `date_of_request`, `date_of_donation`, `health_history`, `status`, `email` FROM `donors` WHERE `email`='$user'";
    $result = mysqli_query($conn, $sql);
    echo " <html><head>
    <style>
    table{
        border-collapse:collapse;
    }
    th,td{
        padding:20px;
    }
    h1{
        text-align:center;
    }
    </style>
    </head><body>
    <h1>Your Requests</h1>
    <table border=1>
            <tr>
                <th>name</th> <th>Age</th> <th>Blood Group</th> <th>Phone no</th> <th>City</th><th> Address</th> <th>Date of Request</th> <th>Date of Donation|Receive</th> <th>Health History</th> <th>Status</th>
                <th>Email</th>
                <th>Request Type</th><th>Quantity</th>
                <th>Address</th>
            </tr>";
     while($row=mysqli_fetch_assoc($result)){
        echo
            "<td>" . $row['name'] . "</td>" .
            "<td>" . $row['age'] . "</td>" .
            "<td>" . $row['blood_grp'] . "</td>" .
            "<td>" . $row['phone_no'] . "</td>" .
            "<td>" . $row['city'] . "</td>" .
            "<td>" . $row['address'] . "</td>" .
            "<td>" . $row['date_of_request'] . "</td>" .
            "<td>" . $row['date_of_donation'] . "</td>" .
            "<td>" . $row['health_history']. "</td>" .
            "<td>" . $row['status'] . "</td>" .
            "<td>" . $row['email'] . "</td>" .
             "<td>" . "Donor" . "</td>" .
             "<td>" . "-" . "</td>" .
             "<td>" . "Shivajinagar pune -5" . "</td>" .
            "<td></tr>";
     }
         $sql = "SELECT `id`, `name`, `age`, `blood_grp`, `phone_no`, `city`, `address`, `date_of_request`, `date_of_receive`, `email`, `quantity`, `status` FROM `receivers` WHERE `email`='$user'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
       echo "<td>" . $row['name'] . "</td>" .
            "<td>" . $row['age'] . "</td>" .
            "<td>" . $row['blood_grp'] . "</td>" .
            "<td>" . $row['phone_no'] . "</td>" .
            "<td>" . $row['city'] . "</td>" .
            "<td>" . $row['address'] . "</td>" .
            "<td>" . $row['date_of_request'] . "</td>" .
            "<td>" . $row['date_of_receive'] . "</td>" .
            "<td>" . "-". "</td>" .
            "<td>" . $row['status'] . "</td>" .
            "<td>" . $row['email'] . "</td>" .
             "<td>" . "Receiver" . "</td>" .
             "<td>" . $row['quantity'] . "</td>" .
            "<td></tr></table></body></html>";
    }
              
}