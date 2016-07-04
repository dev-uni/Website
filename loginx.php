<?php
session_start();
//connection to the database
require_once("config.php");

require_once("header.php");


if (isset($_POST["send"]))
    {//1
  $username=(mysqli_real_escape_string($conn,($_POST["username"])));
  $password=(mysqli_real_escape_string($conn,($_POST["password"])));
  
  //encode the password for the user.
  $password=sha1($_POST["password"]);
  
  
  if (($username=="") ||($password==""))
       {
     $error="Provide your username and password";
     }else{//2
    $sql="SELECT iduser_info,username,password_2,idrole,rolename FROM  user_info  INNER JOIN role ON user_info.role_idrole=role.idrole
    WHERE username='".$username."' AND password_2='".$password."'";
    $select=mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($select);
    $rows=mysqli_num_rows($select);
    if($rows>0)
        {
      $_SESSION["iduser_info"]=$result["iduser_info"];
      $id=$_SESSION["iduser_info"];
      
      $_SESSION["username"]=$result["username"];
      $user=$_SESSION["username"]; 
	}else{$error1="Wrong username or password.";
			
	   }
     } //close 2
    }//close 1
?>