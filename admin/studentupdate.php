<?php
    include 'connect.php';
    $usn=$_GET['updateusn'];
    $sql="select * from `student` where usn='$usn'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $usn=$row['usn'];
    $name=$row['name'];
    $sem=$row['sem'];
    $dob=$row['dob'];
    $email=$row['email'];
    if(isset($_POST['submit'])){
        session_start();
        $usn=$_POST['usn'];
        $name=$_POST['name'];
        $sem=$_POST['sem'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $id=$_SESSION['admin_id'];

        $sql = "UPDATE student SET usn='$usn',name='$name',sem='$sem',dob='$dob',email='$email',admin_id='$id' where usn='$usn'";

        if ($conn->query($sql) === TRUE) {
            header('location:studentdisplay.php');
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
    <label>USN</label>
    <input type="text" class="form-control" placeholder="Enter Usn" name="usn"value=<?php echo $usn;?>>
    
  </div>
  <div class="form-group my-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="name"value=<?php echo $name;?>>
    
  </div>
  <div class="form-group my-3">
    <labe>Sem</label>
    <input type="number" class="form-control" placeholder="Enter sem" name="sem"value=<?php echo $sem;?>>
    
  </div>
  <div class="form-group my-3">
    <label>Date Of Birth</label>
    <input type="date" class="form-control" placeholder="Enter DOB" name="dob"value=<?php echo $dob;?>>
    
  </div>
  <div class="form-group my-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter Event info" name="email"value=<?php echo $email;?>>
    
  </div>
 
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
 </div>

   
  </body>
</html>