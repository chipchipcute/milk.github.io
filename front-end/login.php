<?php include '../Admin/connect.php';
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = " SELECT * FROM  users WHERE email = '$email' ";
   $query = mysqli_query($conn,$sql);
   $data = mysqli_fetch_assoc($query);
   $checkEmail = mysqli_num_rows($query);
   if ($checkEmail == 1) {
    
    $checkPass =  password_verify($password,$data['password'] );
    if($checkPass){
      $_SESSION['user'] = $data;
      header('location: ../Admin/index.php');
    }else{
      $message = "Mật khẩu sai";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }


   }else{
    $message = "Email không tồn tại";
      echo "<script type='text/javascript'>alert('$message');</script>";
   }

 }
  ?>
<!DOCTYPE html>
<head>
    <title>Đăng Nhập</title>
    <style type="text/css">
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
*{
    font-family: "Poppins", sans-serif;
}
body{
    background: #4aaaa5;
}

.wrapper{
    width: 300px;
    background: #fff;
    color: black;
    margin: 40px auto;
    border-radius: 6px;
    padding: 10px 30px;
}
h1{
    text-align: center;
}

input{
    display: block;
    width: 90%;
    padding: 10px;
    font-size: 14px;
    outline: none;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #4aaaa5;
}
button{
    width: 98%;
    border: none;
    outline: none;
    height: 40px;
    border-radius: 5px;
    background: #4aaaa5;
    cursor: pointer;
    color: #fff;
    font-size: 17px;
}
p{
    text-align: center;
}
p a{
    color: #4aaaa5;
    text-decoration: none;
}
    </style>

</head>
<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form action="" method="POST" role="form">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p>
            New User? <a href="signup.php">Signup here!</a>
        </p>
    </div>
</body>
</html>