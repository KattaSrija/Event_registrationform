<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['fullName'];
    $address=$_POST['address'];
    $comments=$_POST['comments'];
    $branch=$_POST['branch'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
 
$conn=new mysqli('localhost:3307','root',' ','event_management');
if($conn->connect_error)
{
    die("connection failed: ". $conn->connect_error);
}

    $sql="INSERT INTO event_registrations (Name,Email,Address,Phone_number,Branch,Comments) VALUES ('$name', '$email', '$address','$phone', '$branch', '$comments')";
   if($conn->query($sql) === TRUE)
   {
    echo "Data inserted successfully";
   }
   else
   {
   echo "Error:" . $sql . "<br>" . $conn->error;
   }

$conn -> close();
}
?>