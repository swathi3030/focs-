<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:wght@300&family=Varela+Round&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />

<div class="sidebar active" id="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i id="icon-home" class="fa fa-home"></i>
                <div class="icon_name"> ADMIN</div>
            </div>
            <span id="btn"><i class="fa fa-bars"></i></span>
        </div>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="assests\focs.jpg" alt="">
                    <div class="name_job"><?php 
                    session_start();
                      include '../connection.php';
                     if (strlen($_SESSION['first_name']!=0)){
                        //   $fname=$_SESSION['first_name'];
                    
                         ?> <div class="name"><?php echo $_SESSION['first_name']; ?></div> 
                          <div class="email"><?php echo $_SESSION['email']; ?></div> 
                    <?php } ?>
                   
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav_list">
            <li>
                <a href="index.php">
                    <i id="icon" class="fa fa-th-large" aria-hidden="true"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
            <a href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i id="icon" class="fa fa-users" aria-hidden="true"></i>
                <span class="links_name">Student</span>
                <i class="down-arrow fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                <li><a href="addstudent.php" class="dropdown-item">New Student</a></li>
                <li><a href="studentdisplay.php" class="dropdown-item">View Student</a></li>
            </ul>
            </li>
            <li>
            <a href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i id="icon" class="fa fa-users" aria-hidden="true"></i>
                <span class="links_name">Events</span>
                <i class="down-arrow fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                <li><a href="addevent.php" class="dropdown-item">New Event</a></li>
                <li><a href="display.php" class="dropdown-item">View Event</a></li>
                
            </ul>
            </li>
            <li>
                <a href="../index.php">
                    <i id="icon" class="fa fa-sign-out" aria-hidden="true"></i>
                    <span class="links_name">Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
