<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
         <script src="index.js" async=true ></script>
  <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
      
    }
    .container{
        margin: auto;
        margin-top: 20px;
        padding: 40px;
        width: 400px;
        height: 500px;
        border: 2px solid black;
        text-align: center;
        border-radius: 15px;
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
        border-radius: 15px;
        background-color: green;
    }
    #submit:hover,#reset{
        background-color: green;
    }
    #reset{
      width: 150px;
      background-color: red;
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
        <form action="signup.php" method="POST" onsubmit="return validation()" name="frm">
            <h1>Sign Up</h1>
            <label for="email">Enter Your Email</label><br>
            <input type="email" name="email" id="email" placeholder="Email" required ><br>
            <label for="passw">Enter Password</label><br>
            <input type="password" name="passw" id="passw" placeholder="Create a Password"  required><br>
            <label for="cpassw">Confirm Your Password</label><br>
            <input type="password" name="cpassw" id="cpassw" placeholder="Confirm Your Password" required><br> 
          <br>
            <input type="submit" name="submit" id="submit" value="Sign Up" onsubmit="return validate()"  >
            <input type="reset" name="reset"id="reset" value="Reset">
        </form>
        </div>
      
    </body>
</html> 