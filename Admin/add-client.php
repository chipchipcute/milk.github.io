<?php include 'header.php';



    $client = mysqli_query($conn," SELECT * FROM client ");

    if (isset($_POST['name'])){
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $diachi = $_POST['diachi'];
      $telephone = $_POST['telephone'];
      $email = $_POST['email'];
     
        $sql = "INSERT INTO client(name,gender,diachi,telephone,email) VALUES('$name','$gender','$diachi','$telephone','$email')";
         $query =  mysqli_query($conn,$sql);
         
         if($query){
          header('location:client.php');
         }
         else{
          echo "error";
         }
       }
  

 ?>
     <div class="container">
       <div class="row">
         <div class="col-md-9">
           <div class="panel panel-info">
             <div class="panel-heading">
               <h3 class="panel-title">Thêm mới khách hàng</h3>
             </div>
             <div class="panel-body">
              <form action="" method="POST" role="form">
                <legend>Nhập các thông tin</legend>

                <div class="form-group">
                  <label for="">Tên khách hàng</label>
                  <input type="text" class="form-control" placeholder="Nhập tên khách hàng" name="name">
                </div>
                <div class="form-group">
                  <label for="">Giới tính</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="input" value="1" >
                      Nam
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="input" value="0">
                      Nữ
                    </label>
                  </div>

                </div>
                <div class="form-group">
                  <label for="">Địa chỉ</label>
                  <input type="text" class="form-control" placeholder="Input field" name="diachi">
                </div>
               <div class="form-group">
                  <label for="">Số điện thoại</label>
                  <input type="number" class="form-control" placeholder="Input field" name="telephone">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" placeholder="Input field" name="email">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
              </form>
             </div>
           </div>
         </div>
        
       </div>
     </div>
<?php include 'footer.php' ?>