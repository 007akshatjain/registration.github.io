<?php
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $feedback=$_POST['feedback'];


 $conn=new mysqli('localhost','root','','regformdb');
 if($conn->connect_error){
     die('Connection Failed  :' .$conn->connect_error);
 }else{
     $stmt = $conn->prepare("insert into registration(username, password, email, feedback)
     values(?, ?, ?, ?)");
     $stmt->bind_param("ssss",$username, $password, $email, $feedback);
     $stmt->execute();
     echo "Login Successfully....";
     $stmt->close();
     $conn->close();
 }
?>