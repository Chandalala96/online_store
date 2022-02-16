<?php 
 session_start();
 ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Store</title>

	<!--Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <!--Bootstrap Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.6.1/font/bootstrap-icons.min.css" integrity="sha512-9a1QYep56cYgIPFq0JYfsh9xRYYmPBxKaD6/ZfVAtplQ6y9ZUSk7GxgC2dmwtxK9T2cGQOxCV6J2Ll51nrvP2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />


<!--Custom CSS--->
<link rel="stylesheet" type="text/css" href="style.css">

 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    -->
</head>
<body>
	<header> 
     <!---Start Navbar--->
    <!---NAVBAR----->  
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="adminHead">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav m-auto">
         <li class="nav-item">
          <a class="nav-link" href="adminMainPage.php">Home</a>
        </li> 
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Manage Admins</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addAdmin.php">Add Admin</a></li>
            <li><a class="dropdown-item" href="deleteAdmin.php">Delete admin</a></li>
            <li><a class="dropdown-item" href="changeAdminPwd.php">Change Password</a></li>
          </ul>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Manage Products</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="add_products.php">Add New Products</a></li>
            <li><a class="dropdown-item" href="edit_products.php">Edit Products</a></li>
            <li><a class="dropdown-item" href="delete_products.php">Delete Products</a></li>
            <li><a class="dropdown-item" href="unActiveEmployees.php">Add Discount Products</a></li>
            <li><a class="dropdown-item" href="allEmployees.php">All Products</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Manage Orders</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="insertEmployee.php">View all orders</a></li>
            <li><a class="dropdown-item" href="editEmployee.php">Edit Products</a></li>
            <li><a class="dropdown-item" href="activeEmployees.php">Add Top Selling Products</a></li>
            <li><a class="dropdown-item" href="unActiveEmployees.php">Add Discount Products</a></li>
            <li><a class="dropdown-item" href="deleteEmployee.php">Delete Products</a></li>
            <li><a class="dropdown-item" href="allEmployees.php">All Products</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto" style="margin-left: -19px;">
       
      </ul>
      <form method="POST">
      <button class="btn" type="submit" name="logout" id="button" onclick="myFunction()" style="background: white;">Log out</button>
    </form>
    </div>
  </div>
</nav>
        <!---NAVBAR---*-->
<!---End Navbar-->
	</header>

	<main>