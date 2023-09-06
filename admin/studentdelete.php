<?php
    include 'connect.php';
    if(isset($_GET['deleteusn'])){
        $usn=$_GET['deleteusn'];


        $sql = "DELETE FROM student WHERE usn='$usn'";

if ($conn->query($sql) === TRUE) {
  header ('location:studentdisplay.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

    }
?>