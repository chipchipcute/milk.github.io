<?php 
include 'connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$query = mysqli_query($conn,"DELETE FROM client WHERE id = $id");
    
	if ($query) {
		 header('location:client.php');
    }
	else{
		echo "loi";
	}
}




?>
