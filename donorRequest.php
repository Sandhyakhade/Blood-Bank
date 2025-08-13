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
    $sql = "SELECT `id`, `name`, `age`, `blood_grp`, `phone_no`, `city`, `address`, `date_of_request`, `date_of_donation`, `health_history`, `status`, `email` FROM `donors` WHERE status='Pending' ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);

}
?>
    <html>
    <head>
  <style>
body{
    font-family:sens-serif;
    font-size:2rem;
    
}
table{
    border-collapse: collapse;
    border-color: red;
    background-color: blueviolet;
    color: white;
}
h3{
    text-align: center;
}
#approve{
    background-color:green ;
    color: white;
}
#delete{
    background-color: red;
    color: white;
}
th,td{
    padding: 10px;
}
input{
    margin-top: 5px;
    width: 100px;
    height: 30px;
}
th{
    background-color: black;
}


  </style>
    </head>
    <body>
        <h3>Pending Donor Requests</h3>
        <table border="1">
            <tr>
                <th>Id</th> <th>name</th> <th>Age</th> <th>Blood Group</th> <th>Phone no</th> <th>City</th><th> Address</th> <th>Date of Request</th> <th>Date of Donation</th> <th>Status</th> <th>Pending</th>
                <th>Email</th><th>Action</th>
            </tr>
            <?php while($row=mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $_SESSION['id']=$row['id'];
         echo"<tr><td>".$row['id']."</td>".
              "<td>".$row['name']."</td>".
              "<td>".$row['age']."</td>".
              "<td>".$row['blood_grp']."</td>".
              "<td>".$row['phone_no']."</td>".
              "<td>".$row['city']."</td>".
            "<td>".$row['address']."</td>".
             "<td>".$row['date_of_request']."</td>".
             "<td>".$row['date_of_donation']."</td>".
             "<td>".$row['health_history']."</td>".
             "<td>".$row['status']."</td>".
             "<td>".$row['email']."</td>".
             "<td>"."<form action='approve.php' method='POST' >"."<input type='number' name='id' value=$id hidden>".
            "<input type='submit' name='approve' id='approve' value='approve'>"."<br>"."<input type='submit' name='delete' id='delete' value='delete'></form>"."</td>"
             
             ."</tr>"
             ;
            }
            ?>
        </table>
    
    </body>
    </html>