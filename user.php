<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO 'crud'(name,email,mobile,password) values('$name','$email','$mobile','$password')"
    $con = mysqli_connect("localhost", "root", "your_password", "crud");

    $result=mysqli_query($con,$sql);
    if($result){
        echo"Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
<form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name"name="name" autocomplete="off">
    
    </div>
    <div class="mb-3">
    <label>Email </label>
    <input type="email" class="form-control" placeholder="Enter your email"name="email" autocomplete="off">
    
    </div>
    <div class="mb-3">
    <label>Mobile</label>
    <input type="mobile" class="form-control" placeholder="Enter your Mobile"name="Mobile" autocomplete="off">
    
    </div>
    <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your password"name="password" autocomplete="off">
    
    </div>
    
        <br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
        <br><br>
    </form>
 

</form>
</div>
    
</body>
</html>