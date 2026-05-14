<?php

/*include "connection.php";*/

session_start();
if(!isset($_SESSION['aduser']));
$admin = 	$_SESSION['aduser'];

include "conn.php";

global $product_id;
global $pro_title; //this is use for undefine variable error remove
global $pro_des; //this is use for undefine variable error remove
global $pro_price; //this is use for undefine variable error remove
global $pro_cat; //this is use for undefine variable error remove
global $pro_quan; //this is use for undefine variable error remove
global $pro_image; //this is use for undefine variable error remove
global $pro_date;


if(isset($_POST['submit'])){
    $pro_title=$_POST['title'];
    $pro_des=$_POST['des'];
    $pro_price=$_POST['price'];
    $pro_cat=$_POST['cat'];
    $pro_quan=$_POST['quan'];
    $pro_image=$_POST['img'];
    $pro_date=$_POST['date'];
    
/*****File writing system*******/ 
    if(empty($pro_title) || $pro_title==" "){
		 $verify = "name can not be empty";
	}
/*    else if(letter_check($name)){
	     $verify = "Name can not start with letter";
    }*/
/*    else if(special_character_check($name)){
	     $verify= "Name contain only a-z & A-Z";
    }*/
 /*     else if(empty($email) || $email==" "){
		 $verify = "email can not be empty";
	}

    else if(empty($username) || $username==" "){
		 $verify = "Username can not be empty";
	}*/
/*    else if(username_exist($username)){
		 $verify = "Username Already exist";
	}*/
 /*   else if(letter_check($username)){
	     $verify = "UserName can not start with letter";
    }*/
/*    else if(special_character_check($username)){
	     $verify= "UserName contain only a-z & A-Z";
    }*/
/*    else if(empty($password) || $password==" "){
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
    */
    
    else{ 
        
        $query = "INSERT INTO `producttb`(`product_name`, `product_des`, `product_price`, `product_cat`, `product_quan`, `product_image`, `product_date`) VALUES ('$pro_title','$pro_des','$pro_price','$pro_cat','$pro_quan','$pro_image','$pro_date')";

        $data=mysqli_query ($conn, $query);
        if ($data)
        {   
            echo "Successfull!";
            header("Location: add_product.php");
        }
        else
        {
            echo "Failed!";
            header("Location: #");
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
	

    <!-----side nav----->     
    <div  style="width: 25%;  margin-top:0px; float: left;">

    <ul>
        <a href="index.php">Dashboard</a><hr>
        <a href="orders.php">Orders</a><hr>
        <a href="reports.php">Reports</a><hr>
        <a href="products.php">View Product</a><hr>
        <a href="add_product.php">Add Product</a><hr>
    <!--    <a href="categories.php">Categories</a><hr>-->
        <a href="users.php">Users</a><hr>
    </ul>

    </div>
	
	<!--navigation **************************************-->	

<div  align="center"  style="width: 100%">
    <h1>ADD PRODUCT</h1>
</div>
  

 <div style="width: 75%; float:left">


<!--Contact Field ..........................................-->
<div>
    <form action="add_product.php" method="post">
    <div style="float: left; margin-left:132px;">

        <div>
            <label>Product Title</label><br>
            <input type="text" name="title" size="57px">
        </div>
        <br>
        <div>
            <label>Product Description</label><br>
            <textarea type="text" name="des" rows="5" cols="14" style="width: 430px; height: 48px;"></textarea>
        </div>
        <div style="margin-top:15px;">
            <label>Product Price</label><br>
            <input type="text" name="price" size="25px">
        </div>
        <div style="margin-top:15px;">
            <label>Product Category</label><br>
            <input type="text" name="cat" size="25px">
        </div>
        <div style="margin-top:15px;">
            <label>Product Quantity</label><br>
            <input type="text" name="quan" size="25px">
        </div>
        <div style="margin-top:15px;">
            <label>Product Image</label><br>
            <input type="text" name="img">
        </div>
        <div style="margin-top:15px;">
            <label>input date</label><br>
            <input type="DATE" name="date">
        </div>
        <div align="center" style="margin-top:30px;">
            <input type="submit" name="submit" value="Register">
        </div>	

    </div>
    </form>
		
</div>		
<!--Contact Field ............................................-->

</div>
	
		    

			
				
						
</div>	

	
	

</body>
</html>








