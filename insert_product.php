<?php 
require_once 'connect.php';

// what this basicaly means is that if the button named submit is clicked, then the following code in the if statement should be executed . Also note that the $_POST is a pre-defined global variable in php.

if(isset($_POST['submit'])){
// getting the text data frm the field
    $itm_name = $_POST['ItemName'];
    $itm_cat = $_POST['pro_cat'];
    $itm_brand = $_POST['pro_brand'];
    
    $itm_quant = $_POST['ItemNumber'];
    $itm_price = $_POST['pro_price'];
    $itm_key = $_POST['pro_key'];
    $itm_desc = $_POST['pro_descript'];

    // getting image from the field
    $itm_img = $_FILES['pro_img']['name'];
    $itm_img_tmp = $_FILES['pro_img']['tmp_name'];
    // to upload images to we page we need to move it into a folder and then work on it.

    move_uploaded_file( $itm_img_tmp, "pro_img/$itm_img");

// inserting into the database table tblitem.
 $insert_itm = "INSERT INTO `tblitem` ( productCat, productBrand, ItemName, ItemNumber, Picture, Description, price, keyword) VALUES ('$itm_cat', '$itm_brand', '$itm_name', '$itm_quant', '$itm_img', '$itm_desc', '$itm_price', '$itm_key')";

 $pour_data = mysqli_query($connect, $insert_itm);

 if($pour_data){
     echo "<script>alert('Product inserted successfuly!')</script>";
     echo "<script>window.open('insert_product.php', 'self') </script>";
     
 }
}

?>