<?php     
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $showAlert="false";
  include 'connection.php';   
    $admin_id = $_POST['admin_id'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($admin_id);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from admin where admin_id = '$admin_id' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        
        
        if($count == 1){  
            // echo "<h1><center> Login successful </center></h1>";  
            
          $_SESSION['first_name']=$row['first_name'];
          $_SESSION['email']=$row['email'];
          $_SESSION['admin_id']=$row['admin_id'];
        
         
            echo "<script> window.location.assign('admin/index.php');</script>";

        }  
        else{  
          echo "<script> alert('Wrong Details');</script>";
        }   
      }  
?>  




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:wght@300&family=Varela+Round&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />

    <style>
        .nav-link{
            font-size: 18px;
        }
     
    </style>
    <title>FOCS</title>
    <link rel="icon" type="image/x-icon" href="img/focs.jpg">
  </head>
  <body class="gradient-custom">
      <section >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center"><a href="index.php"><i class="fa fa-home" style="color: white;font-size: 30px;" aria-hidden="true"></i></a>
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-4 text-uppercase">Admin Login</h2>
                            <p class="text-white-50 mb-5">Please Enter Your Usn and Password</p>
                            <form method="post" action="admin-login.php">
                            <div class="form-outline form-white mb-4">
                                <input type="number" id="typeEmail" class="form-control form-control-lg" placeholder="admin_id" name="admin_id">
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="typePass" class="form-control form-control-lg" placeholder="password" name="password">
                            </div>
                            
                            <p class="small mb-5 pb-lg-2"><a href="#" class="text-white-50">Forgot Password?</a></p>
                            <button class="btn btn-outline-light btn-lg px-4" type="submit" name="submit">Login</button>
                        </div>
                        </form>
                        <div>
                            <p class="mb-0">Don't have a account? <a href="admin-registration.php" class="text-white-50 fw-bold">Register</a></p>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>