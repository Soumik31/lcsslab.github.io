<?php
require_once('connection.php');

session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['username']) || empty($_POST['password']))
       {
            header("location:adminlogin.php?Empty= You cannot login with an empty input");
       }
       else
       {
            $query="SELECT * FROM `admin` WHERE aduser='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['aduser']=$_POST['username'];
                header("location: index.php");
                

            }
            else
            {
                header("location:adminlogin.php?Invalid= Please enter correct user name and password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now';
    }
 
?>