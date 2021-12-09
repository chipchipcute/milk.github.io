<?php

$conn = mysqli_connect('localhost', 'root', '', 'duan') or die ('Xin lỗi, database không kết nối được.');


$conn->query("SET NAMES 'utf8mb4'"); 
$conn->query("SET CHARACTER SET utf8mb4");  
$conn->query("SET SESSION collation_connection = 'utf8mb4_unicode_ci' ");	


session_start();

	
?>
