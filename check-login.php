<?php 
session_start();
include "db_connect.php";

if(isset($_POST['email']) &&
 isset($_POST['password']) &&
  isset($_POST['role']))
{
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $email = test_input($_POST['email']);
      $password = test_input($_POST['password']);
      $role = test_input($_POST['role']);

      if(empty($email)){
          header("location: login.php?error=email is required");
      }
      else if(empty($password)){
        header("location: login.php?error=password is required");
      }
      else{
      
      $sql ="SELECT * FROM users WHERE email='$email' AND password ='$password'";
      $result = mysqli_query($connectdb , $sql);
      if(mysqli_num_rows($result) === 1){
          $row = mysqli_fetch_assoc($result);
            if($row['password']===$password && $row['role']==$role){
            $_SESSION['name'] =$row['name'];
            $_SESSION['id'] =$row['id'];
            $_SESSION['role'] =$row['role'];
            $_SESSION['email'] =$row['email'];
            header("location: $role.php");
            }
            else {
                header ("Location: login.php?error=Incorect email or password");
            }
           
      }   else {
        header ("Location: login.php?error=Incorect email or password");
    }
     
      }
    }

else
{
header("location: login.php?wherelogin");
}


?>