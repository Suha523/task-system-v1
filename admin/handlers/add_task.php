<?php

session_start();
include("../../handlers/connect.php");
  $title=$_POST['title'];
  $body=$_POST['body'];
  $user_id=$_POST['username'];
  
  
  
  $sql= "INSERT INTO tasks(title ,body, user_id) 
  VALUES ('$title', '$body', '$user_id')";

  if(mysqli_query($conn, $sql)){
    $_SESSION['success']= 'Add Task Successfuly';
    header('location: ../addTask.php');
  }
  
  

  
?>
