<?php
session_start();
?>
<html>
    <head>
    <style>
        body{
            
        }
        
        label{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1rem;
            color: red;
        }
        #submit{
            width: 100px;
            height: 40px;
            margin-top: 5px;
            margin-left: 10px;
        }
        th{
            background-color: black;
        }
        td{
            color: black;
        }
        </style>
    </head>
    <body>
        <h3>Search Blood Group</h3>
      <form action="search.php" method="POST">
        Select Blood Group
        <select name="bloodtype" id="bloodtype">
            <option value="A+">A+</option>
             <option value="A-">A-</option>
              <option value="B+">B+</option>
               <option value="B-">B-</option>
                <option value="O+">O+</option>
                 <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                   <option value="AB-">AB-</option>

        </select>
        <input type="submit" name="submit" id="submit" value="search">
      </form>  
    </body>
    <?php
    if (isset($_POST['submit'])) {
        $type = $_POST['bloodtype'];
        $servername = "localhost";
        $database = "bloodbank";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            echo preg_last_error();
        } else {
            $sql = "SELECT `id`, `blood_grp`, `quantity`, `best_before` FROM `bloodstock` WHERE `blood_grp`='$type'";
            $result = mysqli_query($conn, $sql);
            $numrows = mysqli_num_rows($result);
            if ($numrows <= 0) {
                echo "<h3>SORRY"."<br>".$type." "."BLOOD STOCK IS NOT AVAILABLE</h3>";
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
        </style>
        </head><body>
        <table border=1>";
          echo "<tr><th>Id</th><th>BloodGroup</th>
           <th>Quantity</th><th>Best-Before</th></tr>"; 
                while($row=mysqli_fetch_assoc($result)){
                  echo "<tr><td>" . $row['id'] . "</td>" .
                "<td>" . $row['blood_grp'] . "</td>" .
                "<td>" . $row['quantity'] . "</td>" .
                "<td>" . $row['best_before'] . "</td></tr>";
                }
            }
        }
    }
    ?>
</html>