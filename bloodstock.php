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
    $sql = "SELECT `id`, `blood_grp`, `quantity`, `best_before` FROM `bloodstock`";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);
    if($numrows<=0){
        echo "<html><head></head><body>" . "NO Blood Stock Yet"."</body></html>";
    }
    else{
        echo "<html><head>
        <style>
         body{
            text-align:centre;
            font-family:sens-serif;
            font-size:2rem;
         }
         table{
        
            border-collapse:collapse;

         }
         th,td{
            padding:20px;

         }
         th{
            background-color:black;
            color:white
         }
         
        </style>
        </head><body>
        <h1>Blood Stock</h1>
        <table border=1>";
          echo "<tr><th>Id</th><th>BloodGroup</th>
           <th>Quantity</th><th>Best-Before</th></tr>"; 
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td>" .
                "<td>" . $row['blood_grp'] . "</td>" .
                "<td>" . $row['quantity'] . "</td>" .
                "<td>" . $row['best_before'] . "</td></tr>";
        }
        echo "</table></body></html>";
    }

}