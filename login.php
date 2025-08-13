<?php
session_start();
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $database = "bloodbank";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    $_SESSION['user'] = $_POST['email'];
    $user_name = $_POST['email'];
    $pass = $_POST['passw'];
    if (!$conn) {
        echo preg_last_error();
    } else {
        $sql = "SELECT `password` FROM `users` WHERE username='$user_name' ";
         $result = mysqli_query($conn, $sql);
        $numrows = mysqli_num_rows($result);
        if ($numrows > 0) {
            $result = mysqli_query($conn, $sql);
            $numrows = mysqli_fetch_row($result);
            if ($numrows[0] == $pass) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $_POST['name'];
                header("location: user_dashboard.php");
            }
             else{
            echo "<h3>Password is Incorrect</h3>";
        }
        }
        else{
            echo "<h3>Username does not exists ,Please sign-up</h3>";
        }

    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
  <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
        text-align: center;
        color: red;
        
    }
    .container{
        margin: auto;
        width: 400px;
        height: 90vh;
        border: 2px solid black;
        text-align: center;
        color: black;
    }
    label{
     line-height: 1.5rem; 
     letter-spacing: 1px; 
    }
    input{
        width: 270px;
        height: 40px;
        margin-top:10px ;
        margin-bottom: 15px;
        border-radius: 10px;
    }
    #submit{
        width: 100px;
        height: 50px;
        background-color:green;
        border-radius: 10px;
    }
    #reset{
         width: 100px;
        height: 50px;
        background-color:red;
        border-radius: 10px;

    }
    #reset:hover{
        color:white;
    }

    #submit:hover{
        background-color: green;
        color: white;
    }
    @media screen and (max-width:300px) {
        .container{
            margin: auto;
            width: 100%;
            height: 100%;
        }
        #submit,input,label{
            width: 100%;
        }
        
    }
  </style>                 
    </head>
    <body>
        <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <h3>Please sign-up before LOGIN </h3>
            <h1> LOGIN </h1>
            <label for="name">Enter Your First Name</label><br>
            <input type="name" name="name"id="name" placeholder="First Name" required  pattern="/^[A-Z|a-z]$/"><br>
            <label for="email">Enter Your Email</label><br>
            <input type="email" name="email" id="email" placeholder="Email" required  ><br>
            <label for="passw">Enter Password</label><br>
            <input type="password" name="passw" id="passw" placeholder="Create a Password" required ><br>
              <input type="submit" name="submit" id="submit" value="Login" onclick="message()" >
               <input type="reset" name="reset" id="reset" value="reset">
        </form>
        </div>
        <script src="" async defer></script>
    </body>
</html> 