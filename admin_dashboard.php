<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BloodBank</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin_dashboard.css">
    <script src="https://kit.fontawesome.com/
    <script src="https://kit.fontawesome.com/15ab474e44.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/15ab474e44.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="sidebar">
    <div class="logo">
            <div class="profile">
            <span class="fas fa-user"></span><br>
            </div>
            <div class="user-name"><h2><?php if(isset($_SESSION['username']) )echo $_SESSION['username'];?> </h2>
            </div>
    
            
            <ul class="menu">
            <li class="active"><a href="#">Admin Dashboard</a></li>
            <li><a href="donorRequest.php">Donor Request</a></li>
             <li><a href="receiverRequest.php">receiver Request</a></li>
            <li><a href="bloodstock.php">Stock</a></li>
            <li><a href="search.php">Search</a></li>
        </ul>
    </div>
       <div class="logout">
        <li><a href="logout.php">Logout</a></li>
    </div>
   
</div>
<div class="main-content">
    <div class="header-wrapper">
        <h2>Welcome,To Blood Bank Management System</h2>
        </div>
    <div class="main-second">
    
    </div>
    </div>
</div>
    

</body>
</html>