<?php include '../Admin/connect.php';

  $category = mysqli_query($conn,"SELECT * FROM category ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link href="../template/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../template/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
  <link href="../template/css/style.css" rel="stylesheet" type="text/css" />
  <link href="../template/css/header.css" rel="stylesheet" type="text/css" />
  <link href="../template/css/xoay.css" rel="stylesheet" type="text/css" />
  <link href="../template/css/chitietsp.css" rel="stylesheet" type="text/css" />
  <link href="../template/css/menu-ben.css" rel="stylesheet" type="text/css" />
  <link href="../template/css/module.css" rel="stylesheet" type="text/css" /> 
  <script src="../template/js/jquery-2.2.3.min.js" type="text/javascript"></script>
	
	
   
</head>
     <div class="containerr">
		<div class="header">
      
			<div class="phandau">
        <a href="index.php">
        <img src="../data/upload/526.png" style="max-width: 200px;max-height: 80px;position: absolute;left: 43px;top: 10px;">
      </a>
				<input type="search" name="search" placeholder="     Tìm kiếm">
        <img src="../data/upload/search.png" style="position: absolute;left: 613px;top:28px;max-height: 27px;">
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li class="drop">
						<a href="index1.php" class="dropbtn">Hãng Sữa</a>
						<div class="drop-content" >
							<?php foreach ($category as $key => $value): ?> 
											<a href='index2.php?id=<?php echo $value['id'] ?>' style="color: white;border-bottom: 1px solid WhiteSmoke;"><?php echo $value['name'] ?></a>
							<?php endforeach ?>
						</div>
					</li>
					<li><a href="index1.php">Sản Phẩm	</a></li>
					<li class="drop" style="padding-left: 200px;">
						<a href="" class="dropbtn">Tài Khoản</a>
						<div class="drop-content">
							<a href="login.php" style="color: white;border-bottom: 1px solid WhiteSmoke;">Đăng nhập</a>
              <a href="signup.php" style="color: white;border-bottom: 1px solid WhiteSmoke;">Đăng kí</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
