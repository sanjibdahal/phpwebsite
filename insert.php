<?php
  $server="localhost"; 
  $serveruser="root"; 
  $serverpassword=""; 
  $dbname="sanjib"; 
  $con = mysqli_connect($server,$serveruser,$serverpassword,$dbname);
  if(!$con)
  { 
    die("error"); 
  } 
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"]; 
  $sql="insert into info values('$username','$email','$password')";
  if(mysqli_query($con,$sql)) 
  { 
    echo "<script>alert('You are registered. Now, you can login to our page');</script>";
  } 
  else
  { 
    echo "<script>alert('Some error occured. Try Again!');</script>";
  }   
?>
