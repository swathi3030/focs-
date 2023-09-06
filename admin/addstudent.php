<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        session_start();
        $usn=$_POST['usn'];
        $name=$_POST['name'];
        $sem=$_POST['sem'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $id=$_SESSION['admin_id'];

        $sql ="INSERT INTO `student` (`usn`, `name`, `sem`,`dob`,`email`,`phone_no`,`admin_id`) VALUES ('$usn', '$name', '$sem','$dob','$email','$phone','$id')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header('location:studentdisplay.php');
        }
        else{
            die("Connection failed: " . mysqli_connect_error());
        }
    }
?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FOCS</title>
  </head>
  <body>
  <?php include "navbar.php"; ?> 
        
 <div class="container my-5" style="padding-left:20%;">
 <form method="post">
  <div class="form-group my-3">
    <label>USN</label>
    <input type="text" class="form-control" placeholder="Enter USN" name="usn">
    
  </div>
  <div class="form-group my-3">
    <label>NAME</label>
    <input type="text" class="form-control" placeholder="Enter Student Name" name="name">
    
  </div>
  <div class="form-group my-3">
    <label>Sem</label>
    <input type="text" class="form-control" placeholder="Enter Sem" name="sem">
    
  </div>
  <div class="form-group my-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter Email" name="email">
    
  </div>
  <div class="form-group my-3">
    <label>Date Of Birth</label>
    <input type="date" class="form-control" placeholder="Enter DOB" name="dob">
    
  </div>
  <div class="form-group my-3">
    <label>Phone Number</label>
    <input type="number" class="form-control" placeholder="Enter Phone_no" name="phone">
    
  </div>
 
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
 </div>

   
  </body>
</html>