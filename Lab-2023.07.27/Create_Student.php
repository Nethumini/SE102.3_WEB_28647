<?php
$conn = mysqli_connect("localhost", "root", "", "University");

if (!$conn) {
    die("Connection failed!".mysqli_connect_error());
}

$id = $_REQUEST['Id'];
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email']; 
$password = $_REQUEST['Password'];


$sql = "INSERT INTO Students (User ID, Name, Email, Password) 
VALUES ('".$id."', '".$name."', '".$email."', '".$password."')";

if ($conn->query($sql) === TRUE) {
    echo "Success";
}
 else {
    echo "Error".$sql."<br>".$conn->error;
}

?>
