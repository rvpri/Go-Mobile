<?php 
$productid = $_GET['id'];
session_start();
$email=$_SESSION["email"] ;

?>
 <?php      
    include('connection.php');  
    $sql = "select * from products where id=$productid";  
    $result = mysqli_query($con, $sql);  
    if ($result->num_rows > 0) 
       {
            while($row= $result->fetch_array(MYSQLI_NUM))
            {
				$price=number_format($row[3]);
 ?>  

	
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- title -->
	<title>Go Mobile</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
   	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="shop4.php">Home</a></li>
							    <li><a href="contact.html">Contact</a></li>
								<li><a href="cart.php">Cart</a>
									
								</li>
								<li><a href="MyAccount.php">My Account</a></li>
								<li>
									<div class="header-icons">
									    <a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
									
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
    

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1><?php echo $row[2]." ".$row[1]; ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">

					<?php
					 echo"<div class=\"sinle-product-img\">
					<img src=\"images/{$row[1]}.jpg\" alt=\"\">
					
				 </div>"?>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3><?php echo $row[2]." ".$row[1]; ?></h3>
						<p class="single-product-pricing"><?php echo"₹  ".$price;?></p>
						<p><?php echo $row[4]?></p>
						<div class="single-product-form">
						<?php echo"<a onclick=\"alert('Added to cart!');var data = {email: '$email',id: $productid};$.post('cartinsert.php', data);\" class=\"cart-btn\"> Add to Cart</a>"  ?>
						   <!--<a onclick="var data = {email: '$email',id: $productid};$.post('cartinsert.php', data);" class="cart-btn"> Add to Cart</a>-->
						
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div><?php }  }
    ?>
	<!-- end single product -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					
				</div>
				
			</div>
		</div>
	</div>
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>