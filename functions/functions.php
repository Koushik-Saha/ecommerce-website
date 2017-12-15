<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce");


function getCats(){

	global $con;

	$get_cats = "select * from categories";

	$run_cats =  mysqli_query($con, $get_cats);

	while ($row_cats = mysqli_fetch_array($run_cats)) {
		
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];

	echo "<li><a href='#'>$cat_title</a></li>";
	}
}

function getBrands(){

	global $con;

	$get_brands = "select * from brands";

	$run_brands =  mysqli_query($con, $get_brands);

	while ($row_brands = mysqli_fetch_array($run_brands)) {
		
		$brand_id = $row_brands['brand_id'];
		$brand_title = $row_brands['brand_title'];

	echo "<li><a href='#'>$brand_title</a></li>";
	}
}


function getPrice(){

	global $con;

	$get_price = "select * from price";

	$run_price =  mysqli_query($con, $get_price);

	while ($row_price = mysqli_fetch_array($run_price)) {
		
		$price_id = $row_price['Price_id'];
		$price_title = $row_price['Price_title'];

	echo "<li><a href='#'>$price_title</a></li>";
	}
}









?>