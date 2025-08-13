<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="receive.css">
    </head>
    <body>
        <h1>Blood Receive Form</h1>
        <form  action="addreceivers.php"method="POST">
            <br>
            <label for="fullname">Enter Your Full Name</label><br>
            <input type="text" name="fullname" id="fullname" pattern="/^[A-Z|a-z]$/" required><br><br>
              <label for="email">Enter Your Email</label><br>
            <input type="email" name="email" id="email" required><br><br>
            <label for="age" >Enter Your Age</label><br>
            <input type="number" name="age"id="age"pattern="/^[0-9]$/" required><br><br>
            <label for="phoneno">Enter Your Phone No</label><br>
            <input type="number" name="phoneno" id="phoneno" value="+91-9665098328"><br><br>
            <label for="bloodgroup">Choose a Blood Group:</label>
         <select name="bloodgroup" id="cars">
           <option value="O+">O+</option>
           <option value="O-">O-</option>
            <option value="A+">A+</option>
              <option value="A-">A-</option>
               <option value="B+">B+</option>
              <option value="B-">B-</option>
          </select><br><br>
          <label for="city">Enter Your city</label><br>
          <input type="text" name="city"id="city" pattern="/^[A-Z|a-z]$/"  required><br><br>
          <label for="address">Enter Your Address</label><br>
          <input type="text" name="requesttype"id="requesttype" value="receiver" hidden>
          <input type="text" name="address"id="address"required><br><br>
          <label for="quantity">Enter blood quantity </label><br>
          <input type="text" name="quantity"id="quantity"  placeholder="1 UNIT" required><br><br>
          <label for="darequest">Enter date of request</label><br>
          <input type="date" name="darequest"id="darequest" required><br><br>
          <label for="dareceive">Enter date of receive</label><br>
          <input type="date" name="dareceive"id="dareceive" required><br><br>
          <input type="submit" name="submit"id="submit" value="send Request" >
          <input type="reset" name="reset"id="reset">



          

        </form>
        
        <script src="receive.js" async defer></script>
    </body>
</html>