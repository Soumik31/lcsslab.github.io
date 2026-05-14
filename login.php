<?php
global $verify;
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    
    
    /****LOGIN SYSTEM************/
/*$userlist = file ('file.txt');
$success=false;

foreach ($userlist as $user) {
    $user_details = explode(',',$user);
    if ($user_details[0] === $username && $user_details[3] === $password && $user_details[5] === 'admin'){
        $success = true;
        break;
    }
}*/
if(empty($username) || $username==" "){
		 $verify="name can not be empty";
	}
    else if(empty($password) || $password==" "){
		$verify="password can not be empty";
	}
else if ($success) {
    header('Location:./admin/');
} else {
    $verify="You have entered the wrong username or password. Please try again.";
}
    
    
    
    
}

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
            <h1 align="center">Login</h1>
            <h4 align="center"><?php echo $verify;?></h4>
        </div>

<!--Login Form ......................................-->
        <div>

            <form action="process.php" method="post">
                <div align="center">
                    <label for="male">Username:</label>
                    <input type="text" name="username"/><br><br>
                </div>
                <div align="center">
                    <label for="password">Password:</label>
                    <input type="password" name="password"/>
                </div>

                <div align="center" style="margin-top:20px;">
                   <input type="submit" name="Login" value="Login">
                </div>	

            </form>

        </div>				
						
        </div>	

</body>
</html>








