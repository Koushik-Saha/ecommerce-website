<!DOCTYPE>
<?php

session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title>
			Online Cow Provider:
		</title>

		<link rel="stylesheet" href="style.css" media="all" />
	</head>
<body>

	<div class="main_wrapper">

		<div class="header_wrapper">

			<a href="index.php"><img id="logo" src="images/cow.gif" />
			<img id="banner" src="images/banner.gif" />
			
		</div>

		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>

			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Products" />

					<input type="submit" name="search" value="Search" />
				 </form>
				
			</div> 
		</div>



		<div class = "content_wrapper">

			<div id="sidebar">
				
				<div id="sidebar_title">Categories</div>

				<ul id="cats">

					<?php getCats(); ?>
					
				</ul>
			
				<div id="sidebar_title">Brands</div>

				<ul id="cats">

				<?php getBrands(); ?>

					
				</ul>

				<div id="sidebar_title">Price</div>

				<ul id="cats">

					<?php getPrice(); ?>

				</ul>


		</div>


			<div id = "content_area">

				<?php cart(); ?>

				<div id="shopping_cart">

					<span style="float: right; font-size: 18px; padding: 5px; line-height: 40px;">
						Welcome Guest! <b style="color: yellow">Shopping Cart -</b>Total Items: <?php total_items();?> Total Price: <?php total_price(); ?><a href="cart.php" style="color: yellow"> Go to Cart</a>
					</span>
					
				</div>

				<div id="products_box">

					<?php

						if(!isset($_SESSION['customer_email'])){

							include("customer_login.php");
						}
						else {
							
							include("payment.php");
						}

					?>

				</div>


			</div>

		</div>

		<div id="footer">
			
			<h2 style="text-align: center;
			padding-top: 30px;">&copy; 2017 by www.KoushikSaha.com </h2>

		</div>

	</div>

</body>
</html>