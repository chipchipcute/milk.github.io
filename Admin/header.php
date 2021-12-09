 <?php include 'connect.php';
 $user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];

// $user = $_SESSION['user'];
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Document</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
    <style>
      .check{
        display: none !important;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
                        <li>
                              <a href="list-category.php">Quản lý danh mục</a>
                        </li>
                        <li>
                              <a href="list-product.php">Quản lý sản phẩm</a>
                        </li>
                        <li>
                              <a href="client.php">Quản lý khách hàng</a>
                        </li>
                  </ul>
      </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
              
              <ul class="nav navbar-nav navbar-right">
               <!--  <li><a href="#">Link</a></li> -->
                <?php if(isset($user['email'])) { ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['email'] ?><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                   <!--  <li><a href="#">Đăng kí</a></li>
                  <li><a href="#">Đăng nhập</a></li> -->
                  <li><a href="../front-end/logout.php">Đăng xuất</a></li>
                  
                  </ul>
                </li>
                <?php }else {?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  <li><a href="#">Đăng kí</a></li>
                  <li><a href="../login.php">Đăng nhập</a></li>
                  
                  
                  </ul>
                </li>

                <?php } ?>
              </ul>
            </div>

    </div>
  </nav>


  
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>