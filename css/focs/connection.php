<?php
$conn = mysqli_connect("localhost", "root", "","event");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


?>
