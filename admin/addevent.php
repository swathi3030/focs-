<?php
    
    include 'connect.php';
    if(isset($_POST['submit'])){
        session_start();
        $name=$_POST['name'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $des=$_POST['des'];
        $id=$_SESSION['admin_id'];

        $sql ="INSERT INTO `event` (`event_name`, `date`, `time`,`des`,`admin_id`) VALUES ('$name', '$date', '$time','$des','$id')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header('location:display.php');
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
    <label>Event Name</label>
    <input type="text" class="form-control" placeholder="Enter Event Name" name="name">
    
  </div>
  <div class="form-group my-3">
    <label>Date</label>
    <input type="date" class="form-control" placeholder="Enter Event Date" name="date">
    
  </div>
  <div class="form-group my-3">
    <label>Time</label>
    <input type="time" class="form-control" placeholder="Enter Event time" name="time">
    
  </div>
  <div class="form-group my-3">
    <label>Event Description</label>
    <input type="textarea" class="form-control" placeholder="Enter Event Info" name="des">
    
  </div>
 
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
 </div>

   
  </body>
</html>