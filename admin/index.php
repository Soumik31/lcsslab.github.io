<?php

include "connection.php";

session_start();
if(!isset($_SESSION['aduser']));
{
$admin = $_SESSION['aduser'];
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
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">        
    <ul class="navbar-nav">
        <li class="active nav-item">
            <a class="nav-link text-light" href="index.php">Home</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $admin ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="../index.php">Logout</a>
        </li>
    </ul>
    <br>
    </nav> 
            
</head>
<body bgcolor="#E6E6FA">
<div style="width: 100%; margin:20px auto;">


<!--side nav-->     
<div  style="width: 25%;  margin-top:0px; float: left;">

<ul>
    <a href="index.php">Dashboard</a><hr>
    <a href="orders.php">Orders</a><hr>
    <a href="reports.php">Reports</a><hr>
    <a href="products.php">View Product</a><hr>
    <a href="add_product.php">Add Product</a><hr>
    <!--<a href="categories.php">Categories</a><hr>-->
    <a href="users.php">Users</a><hr>
</ul>

</div>
<!--side nav-->

	<!--navigation **************************************-->	

      
  

<div  align="center"  style="width: 100%">
    <h1>WELCOME TO ADMIN</h1>
</div>
	
		    

			
				
						
</div>	

	
	

	</body>
</html>








