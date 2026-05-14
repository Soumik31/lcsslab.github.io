<?php

include "connection.php";

session_start();
if(!isset($_SESSION['user']));
$usr = 	$_SESSION['user'];

$sql = "SELECT `id`, `name`, `email`, `username`, `gender`, `dob` FROM `users` WHERE `username` = '$usr'";
$result = $conn -> query($sql);


?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    
        <link rel="stylesheet" href="style.css">
    
	<div style="width: 960px; margin:20px auto;">

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
              <a class="nav-link dropdown-toggle text-primary" href="profile.php" id="navbardrop" data-toggle="dropdown">
                <?php echo $usr ?>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="#">Previous orders</a>
              </div>   
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link text-primary active" href="cart.php">
                  <i class="fas fa-shopping-cart"></i>Cart
                    <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                    ?>
              </a>  
            </li> 
            <li class="nav-item">
              <a class="nav-link text-primary" href="../index.php">Logout</a>
            </li>
        </ul>
        </nav>
        <br>
    </div>
</head>
<body>
<div style="width: 960px; margin:20px auto;">
        <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Gender</th>
            <th>Date of birth</th>
        </tr>
        <?php
        if ($result -> num_rows != 0) {
         while ($row = $result -> fetch_assoc()){
             echo "
             <tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["username"]."</td>
                <td>".$row["gender"]."</td>
                <td>".$row["dob"]."</td>
             </tr>
             ";
        } 
        }
        $conn-> close();
        ?>  
    </table>
</div>    
</body>
</html>