<?php      
    session_start();
    $email=$_SESSION["email"] ;

?>
 <?php      
    include('connection.php');  
    $sql3= "select * from customer where email='$email'";  
    $result3 = mysqli_query($con, $sql3);  
    if ($result3->num_rows > 0) 
       {
            while($row3= $result3->fetch_array(MYSQLI_NUM))
            {
				$name=$row3[2];
				$email=$row3[1];
				$phone=$row3[3];
				$address=$row3[5]; 
?>  
            


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="index.html">
						        		<p><input type="text" value=<?php echo $name?>></p>
						        		<p><input type="email" readonly value=<?php echo $email?>></p>
						        		<p><input type="tel" value=<?php echo $phone?> ></p>
										<p><textarea id="addressid"name="caddress" cols="30" rows="10" ><?php echo $address ?></textarea></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
				        </div>
					</div>
				</div>
				<?php 	
			    }
		    }
		$con->close();
	            ?>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>
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
                                                echo"<tr><td>$name</td>
				                                <td>$price1</td></tr>";
			                              	}}
                                    }}
		                            $con->close();
								?>  
		
							
							
	<tbody class="checkout-details">
			<tr>
					<td>Subtotal</td>
									<td><?php  $total1=$total; echo number_format($total); ?></td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td>100</td>
								</tr>
								<tr>
									<td>Total</td>
									<td> <?php $total2=$total1+$shipping;echo number_format($total2)?></td>
								</tr>
							</tbody>
						</table>
						<?php echo"<a onclick=\"alert('Your order has been placed!');var data = {email: '$email'};$.post('placeorder.php', data);window.location=window.location.origin+'/go%20mobile/index.html';\"  class=\"boxed-btn\">Place Order </a></td>" ?>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- end check out section -->

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