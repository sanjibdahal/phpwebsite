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
  $email = $_POST["email"];
  $password = $_POST["password"]; 
  $sql="select * from data"; 
  $result=mysqli_query($con,$sql); 
  
  if(mysqli_num_rows($result)>0) 
  { 
   while($row=mysqli_fetch_array($result))
   { 
     if ($row["email"]==$email && $row["password"]==$password) {
       echo "User logged in.";
     }  
   }
  }
  else
  { 
   echo "error"; 
  } 
?>
