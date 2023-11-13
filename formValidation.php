<?php
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  if($username=="" || $password== ""){
    echo "Error! Form cann't be empty.";
  }else{
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("Location: welcome.php");
  }
}
else
{
  echo"Error! Form not working.";
}