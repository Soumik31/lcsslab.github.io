<?php

/*include "connection.php";*/

session_start();
if(!isset($_SESSION['user']));
$usr = 	$_SESSION['user'];

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
	<!--navigation ***********************************-->
    <!--<div>
    <table height="45px">
     <tr bgcolor="#f4c741" height="15%">
	     <td colspan="3" width = 1200>
          <font color="black">
           <nav>
              <a href="index.php">Home</a> |
              <a href="shop.php">Shop</a> |
              <a href="login.php">Login</a> |
              <a href="./admin/index.php">Admin</a> |
              <a href="checkout.php">Checkout</a> |
              <a href="contact.php">Contact</a> |
              <a href="registration.php">Registration</a>
              <a href="profile.php"> <?php echo $usr ?> </a> |
              <a href="../index.php">Logout</a>
           </nav>
         </font>
         </td>
         </tr>
         </table>
    </div>-->
        <!-- nav -->
        <nav class="navbar navbar-expand-sm bg-warning navbar-dark">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="active nav-item">
              <a class="nav-link text-primary" href="index.php">Home</a>
            </li>
<!--            <li class="nav-item">
              <a class="nav-link text-primary" href="checkout.php">Checkout</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link text-primary" href="contact.php">Contact</a>
            </li>
            <br>
        </ul>
        <ul class="navbar-nav ml-auto">   
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-primary" href="#" id="navbardrop" data-toggle="dropdown">
                <?php echo $usr ?>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Previous orders</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="../index.php">Logout</a>
            </li>
        </ul>
        </nav>
        <br>
</head>
<body>
<div style="width: 960px; margin:20px auto;">
	
		
        <div>
            <h1 align="center">Contact Us</h1>
        </div>

<!--Contact Field ..........................................-->
    <div>
        <div style="float: left;">

            <div>
                <input placeholder="Your Name *" type="text" size="100%">
            </div>
            <div style="margin-top:10px;">
                <input placeholder="Your Email *" type="text" size="100%">
            </div>
            <div style="margin-top:10px;">
                <input placeholder="Your Subject *" type="text" size="100%">
            </div>
            <div style="margin-top:10px;">
                <input placeholder="Your Message *" rows="5" cols="14" style="width: 100%; height: 48px;"></input>
            </div>

        </div>

 <!--       <div style="float: right;">

            <div>
                <textarea placeholder="Your Message *" rows="5" cols="14" style="width: 430px; height: 48px;"></textarea>
            </div>

        </div>		-->
    </div>		
<!--Contact Field ............................................-->
    
<!--button***********************************-->
<div align="center" style="margin-top:150px;">
    <input type="submit" value="Send Message">
</div>	
<!--button***********************************-->
		
</div>	

	
	

</body>
</html>








