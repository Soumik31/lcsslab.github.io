<?php


session_start();
if(!isset($_SESSION['user']));
$usr = 	$_SESSION['user'];

include "connection.php";

require_once('php/CreateDb_phone.php');
require_once('./php/component.php');

// create instance of Createdb class
$database = new CreateDb_phone("Productdb", "Producttb");
// do nothing
/*if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}*/

?>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    
        <link rel="stylesheet" href="style.css">
    
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
</head>
<body>



<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getDataPhone();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['product_quan']);
                }
            ?>
        </div>
</div>
<!--<div style="width: 240px; height: 240; margin-top:30px; float: left;"> 
  <a href="item.php"><img src="./img/product01.png" style="float: left;" width="240" height="240" /></a>
  <p style="float:left; margin-top:0px;">Price:$300</p>
  <a href="checkout.php"><h6 align="center">Add to cart</h6></a>
</div>
 <div style="width: 240px; height: 240; margin-top:30px; float: left;"> 
     <a href="item.php"><img src="./img/product02.png" style="float: left;" width="240" height="240" /></a>
  <p style="float:left; margin-top:0px;">Price:$300</p>
  <a href="checkout.php"><h6 align="center">Add to cart</h6></a>
</div><div style="width: 240px; height: 240; margin-top:30px; float: left;"> 
    <a href="item.php"><img src="./img/product03.png" style="float: left;" width="240" height="240" /></a>
   <p style="float:left; margin-top:0px;">Price:$300</p>
    <a href="checkout.php"><h6 align="center">Add to cart</h6></a>
</div>
 <div style="width: 240px; height: 240; margin-top:30px; float: left;"> 
     <a href="item.php"><img src="./img/product04.png" style="float: left;" width="240" height="240" /></a>
  <p style="float:left; margin-top:0px;">Price:$300</p>
   <a href="checkout.php"><h6 align="center">Add to cart</h6></a>
</div>
 <div style="width: 240px; height: 240; margin-top:30px; float: left;"> 
     <a href="item.php"><img src="./img/product05.png" style="float: left;" width="240" height="240" /></a>
  <p style="float:left; margin-top:0px;">Price:$300</p>
  <a href="checkout.php"><h6 align="center">Add to cart</h6></a>
</div>
 <div style="width: 240px; height: 240; margin-top:30px; float: left;"> 
     <a href="item.php"><img src="./img/product06.png" style="float: left;" width="240" height="240" /></a>
  <p style="float:left; margin-top:0px;">Price:$300</p>
  <a href="checkout.php"><h6 align="center">Add to cart</h6></a>
</div>
<div style="width: 240px; height: 240; margin-top:30px; float: left;"> 
     <a href="item.php"><img src="./img/product07.png" style="float: left;" width="240" height="240" /></a>
  <p style="float:left; margin-top:0px;">Price:$300</p>
   <a href="checkout.php"><h6 align="center">Add to cart</h6></a>
</div>
<div style="width: 240px; height: 240; margin-top:30px; float: left;"> 
     <a href="item.php"><img src="./img/product07.png" style="float: left;" width="240" height="240" /></a>
  <p style="float:left; margin-top:0px;">Price:$300</p>
   <a href="checkout.php"><h6 align="center">Add to cart</h6></a>
</div>-->

        
  
  
 
<!--</div>-->
 <!--image gallery.........................-->	   
    
    
    
 	

    

		

	
	
<!--</div>-->	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>	

</body>
</html>