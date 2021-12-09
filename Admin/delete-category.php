<?php 
include 'connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$query = mysqli_query($conn,"DELETE FROM category WHERE id = $id");
    
	if ($query) {
		 header('location:list-category.php');
    }
	else{
		echo "loi";
	}
}




?>
