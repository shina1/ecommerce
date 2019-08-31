<?php

$connect = mysqli_connect("localhost", "root", "", "eshopperdb");

// getting the categories
function getCats() {
	global $connect;

	$get_cats = "SELECT * FROM tblcategory"; 
	$run_cats = mysqli_query($connect, $get_cats);
	while ($row_cats = mysqli_fetch_array($run_cats)
	) {
		$cat_id = $row_cats['catID'];
	    $cat_title = $row_cats['Categories'];
	    echo '<li> <a href="#"> $cat_title</a> </li>' ;
	}

}

// getting the brands.

function get_brands() {
	global $connect;

	$get_brands = "SELECT * FROM tblproducts";
	$run_brands = mysqli_query($connect, $get_brands);

	while ($row_brands = mysqli_fetch_array($run_brands))
	{
		$brans_id = $rwo_brands['ProductID'];
		$brands_tittle = $row_brands['Products'];
		$brand_catid = $row_brands['catID'];

		echo '<li><a href="#"> $brands_tittle</a></li>';
	}
}

// displaying items on the web page.

// functionh for displaying features on the web page
function fetchpro() {
	global $connect;

	$get_pro = "SELECT * FROM tblitem ORDER BY DESC() LIMIT 0,3";

	$run_pro = mysqli_query($connect, $get_pro);

	while ($row_pro = mysqli_fetch_array($run_pro)) {

		$pro_id = $row_pro['itemID'];
		$pro_cat = $row_pro['productCat'];
		$pro_brand = $row_pro['productBrand'];
		$pro_name = $row_pro['ItemName'];
		$pro_img = $row_pro['Picture'];
		$pro_price = $row_pro['price'];
	}
}

// for detials page. to get the details of items from the data base
 

if(isset($_GET['itm_ID'])){
	$prod_id = $_GET['itm_ID']
	
		$get_pro = " SELECT * FROM tblitem WHERE itemID = '$prod_id' ";

		$run_pro = mysqli_query($connect, $get_pro);
		
		
		
	
		while ($row_pro = mysqli_fetch_array($run_pro)) {
	
			$pro_id = $row_pro['itemID'];
		  $pro_qunt = $row_pro['ItemNumber'];
			$pro_brand = $row_pro['productBrand'];
			$pro_name = $row_pro['ItemName'];
			$pro_img = $row_pro['Picture'];
			$pro_price = $row_pro['price'];
			$pro_desc = $row_pro['Description'];

		}
	}
	// function for the category and brand page.
	function getpro(){
		if(isset($_GET['comp'])){
			
			global $connect;
			$get_pro = "SELECT * FROM tblitem WHERE productCat = 'Computers and Accessories' ORDER BY DESC() LIMIT 0,3";

			$run_pro = mysqli_query($connect, $get_pro);

			while ($row_pro = mysqli_fetch_array($run_pro)) {

				$pro_id = $row_pro['itemID'];
				$pro_cat = $row_pro['productCat'];
				$pro_brand = $row_pro['productBrand'];
				$pro_name = $row_pro['ItemName'];
				$pro_img = $row_pro['Picture'];
				$pro_price = $row_pro['price'];
			
			}
	}

}
// ########################################################add to cart function ##########################

if(isset($_GET['item_ID'])){
	$prod_id = $_GET['item_ID'];


$select ="SELECT * FROM tblitem WHERE Email = '$email' ";



}

// #############################tutors code##########################
$connect = mysqli_connect("localhost", "root", "", "eshopperdb");
if(mysqli_connect_error()){
	echo "not connected:" . mysqli_connect_error() ;
}
function cart(){
	if(isset($_GET['addCart'])){
		$mail = "Email"
		$proID = $_GET['addCart'];

		$checkPro =" SELECT * FROM `tblcarty` WHERE $mail = 'Email' "
	}
}
?>
<!-- ############################################## -->