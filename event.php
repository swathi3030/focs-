<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOCS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:wght@300&family=Varela+Round&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />

</head>
<body style="margin-top:130px;">
<?php include('header.php');
    ?>

<!-- <div class="card mx-5" style="width: 28rem;"> -->

                            <?php
$sql="SELECT event_name,des from event";
// $query = $conn -> prepare($sql);
// $query->execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);

// $cnt=1;
if($result=mysqli_query($conn,$sql))
{
while($row = mysqli_fetch_object($result))
{               ?>
         <div class="container gradient-custom" style="display:flex; justify-content:center;">       
 <div class="card mx-5 my-3" style="width: 58rem; background-color:salmon; padding:20px;border:4px solid black;">
                    <div class="card-body" style="font-family: 'Roboto', sans-serif; text-align:center;">
                            <h2 class="card-title" style="font-style:italic;"><?php  echo htmlentities($row->event_name);?></h2>

                            <p class="card-text" style="font-size:25px;"><?php  echo ($row->des);?>.</p>
</div></div></div>
                           <?php }mysqli_free_result($result);} ?>
                    

      
</body>
</html>

<!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->