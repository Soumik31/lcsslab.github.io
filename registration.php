<?php

include "connection.php";

global $verify;
global $username; //this is use for undefine variable error remove
global $email; //this is use for undefine variable error remove
global $name; //this is use for undefine variable error remove
global $password; //this is use for undefine variable error remove
global $confirm_password; //this is use for undefine variable error remove
global $date; //this is use for undefine variable error remove


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];
    $user_role='admin';
    
/*****File writing system*******/ 
    if(empty($name) || $name==" "){
		 $verify = "name can not be empty";
	}
/*    else if(letter_check($name)){
	     $verify = "Name can not start with letter";
    }*/
/*    else if(special_character_check($name)){
	     $verify= "Name contain only a-z & A-Z";
    }*/
      else if(empty($email) || $email==" "){
		 $verify = "email can not be empty";
	}

    else if(empty($username) || $username==" "){
		 $verify = "Username can not be empty";
	}
/*    else if(username_exist($username)){
		 $verify = "Username Already exist";
	}*/
 /*   else if(letter_check($username)){
	     $verify = "UserName can not start with letter";
    }*/
/*    else if(special_character_check($username)){
	     $verify= "UserName contain only a-z & A-Z";
    }*/
    else if(empty($password) || $password==" "){
		 $verify = "Password can not be empty";
	}
    else if(strlen($password)<4){
		 $verify = "contain at least Four Character";
	}
    else if($confirm_password !== $password){
		 $verify = "Password Must me same";
	}
    
    else if(empty($_POST['gender'])){ 
		 $verify = "At least one Gender selected";
	}
    else if(empty($date)){ 
		 $verify = "Date must be selected";
	}
    
    
    else{ 
        
        $query = "INSERT INTO `users`(`name`, `email`, `username`, `password`, `gender`, `dob`) VALUES ('$name','$email','$username','$password','$gender','$date');";

        $data=mysqli_query ($conn, $query);
        if ($data)
        {   
            echo "Successfull!";
            header("Location: registration.php");
        }
        else
        {
            echo "Failed!";
            header("Location: registration.php");
        }        
/*$myfile = fopen("file.txt", "a") or die("Unable to open file!");
fwrite($myfile, "\n" . $username . ",");
fwrite($myfile, $email . ",");
fwrite($myfile, $name . ",");
fwrite($myfile, $password . ",");
fwrite($myfile, $_POST['gender'] . ",");
fwrite($myfile, $user_role . ",");        
fwrite($myfile, $date);
fclose($myfile);
        header('Location:registration.php');*/
    }
}

/*function username_exist($username){ 
$userlist = file ('file.txt');
foreach ($userlist as $user) {
    $user_details = explode(',',$user);
    if ($user_details[0] == $username){
        return true;
        break;
    }
}
}*/


/*function letter_check($username){
			for($i=0;$i<strlen($username);$i++){
			if(ord($username[0])>=48 && ord($username[0])<=57){
				return true;
			}
		}
}*/

//SPECIAL cheracter check...........
//function special_character_check($username){
//		for($i=0;$i<strlen($username);$i++){
//			if((ord($username[$i])>=32 && ord($username[$i])<=47) || (ord($username[$i])>=58 && ord($username[$i])<=64)){
//			return true;;
//			}
//		}
//	
//}
?>

<html>
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        
        <div style="width: 960px; margin:20px auto;">
        
    <!-- Links -->
    <nav class="navbar navbar-expand-sm bg-warning navbar-dark">        
    <ul class="navbar-nav">
        <li class="active nav-item">
            <a class="nav-link text-primary" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary" href="./admin/index.php">Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary" href="checkout.php">Checkout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary" href="registration.php">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary" href="aboutus.php">About us</a>
        </li>
        <br>
    </ul>
    </nav>    
</head>
<body>
<div style="width: 960px; margin:20px auto;">
	
	<!--navigation **************************************-->	
<div>
    <h1 align="center">Registration</h1>
    <h4 align="center"><?php echo $verify;?></h4>
</div>

<!--Contact Field ..........................................-->
<div>
   <form action="registration.php" method="post">
    <div style="float: left; margin-left:280px;">

        <div>
            <label>Name</label><br>
            <input type="text" name="name" placeholder="Enter Desired Name" size="57px" value="<?php echo $name;?>">
        </div>
        <br>
         <div>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="somebody@example.com" size="57px" value="<?php echo $email;?>">
        </div>
         <br>
         <div>
            <label>Username</label><br>
            <input type="text" name="username" placeholder="Enter Desired Username" size="57px" value="<?php echo $username;?>">
        </div>
        <br>
         <div>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Password" size="57px" value="<?php echo $password;?>">
        </div>
        <br>
         <div>
            <label>Confirm Password</label><br>
            <input type="password" placeholder="Re-type Password" name="confirm_password" size="57px" value="<?php echo $confirm_password;?>">
        </div>
        <br>
         <div>
            <label>Gender</label><br>
			<input type="radio" value="male" name="gender"/>Male
			<input type="radio" value="female" name="gender"/>Female
			<input type="radio" value="other" name="gender"/>Other
        </div>
        <br>
		 <div>
            <label>Date</label><br>
            <input type="DATE"  name="date" value="<?php echo $date;?>"/>
        </div>
       
        <div align="center" style="margin-top:30px;">
            <input type="submit" name="submit" value="Register">
        </div>	

    </div>
	</form>	
</div>		
<!--Contact Field ............................................-->

					
</div>	

</body>
</html>








