<?php 
session_start();
ob_start();
include("../database/db_connection.php");

$product_id = $_GET["product_id"];
$deleteQuery = "DELETE FROM `products` WHERE product_id = '$product_id';";

if($result = mysqli_query($conn, $deleteQuery)) {
    header("Location: delete_products.php?success=true");
} else{
    echo "There was an error deleting the record";
}


