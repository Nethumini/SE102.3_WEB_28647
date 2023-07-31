<?php

  $conn = mysqli_connect("localhost","root","","University");
  if(!$conn)
  {
    die("Connection failed!");
  }
  echo "Database Connected!";



?>