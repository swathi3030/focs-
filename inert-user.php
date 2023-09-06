<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $showAlert="false";
  include 'connection.php';

  $usn=$_POST['usn'];
    $sem = $_POST['sem'];
    $dob =  $_POST['dob'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $exists=false;
    if(($pass==$cpassword) && $exists==false){
        $sql ="INSERT INTO `student` (`usn`, `sem`, `dob`, `email`, `phone_no`, `password`) VALUES ('$usn', '$sem', '$dob', '$email', '$phone_no', '$pass')";
        $result = mysqli_query($conn, $sql);
        if($result){
          echo "success";
        }
        else{
          die("Connection failed: " . mysqli_connect_error());
        }
      }
}

?>