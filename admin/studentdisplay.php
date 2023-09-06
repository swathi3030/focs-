<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOCS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php include "navbar.php"; ?> 
    <div class="container" style="padding-left:20%;">
        <button class="btn-primary my-5"><a href="addstudent.php" class="text-light">Add Student</a>
            </button>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">USN</th>
      <th scope="col">Name</th>
      <th scope="col">Sem</th>
      <th scope="col">DOB</th>
      <th scope="col">Email</th>
      <th scope="col">Phone_no</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //   $sql="select * from `event`";
    //   $result=mysqli_query($con,$sql);
    //   if($result){
    //     $row=mysqli_fetch_assoc($result);
    //     echo $row['event_name'];
    //   }

    $sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $usn=$row['usn'];
    $name=$row['name'];
    $sem=$row['sem'];
    $dob=$row['dob'];
    $email=$row['email'];
    $phone=$row['phone_no'];
    echo '<tr>
    <th scope="row">'.$usn.'</th>
    <td>'.$name.'</td>
    <td>'.$sem.'</td>
    <td>'.$dob.'</td>
    <td>'.$email.'</td>
    <td>'.$phone.'</td>
    <td>
    <button class="btn btn-primary"><a href="studentupdate.php?updateusn='.$usn.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="studentdelete.php?deleteusn='.$usn.'" class="text-light" >Delete</a></button>
   </td>
  </tr>';
  }
} 
    ?>
  
  </tbody>
</table>
    </div>
</body>
</html>