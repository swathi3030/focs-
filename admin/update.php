<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql="select * from `event` where event_id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['event_name'];
    $date=$row['date'];
    $time=$row['time'];
    $desc=$row['des'];
    if(isset($_POST['submit'])){
        session_start();
        $name=$_POST['name'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $des=$_POST['des'];
        $aid=$_SESSION['admin_id'];

        $sql = "UPDATE event SET event_id=$id,event_name='$name',date='$date',time='$time',des='$des',admin_id='$aid' where event_id=$id";

        if ($conn->query($sql) === TRUE) {
          header('location:display.php');
        } else {
          echo "Error updating record: " . $conn->error;
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
    <label>Event_Name</label>
    <input type="text" class="form-control" placeholder="Enter Event Name" name="name" value=<?php echo $name;?>>
    
  </div>
  <div class="form-group my-3">
    <label>Date</label>
    <input type="date" class="form-control" placeholder="Enter Event Date" name="date"value=<?php echo $date;?>>
    
  </div>
  <div class="form-group my-3">
    <label>Time</label>
    <input type="time" class="form-control" placeholder="Enter Event time" name="time"value=<?php echo $time;?>>
    
  </div>
  <div class="form-group my-3">
    <label>Event Description</label>
    <input type="textArea" class="form-control" placeholder="Enter Event info" name="des"value=<?php echo $desc;?>>
    
  </div>
 
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
 </div>

   
  </body>
</html>