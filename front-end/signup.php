 <?php include '../Admin/connect.php';
 $err =[];
if(isset($_POST['name'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $rPassword =$_POST['rPassword'];

    if (empty($name)) {
      $err['name'] = 'Bạn chưa nhập tên';
    }
    if (empty($email)) {
      $err['email'] = 'Bạn chưa nhập email';
    }
    if (empty($password)) {
      $err['password'] = 'Bạn chưa nhập password';
    }
    if ($rPassword != $password) {
      $err['rPassword'] = 'Mật khẩu nhập lại không đúng';
    }
    if (empty($err)) {
      $pass = password_hash($password,PASSWORD_DEFAULT);
     $sql = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$pass')";
     $query = mysqli_query($conn,$sql); 
     if ($query) {
       header('location: login.php');
     }
    }
    
}
  

  ?>
<!DOCTYPE html>
<head>
    <title>Đăng ký tài khoản</title>

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
/*span a{
    margin-top: 220px;
}*/
.has-error{ 
    position: absolute;
    color: red;
    font-size: 14px;
    top:125px;
    
}
.has-error1{ 
    position: absolute;
    color: red;
    font-size: 14px;
    top:188px;
    
}
.has-error2{ 
    position: absolute;
    color: red;
    font-size: 14px;
    top:250px;
}
.has-error3{ 
    position: absolute;
    color: red;
    font-size: 14px;
    top:314px;
}
</style>
</head>
<body>
    <div class="wrapper">
        <h1>Sign Up</h1>
        <form action="" method="POST" role="form">
            <div>
            <input type="text" placeholder="Username" name="name">
            <div class="has-error">
               <span><?php echo (isset($err['name']))?$err['name']: ' ' ?></span>
            </div></div>
          
            <div>
            <input type="email" placeholder="Email Address" name="email">
             <div class="has-error1">
               <span><?php echo (isset($err['email']))?$err['email']: ' ' ?></span>
            </div></div>
            
            <div>
            <input type="password" placeholder="Password" name="password">
            <div class="has-error2">
               <span><?php echo (isset($err['password']))?$err['password']: ' ' ?></span>
            </div></div>

            <div>
            <input type="password" placeholder="Confirm Password" name="rPassword">
             <div class="has-error3">
               <span><?php echo (isset($err['rPassword']))?$err['rPassword']: ' ' ?></span>
            </div></div>
            <button  type="submit" class="btn btn-primary">Signup</button>
        </form>
        <p>
           Already User? <a href="login.php">Login here!</a>
        </p>
    </div>
</body>
</html>