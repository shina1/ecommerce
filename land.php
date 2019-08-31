

<!DOCTYPE html>
<?php
include("connect.php"); 
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2349031217041</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li> -->
								<!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li id="shopping_cart" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5"><a href="#" style="display:flex; justify-content: space-between;"><i class="fa fa-shopping-cart"></i><p class="mb-0 text-capitalize"><span id="item-count">0 </span>items</p></a>
									

								</li>

								<li><a href="register.php"><i class="fa fa-lock"></i>Sell/Provide Service</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Login/Signup</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="land.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">All Categories<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Baby, Kids and Toys</a></li>
										<li><a href="product-details.html">Computers and Accessories</a></li> 
										<li><a href="checkout.html">Electronics</a></li> 
										<li><a href="cart.html">Fashion</a></li> 
										<li><a href="login.html">Groceries</a></li> <li><a href="cart.html">Home and Kitchen</a></li> 
										<li><a href="login.html">Phones and Tablets</a></li>
										<li><a href="cart.html">Wine, Beverages</a></li> 
										<li><a href="login.html">Others</a></li>  
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Service Categories<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Graphics and Design</a></li>
										<li><a href="blog-single.html">Digital Marketing</a></li>
										<li><a href="blog.html">Writing and Translating</a></li>
										<li><a href="blog-single.html">Video and Animation</a></li>
										<li><a href="blog.html">Music and Audio</a></li>
										<li><a href="blog-single.html">Programming and Tech</a></li>
										<li><a href="blog.html">Business</a></li>
										<li><a href="blog-single.html">Lifestyle</a></li>
										<li><a href="blog-single.html">Artisan</a></li>
                                    </ul>
                                </li> 
								<!-- <li><a href="404.html">404</a></li> -->
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<form method="GET" action="search.php" enctype="multipart/form-data">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search" name="user_query"/><br> <br>
							<input type="submit" name="search" value="Submit" style="background-color: red; color:white">
						</div>
						
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
						</ol>
						
						<div class="carousel-inner">
							<!-- carousel 1 -->
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<!-- carousel 2 -->
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<!-- carousel 3 -->
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img style="height: 320px;" src="images/home/art2.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
								</div>
							</div>
							<!-- carousel 4 -->
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img style="height: 320px;" src="images/home/gros2.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
			<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-8 padding-right">
				<!-- in this section we display items from the database on the landing page. -->
			    	<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php 
						
							$get_pro = " SELECT * FROM tblitem ORDER BY itemID DESC LIMIT 0,6 ";

							$run_pro = mysqli_query($connect, $get_pro);
							
							
							
						
							while ($row_pro = mysqli_fetch_array($run_pro)) {
						
								$pro_id = $row_pro['itemID'];
								$pro_cat = $row_pro['productCat'];
								$pro_brand = $row_pro['productBrand'];
								$pro_name = $row_pro['ItemName'];
								$pro_img = $row_pro['Picture'];
								$pro_price = $row_pro['price'];	 
							?>
						
						
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img height='180' width='180' src="pro_img/<?php echo $pro_img; ?>" alt="" />
											<h2>$<?php echo $pro_price; ?></h2>
											<p> <?php echo $pro_name; ?></p>
											<a href="land.php ? addCart=$pro_id" class="btn btn-default add-to-cart" id="add_to_cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $pro_brand;?></h2>
												<!-- <p>Easy Polo Black Edition</p> -->
												<a href="cart.php ? item_ID = $pro_id" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<!-- note the URL variable is created with a question mark and whatever you write after the ? is called either URL or GEt variable  -->
										<li><a href="details.php?item_ID=<?php echo $pro_id ?>">Details</a></li>   
										<li><a href="cart.php?item_ID=$pro_id"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					
					
					
					
					<?php } ?>
					
					</div><!--features_items-->
					<!--category-tab-->
					<div class="category-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#Computers" data-toggle="tab">Computers</a> </li>
								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#Electronics" data-toggle="tab">Electronics</a></li>
								<li><a href="#Fashion" data-toggle="tab">Fashion</a></li>
								<li><a href="#Phones" data-toggle="tab">Phones</a></li>
								<li><a href="#Bev" data-toggle="tab">Beverages</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="Computers" >
							<?php
						
								$servername = "localhost";
								$ussername = "root";
								$password = "";
								$dbname = "eshopperdb";
								
								$connect = mysqli_connect($servername, $ussername, $password, $dbname);
								$comp = "Computers and Accessories";
									
										$get_prod = "SELECT * FROM `tblitem` WHERE `productCat` = '$comp' ORDER BY itemID DESC LIMIT 0,4";
										
										$run_prod = mysqli_query($connect, $get_prod);
										
										
										if($run_prod) {
											while ($row_pro = mysqli_fetch_array($run_prod)) {
							
												$pro_id = $row_pro['itemID'];
												$pro_cat = $row_pro['productCat'];
												$pro_brand = $row_pro['productBrand'];
												$pro_name = $row_pro['ItemName'];
												$pro_img = $row_pro['Picture'];
												$pro_price = $row_pro['price'];
											
										
											
										
							
										
									
									
											?>

											<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img height='180' width='180' src="pro_img/<?php echo $pro_img; ?>" alt="" />
												<h2>$ <?php echo $pro_price; ?></h2>
												<p><?php echo $pro_name ?> </p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
										</div>
						</div>
											<?php } ?>
											
										<?php } ?>	
									
												
										
							
							
							
							
							</div>
							
							<div class="tab-pane fade" id="kids" >
							<?php
						
								$servername = "localhost";
								$ussername = "root";
								$password = "";
								$dbname = "eshopperdb";
								
								$connect = mysqli_connect($servername, $ussername, $password, $dbname);
								$baby = "Baby,Kids and Toys";
									
										$get_prod = "SELECT * FROM `tblitem` WHERE `productCat` = '$baby' ORDER BY itemID DESC LIMIT 0,4";
										
										$run_prod = mysqli_query($connect, $get_prod);
										
										
										if($run_prod) {
											while ($row_pro = mysqli_fetch_array($run_prod)) {
							
												$pro_id = $row_pro['itemID'];
												$pro_cat = $row_pro['productCat'];
												$pro_brand = $row_pro['productBrand'];
												$pro_name = $row_pro['ItemName'];
												$pro_img = $row_pro['Picture'];
												$pro_price = $row_pro['price'];
											
										
											
										
							
										
									
									
											?>
							
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img height='180' width='180' src="pro_img/<?php echo $pro_img; ?>" alt="" />
												<h2>$ <?php echo $pro_price; ?></h2>
												<p><?php echo $pro_name ?> </p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<?php } ?>
											
										<?php } ?>	
									
								
							</div>
							
							<div class="tab-pane fade" id="Electronics" >
							<?php
						
								$servername = "localhost";
								$ussername = "root";
								$password = "";
								$dbname = "eshopperdb";
								
								$connect = mysqli_connect($servername, $ussername, $password, $dbname);
								$elect = "Electronics";
									
										$get_prod = "SELECT * FROM `tblitem` WHERE `productCat` = '$elect' ORDER BY itemID DESC LIMIT 0,4";
										
										$run_prod = mysqli_query($connect, $get_prod);
										
										
										if($run_prod) {
											while ($row_pro = mysqli_fetch_array($run_prod)) {
							
												$pro_id = $row_pro['itemID'];
												$pro_cat = $row_pro['productCat'];
												$pro_brand = $row_pro['productBrand'];
												$pro_name = $row_pro['ItemName'];
												$pro_img = $row_pro['Picture'];
												$pro_price = $row_pro['price'];
											
										
											
										
							
										
									
									
											?>
							
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
											<img height='180' width='180' src="pro_img/<?php echo $pro_img; ?>" alt="" />
												<h2>$ <?php echo $pro_price; ?></h2>
												<p><?php echo $pro_name ?> </p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								
								<?php } ?>
											
										<?php } ?>
								
							</div>
							
							<div class="tab-pane fade" id="Fashion" >
							<?php
						
						$servername = "localhost";
						$ussername = "root";
						$password = "";
						$dbname = "eshopperdb";
						
						$connect = mysqli_connect($servername, $ussername, $password, $dbname);
						$fash = "Fashion";
							
								$get_prod = "SELECT * FROM `tblitem` WHERE `productCat` = '$fash' ORDER BY itemID DESC LIMIT 0,4";
								
								$run_prod = mysqli_query($connect, $get_prod);
								
								
								if($run_prod) {
									while ($row_pro = mysqli_fetch_array($run_prod)) {
					
										$pro_id = $row_pro['itemID'];
										$pro_cat = $row_pro['productCat'];
										$pro_brand = $row_pro['productBrand'];
										$pro_name = $row_pro['ItemName'];
										$pro_img = $row_pro['Picture'];
										$pro_price = $row_pro['price'];							
									?>
					
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<img height='180' width='180' src="pro_img/<?php echo $pro_img; ?>" alt="" />
										<h2>$ <?php echo $pro_price; ?></h2>
										<p><?php echo $pro_name ?> </p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									
								</div>
							</div>
						</div>
						
						       <?php } ?>
									
								<?php } ?>
								
							
							</div>
							<div class="tab-pane fade" id="Phones" >
							<?php
						
						$servername = "localhost";
						$ussername = "root";
						$password = "";
						$dbname = "eshopperdb";
						
						$connect = mysqli_connect($servername, $ussername, $password, $dbname);
						$phone = "Phones and Tablets";
							
								$get_prod = "SELECT * FROM `tblitem` WHERE `productCat` = '$phone' ORDER BY itemID DESC LIMIT 0,4";
								
								$run_prod = mysqli_query($connect, $get_prod);
								
								
								if($run_prod) {
									while ($row_pro = mysqli_fetch_array($run_prod)) {
					
										$pro_id = $row_pro['itemID'];
										$pro_cat = $row_pro['productCat'];
										$pro_brand = $row_pro['productBrand'];
										$pro_name = $row_pro['ItemName'];
										$pro_img = $row_pro['Picture'];
										$pro_price = $row_pro['price'];							
									?>
					
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<img height='180' width='180' src="pro_img/<?php echo $pro_img; ?>" alt="" />
										<h2>$ <?php echo $pro_price; ?></h2>
										<p><?php echo $pro_name ?> </p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									
								</div>
							</div>
						</div>
						
						<?php } ?>
									
								<?php } ?>
								
							
							</div>
							<div class="tab-pane fade" id="Bev" >
							<?php
						
						$servername = "localhost";
						$ussername = "root";
						$password = "";
						$dbname = "eshopperdb";
						
						$connect = mysqli_connect($servername, $ussername, $password, $dbname);
						$wine = "Wine, Beverages";
							
								$get_prod = "SELECT * FROM `tblitem` WHERE `productCat` = '$wine' ORDER BY itemID DESC LIMIT 0,4";
								
								$run_prod = mysqli_query($connect, $get_prod);
								
								
								if($run_prod) {
									while ($row_pro = mysqli_fetch_array($run_prod)) {
					
										$pro_id = $row_pro['itemID'];
										$pro_cat = $row_pro['productCat'];
										$pro_brand = $row_pro['productBrand'];
										$pro_name = $row_pro['ItemName'];
										$pro_img = $row_pro['Picture'];
										$pro_price = $row_pro['price'];							
									?>
					
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<img height='180' width='180' src="pro_img/<?php echo $pro_img; ?>" alt="" />
										<h2>$ <?php echo $pro_price; ?></h2>
										<p><?php echo $pro_name ?> </p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									
								</div>
							</div>
						</div>
						
						       <?php } ?>
									
								<?php } ?>
								
							
							</div>
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
							<?php 	
						$servername = "localhost";
						$ussername = "root";
						$password = "";
						$dbname = "eshopperdb";
						
						$connect = mysqli_connect($servername, $ussername, $password, $dbname);
						$wine = "Wine, Beverages";
							
								$get_prod = "SELECT * FROM `tblitem` WHERE `productCat` = '$wine' ORDER BY itemID DESC LIMIT 0,4";
								
								$run_prod = mysqli_query($connect, $get_prod);
								
								
								if($run_prod) {
									while ($row_pro = mysqli_fetch_array($run_prod)) {
					
										$pro_id = $row_pro['itemID'];
										$pro_cat = $row_pro['productCat'];
										$pro_brand = $row_pro['productBrand'];
										$pro_name = $row_pro['ItemName'];
										$pro_img = $row_pro['Picture'];
										$pro_price = $row_pro['price'];							
									?>	
									<div class="col-sm-4">
									<div class="single-products">
									<div class="productinfo text-center">
									<img height='180' width='180' src="pro_img/<?php echo $pro_img; ?>" alt="" />
										<h2>$ <?php echo $pro_price; ?></h2>
										<p><?php echo $pro_name ?> </p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									
								</div>
							</div>
									</div>
									<?php } ?>
								<?php } ?>
									
								</div>
								<div class="item">	
									
								<div class="carousel-inner">
								<div class="item active">
							<?php 	
						$servername = "localhost";
						$ussername = "root";
						$password = "";
						$dbname = "eshopperdb";
						
						$connect = mysqli_connect($servername, $ussername, $password, $dbname);
						$wine = "Wine, Beverages";
							
								$get_prod = "SELECT * FROM `tblitem` WHERE `productCat` = '$wine' ORDER BY itemID DESC LIMIT 0,4";
								
								$run_prod = mysqli_query($connect, $get_prod);
								
								
								if($run_prod) {
									while ($row_pro = mysqli_fetch_array($run_prod)) {
					
										$pro_id = $row_pro['itemID'];
										$pro_cat = $row_pro['productCat'];
										$pro_brand = $row_pro['productBrand'];
										$pro_name = $row_pro['ItemName'];
										$pro_img = $row_pro['Picture'];
										$pro_price = $row_pro['price'];							
									?>	
									<div class="col-sm-4">
									<div class="single-products">
									<div class="productinfo text-center">
									<img height='180' width='180' src="pro_img/<?php echo $pro_img; ?>" alt="" />
										<h2>$ <?php echo $pro_price; ?></h2>
										<p><?php echo $pro_name ?> </p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									
								</div>
							</div>
									</div>
									<?php } ?>
								<?php } ?>
									
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
<script>
$d(document).ready(function(){

	function load_cart_data()
	{
	$.ajax({
		url:"fetch.php",
		method:"POST",
		success:function(data){
			$('#shopping_cart').html(data);

		}
	});	
	}
	$('#add_to_cart').click(function(){
		var productId =[];
		var productName = [];
		var productPrice = [];
		var action = "add";
		$('.select_product').each(function(){
			if(($this).prop('clicked') == true){
				
			}
		})
	})
});

</script>

  
    <script src="js/jquery.js"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/html5shiv.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="js/axios.min.js"></script>
	<script src="mycart.js"></script>
</body>
</html>


 