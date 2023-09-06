<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:wght@300&family=Varela+Round&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" /> -->

    <style>
        .nav-link{
            font-size: 20px;
        }
     
    </style>
    <title>ADMIN</title>
    <link rel="icon" type="image/x-icon" href="assests/focs.jpg">
  </head>
  <body class="bg-info">
    <?php include("navbar.php"); ?>

    <div class="home_content">
        <!-- home Dashboard -->
        <div class="container mt-5" style="margin-left: 25%;">
            <div class="row">
                <!-- first row first column -->
                <div class="col-lg-3 col-md-6 mt-2">
                    <div class="card text-center">
                        <div class="card-header pt-5 bg-danger text-white">
                            <div>
                                <h3>Total Events</h3>
                                <br>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fa fa-list fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h4>
                                <a href="display.php" class="text-primary">View Details</a>
                            </h4>
                        </div>

                    </div>

                </div>
                <!-- first row second column -->
                <div class="col-lg-3 col-md-6 mt-2">
                    <div class="card text-center">
                        <div class="card-header pt-5 bg-success text-white">
                            <div>
                                <h3>Total Students</h3>
                                <br>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <i class="fa fa-snowflake fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h4>
                                <a href="studentdisplay.php" class="text-primary">View Details</a>
                            </h4>
                        </div>

                    </div>

                </div>
                
            </div>
        </div>
    </div>
    <script>
        //let btn = document.querySelector("#btn");
        //let sidebar = document.getElementById(".sidebar");

        // function changeClass() {
        //     console.log("click");
        //     document.getElementById('sidebar').classList.add("active");
        // }
    </script>
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        --> </body>
</html>