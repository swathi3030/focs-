<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];


        $sql = "DELETE FROM event WHERE event_id=$id";

if ($conn->query($sql) === TRUE) {
  header ('location:display.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

    }
?>