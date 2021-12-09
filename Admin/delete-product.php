<?php 
include 'connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$query = mysqli_query($conn,"DELETE FROM product WHERE id = $id");
    
	if ($query) {
		 header('location:list-product.php');
    }
	else{
		echo "loi";
	}
}




?>
