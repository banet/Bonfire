<?php
	// Arrays for dynam ical content creation
	$product_code_link = ["T-shirt", "Casual"];


	// Category = > Link
	$categories = [
		'Men\'s clothing' => "#",
		'Women\'s clothing' => "#",
		'Underwear' => "#"
	];

	// Category = > Link

	$featured_categories = [
		'Sweatshirts' => "#",
		'Sweatpants' => "#",
		'Dresses' => "#",
		'Accesories' => "#"
	];

	// Item Name => [Image, Price, Label] 

	$carousel = [
		'Herschel supply co 25l' => ['img' => "includes/img/carousel/item-1.jpg", 'price' => "$75.99", 'label' => null ],
		'Coach slim easton black' => ['img' => 'includes/img/carousel/item-2.jpg', 'price' => '$189.50', 'label' => 'sale' ],
		'Ellese Footware' => [ 'img' => 'includes/img/carousel/item-3.jpg', 'price'=> '$65.50', 'label' => null],
		'John Elliot Sweatpants' => ['img' => 'includes/img/carousel/item-4.jpg', 'price' => '79.50', 'label' => 'new'],
		'Winson Half Sleeves' => [ 'img' => 'includes/img/carousel/item-5.jpg', 'price' => '88.50', 'label' => null]
	]

?>

<!DOCTYPE html>
<html lang="en">
    

<head>
	<meta charset="UTF-8">
	<!-- Mobile viewport optimized -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Website Title & Description for Search Engine purposes -->
	<title>Bonfire</title>
	
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,800i,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--Boostrap css-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">

	<!--Owl-carousel-->
	<link rel="stylesheet" href="includes/css/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="includes/css/owl/owl.theme.default.min.css">
	<!-- Custom CSS -->
	<link href="includes/css/styles.css" rel="stylesheet">
	<link href="includes/css/responsive.css" rel="stylesheet">


	<!-- Include Modernizr in the head, before any other Javascript -->
	<script src="includes/js/modernizr/modernizr-2.6.2.min.js"></script>

</head>

<body>
	<a href="index.php" class="logo-alt navbar-brand">
		<img src="includes/img/logo.svg" alt="img-logo">
	</a>
	<header id="header1">
		<div class="topbar">
			<div class="topbar-social">
				<a href="" class="topbar-social-item fa fa-facebook"></a>
				<a href="" class="topbar-social-item fa fa-instagram"></a>
				<a href="" class="topbar-social-item fa fa-pinterest-p"></a>
				<a href="" class="topbar-social-item fa fa-snapchat-ghost"></a>
				<a href="" class="topbar-social-item fa fa-youtube-play"></a>
			</div>
			<!--topbar-social-->
			<span class="topbar-text">Free shipping for standard order over $ 100</span>
			<!--topbar-text-->
			<div class="topbar-email">
				<span class="topbar-email2">bonfire@example.com</span>
				<!--topbar-text-->
			</div>
		</div><!--topbar-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
			 aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!--Logo-->	
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a href="index.html" class=" logo navbar-brand">
						<img src="includes/img/logo.svg" alt="img-logo">
					</a>
					
						<ul class="main-menu">
							<li class="nav-item">
								<a href="#">Home</a>
							</li>
							<li class="nav-item"><a href="">Shop</a></li>
							<!--Meganav-->
							<li class="nav-item dropdown">
								<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Categories</a>
								
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<div class="container">
										<div class="row">
											<div class="col-md-4 f-center">
												<p class="text-uppercase">Categories</p>
												<ul class="nav flex-column">
													<?php 
														//Unpacking each category and link from the categories array
														foreach ($categories as $categories_type => $link) {
															echo '<li class="nav-item">';
															echo '<a href="'.$link.'">'.$categories_type.'</a>';
															echo '</li>';
														}
													?>
												</ul>
											</div><!--col-md-4-->
											<div class="col-md-4 f-center">
												<ul class="nav flex-column">
													<?php 
														// Unpacking second category and link from featured_categories
														foreach ($featured_categories as $categories_type => $link) {
															echo '<li class="nav-item">';
															echo '<a href="'.$link.'">'.$categories_type.'</a>';
															echo '</li>';
														}
													?>
													
												</ul>
											</div><!--col-md-4-->
											<div class="col-md-4 f-center">
												<a href="#">
													<img src="includes/img/meganav_img.png" class="img-fluid meganav-img">
													<p>Big assortment of female shirts</p>
												</a>
												
											</div><!--col-md-4-->
										</div><!--row-->
									</div><!--end container-->
								</div><!--dropdown-menu-->
							
							</li>
							<li class= "nav-item"><a href="">Blog</a></li>
							<li class="nav-item"><a href="">About</a></li>
							<li class="nav-item"><a href="">Contact</a></li>
						</ul>
						<div class="search-nav">
							<form class="form-inline">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							</form>
						</div><!--search-nav-->
						<div class="header-icons">
							<a href="#" class="header-icons-style"><img src="includes/img/icons/icon-header-01.png" class="header-icon1" onclick="clear_cart()" alt="icon">
							</a>
							<span class="linedivide"></span>
							<a href="#" class="header-icons-style" onclick="clear_cart()"><img src="includes/img/icons/icon-header-02.png" class="header-icon1" alt="icon">
								<span id="header-icons-noti">0</span>
							</a>
						</div>
						<!--header-icons-->	
				</div><!--collapse navbar-->	
		</nav><!--nav-->
	</header>
	 

	<!-- Product detail section -->
	<section id="product">
		<div class="content-box">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="image-gallery">
							<div class="main-image">
								<img src="includes/img/carousel/item-15.jpg" alt="Placeholder" class="custom img-fluid">
							</div><!--main-image-->
	
							<ul class="thumbnails">
								<li><a href="includes/img/carousel/item-15.jpg">
										<img src="includes/img/carousel/item-15-sm.jpg" alt="Thumbnails" class="img-fluid img-thumbnail"></a>
								</li>
								<li>
									<a href="includes/img/carousel/item-12.jpg"><img src="includes/img/carousel/item-12-sm.jpg" class="img-fluid img-thumbnail"
										 alt="Thumbnails"></a>
								</li>
								<li>
									<a href="includes/img/carousel/item-10.jpg"><img src="includes/img/carousel/item-10-sm.jpg" class="img-fluid img-thumbnail"
										 alt="Thumbnails"></a>
								</li>
							</ul>
						</div><!--image-gallery-->
					</div><!--col-md-6-->
					<div class="col-md-6">
						<div class="product-info">
							<h4 class="product-detail-name">Boxy T-Shirt with Roll Sleeve Detail</h4>
							<span class="pris"> $ 79.50</span>
							<p class="product-t">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							<div class="btn-add-to-cart">
								<button class="subscribe m-text" data-toggle="modal" data-target="#myModal" onclick="add_to_cart_confirmation()">Add to cart</button>
							</div><!--btn-add-to-cart-->
							
							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
							
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">								
											<h4 class="modal-title" id="modal-product-name"></h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											<p id="modal-product-text"></p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-success" data-dismiss="modal" onclick="add_to_cart()" >Confirm</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
										</div>
									</div>
							
								</div>
							</div>

							<div class="product-categori">
								<span class="product-code">SKU: MUG-01</span>
								<span class="product-code">Categories: <?php foreach ($product_code_link as $name) {
                                    echo '<a href="#">'. $name . "</a> ";
                                } ?></span>
                            
							</div>
	
							<div class="product-content-tabs">
								<div class="tab1">
									<h5 class="product-d" >Description</h5>
									<p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida
									arcu nisl, a dignissim mauris placerat</p>
								</div>
								<div class="tab2">
									<h5 class="product-d">Additional information</h5>
									<p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida
										arcu nisl, a dignissim mauris placerat</p>
								</div>
								<div class="tab3">
									<h5 class="product-d">Reviews (0)</h5>
									<p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida
										arcu nisl, a dignissim mauris placerat</p>
								</div>
							</div>
							<!--product-content-info-->
	
						</div>
						<!--product-info -->
					</div>
					<!--col-md-6-->
				</div>
				<!--row-->
			</div>
			<!--container-->
		</div>
		<!--content-box-->
	
	</section>
	
	<!--Feature products-->
	<section id="product-carousel">
		<div class="content-box">
			<div class="content-title">
				<h3 class="h3-text">FEATURED PRODUCTS</h3>

			</div>
			<!--content-title-->

			<div class="container">
				<div class="row">
					<div class="col-12">
						<div id="carousel" class="owl-carousel owl-theme">
							<?php 
							//Unpack values that contain item information from the carousel array
							foreach ($carousel as $name => $values) {
								echo '<div class="carousel-product">';
								if($values['label'] != null) //if label value exist
								{
									//echo one div with coresponing label class
									echo '<div class="label-'.$values['label'].'"></div>';
								}
								//echo an image from the source within the information from the array
								echo '<img src="'.$values['img'].'" class="img-fluid" alt="'.$name.'">';
								echo '<div clas="carousel-product-info">';
								//echo the item name and price
								echo '<h4 class="carousel-product-name">'.$name.'</h4>';
								echo '<h4 class="carousel-product-pris">'.$values['price'].'</h4>';
								echo "</div>";
								echo "</div>";
							}
							
							?>
						</div>
						<!--carousel-->
					</div>
					<!--col-md-12-->
				</div>
				<!--row-->
			</div>
			<!--container-->
		</div>
		<!--content-box-->
	</section>

	<!--Footer-->
	<footer>
			<div class="container">
				<div class="row">
					
					<div class="col-md-3">
						<div id="get-in-touch">
							<h4 class="s-text">Get in touch</h4>
							<p class="p-s-cat">Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us
								on (+1) 96 716 3333</p>

							<div id="contact-info">
								<ul class="social-list p-t-30">
									<li><a href="#" class="icon-gray fa fa-facebook"></a></li>
									<li><a href="#" class="icon-gray fa fa-twitter"></a></li>
									<li><a href="#" class="icon-gray fa fa-youtube-play"></a></li>
									<li><a href="#" class="icon-gray fa fa-google-plus"></a></li>
								</ul>
							</div>
						
						</div><!-- end get in touch-->
					</div><!-- end col-md-3 -->
					<div class="col-md-3">
						<div class="categories">
							<h4 class="s-text">categories</h4>
							<ul>
								<li class="p-b-9"><a href="#" class="s-cat">Men</a></li>
								<li class="p-b-9"><a href="#" class="s-cat">Women</a></li>
								<li class="p-b-9"><a href="#" class="s-cat">Dresses</a></li>
								<li class="p-b-9"><a href="#" class="s-cat">Sunglasses</a></li>
							</ul>
						</div><!--categories-->
					</div><!-- end col-md-3 -->
					<div class="col-md-3">
						<div class="categories">
							<h4 class="s-text">HELP</h4>
							<ul>
								<li class="p-b-9"><a href="#" class="s-cat">Search</a></li>
								<li class="p-b-9"><a href="#" class="s-cat">Returns</a></li>
								<li class="p-b-9"><a href="#" class="s-cat">Shipping</a></li>
								<li class="p-b-9"><a href="#" class="s-cat">FAQs</a></li>
							</ul>
						</div><!--categories-->
						

					</div><!-- end col-md-3 -->
					

					<div class="col-md-3">
						<div class="categories p-b-90">
							<h4 class="s-text p-b-30">Newsletter</h4>
							<form action="">
								<div class="input-effect">
									<input type="text" class="s-text w-full" name="email" placeholder="email@example.com">
									<div class="effect1-line"></div>
								</div>
								<!--inpput-effect-->
								<div class="btn-subscribe">
									<button class="subscribe m-text">Subscribe</button>
								</div>
								<!--btn-subscribe-->
							</form>
						</div>
						<!--categories-->

					</div><!-- end col-md-4 -->
				</div><!-- end row-->
				<div class="row">
					<div class="col-md-12">
						<div class="f-center ">
							<a href="#"><img src="includes/img/icons/paypal.png" alt="paypal" class="f-size"></a>
							<a href="#"><img src="includes/img/icons/express.png" alt="express" class="f-size"></a>
							<a href="#"><img src="includes/img/icons/mastercard.png" alt="mastercard" class="f-size"></a>
							<a href="#"><img src="includes/img/icons/visa.png" alt="visa" class="f-size"></a>
						</div>
						<!--f-center-->
						<div class="copyright f-center p-t-30 s-cat">
							Copyright @ 2018 banet.no. All right reserved.
						</div>
						<!--copyright-->
					</div>
					<!--col-md-12-->
				</div>
				<!--row-->
			</div><!-- end container-->

	</footer>

	<!-- jQuery-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<!-- Boostrap JS-->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>


	<!--SimpleGal JS-->
	<script src="includes/js/simpleGal/jquery.SimpleGal.js"></script>

	<!--owl-carousel JS-->
	<script src="includes/js/owl/owl.carousel.min.js"></script>
	<!-- Custom JS -->
	<script src="includes/js/script/script.js"></script>


</body>

</html>