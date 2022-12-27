<?php      
session_start();
$email=$_SESSION["email"] ;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- title -->
	<title>Go Mobile</title>
    <style>
		.center-image{
			display:block;
			margin-left:auto;
			margin-right:auto;
		}
		</style>
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
								<li><a href="cart.php">Cart</a></li>
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
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-100 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
								</tr>
							</thead>
							<tbody>
	                        <?php
                                include('connection.php');  
                                $total=0;
	                            $shipping=100;
	                            $sql = "select * from cart where email='$email' ";  
                             	$result = mysqli_query($con, $sql);  
	                            if ($result->num_rows > 0) 
	                            {
		                        	while($row= $result->fetch_array(MYSQLI_NUM))
		                        	{
                                        $productid= $row[1] ;
	                                    $sql1 = "select * from products where id=$productid";  
                                        $result1 = mysqli_query($con, $sql1);  
                                        if ($result1->num_rows > 0) 
                                        {
                                            while($row1= $result1->fetch_array(MYSQLI_NUM))
                                            {
				                                $imagename=$row1[1];
				                                $name=$row1[2]." ".$row1[1];
				                                $price=$row1[3];
				                                $total+=$price;
				                                $price1=number_format($price);
                                                echo"<tr class=\"table-body-row\">
				                                <td class=\"product-remove\"><a onclick=\"var data = {email: '$email',id: $productid};$.post('productdelete.php', data);location.reload();\"><i class=\"far fa-window-close\"> </i></a></td>
		                                        <td class=\"product-image\">	<img src=\"images/{$imagename}.jpg\" alt=\"\"></td>
				                                <td class=\"product-name\">$name</td>
				                                <td class=\"product-price\">$price1</td>
                                            </tr>";
			                               	}}  
		                                 }}
                                        echo " <script>if($total==0){document.getElementsByClassName('container')[3].innerHTML='<img src=\"images/empty-cart.png\" class=\"center-image\">';}</script>";
		                     ?>             
		                    </tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td><?php  $total1=$total; echo number_format($total); ?></td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>100</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td><?php $total2=$total1+$shipping;echo number_format($total2); ?></td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="checkout.php" class="boxed-btn black">Check Out</a>
						</div>
					</div>

				
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

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