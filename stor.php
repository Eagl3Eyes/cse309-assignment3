<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$conn = mysqli_connect("localhost", "root", "", "form");

if($conn === false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}

$sql = "INSERT INTO users (First_name,Last_name,Email,Phone,Message) VALUES ('$fname','$lname','$email','$phone','$message')";
if(mysqli_query($conn,$sql)){
    echo "Recodes Added Sucessfully";
}else{
    echo "ERROR: Could not connect.".mysqli_connect_error($conn);
}
mysqli_close($conn);
?>