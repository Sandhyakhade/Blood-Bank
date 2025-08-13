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
                margin: 0;
                padding: 0;
                font-family: 'Courier New', Courier, monospace;
                text-align: center;
                background-color: green;
            }
            form{
               margin-top: 150px;
              margin-left: 150px;
              text-align: center;
               width: 600px;
               height: 200px;
                border: 2px solid black;
                background-color: white;
                border-radius: 20px;
            }
            h3{
                margin-top: 50px;
            }
            input{
                margin-top: 10px;
                width: 300px;
                height: 30px;
                border-radius: 10px;
                outline: darkgreen;
                
            }
            #submit{
                margin-top: 30px;
                width: 100px;
                height: 30px;
                border-radius: 10px;
                background-color: green;
                color: white;
            }
            #submit:hover{
                background-color: darkcyan;
            }
            </style>
    </head>
    <body>
       <form action="admin_login.php" method="post">
        <h3>Please ,Enter Your Password Admin</h3>
        <input type="password" name="passw" id="passw" required><br>
        <input type="submit" name="submit" id="submit" value="Login">
       </form>
        
        <script src=""t async defer></script>
    </body>
</html>