<?php 
$connect = mysqli_connect("localhost", "root", "", "eshopperdb");
if(isset($_GET['search'])){
    $search_query = $_GET['user_query'] ; 

    $get_pro = "SELECT * FROM tblitem  WHERE keyword like '%$search_query%' ";

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

?>