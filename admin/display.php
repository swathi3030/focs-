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
        <button class="btn-primary my-5"><a href="addevent.php" class="text-light">Add Event</a>
            </button>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">Event Name</th>
      <th scope="col">date</th>
      <th scope="col">Time</th>
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

    $sql = "SELECT * FROM event";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row['event_id'];
    $name=$row['event_name'];
    $date=$row['date'];
    $time=$row['time'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$date.'</td>
    <td>'.$time.'</td>
    <td>
    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" >Delete</a></button>
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