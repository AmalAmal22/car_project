<?php
session_start();
include "conn.php";

if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password = $_POST['password'];
$query = mysqli_query($conn,"SELECT * FROM `login` WHERE `email`='$email' AND `password`='$password'");
if($query)
{
    $row=mysqli_fetch_assoc($query);
    $count=mysqli_num_rows($query);

    if($count==1)
    {
        $_SESSION['id'] = $row['id'];

        ?>

        <script>window.location.href="../index2.php";</script>
        <?php
    }
  }
    else
    {
      echo"invalid username and password";

    }
       
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
  <div class="container">
    <div class="row">
      <div class="col-4 bg-secondary mx-auto text-light p-3 rounded" style="margin-top:170px;">
        <form action="" method="POST">
          <h1 class="text-center">Login</h1>

          <label for="email">Email;</label>
          <input type="email" name="email" id="email" class="form-control">

          <label for="password">Password;</label>
            
          <input type="password" name="password" id="password" class="form-control">

          <input type="submit" class="btn btn-danger w-25 mt-3" name="submit" style="margin-left:150px">
          
        </form>
      </div>
    
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>