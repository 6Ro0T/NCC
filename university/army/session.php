<?php
   include('conn.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $user_role=$_SESSION['role'];
   
   $ses_sql = mysqli_query($conn,"select * from student where email = '$user_check' and division='$user_role' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
 //Notice: Undefined index: roll_number in C:\xampp\htdocs\NCC\university\army\session.php on line 11
   
   if(!isset($_SESSION['login_user']) || !isset($_SESSION['role'])){
      header("location:../index.php");
      die();
   }
?>