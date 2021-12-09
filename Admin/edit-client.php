<?php include 'header.php';
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $client = mysqli_query($conn,"SELECT * FROM client WHERE id = $id");
        
        $cli = mysqli_fetch_assoc($client);

      } 


    $client = mysqli_query($conn," SELECT * FROM client ");

    if (isset($_POST['name'])){
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $diachi = $_POST['diachi'];
      $telephone = $_POST['telephone'];
      $email = $_POST['email'];
     
         $sql = "UPDATE client SET name= '$name',gender='$gender',diachi='$diachi',telephone='$telephone',email='$email' WHERE id = $id ";   
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
               <h3 class="panel-title">Sửa khách hàng</h3>
             </div>
             <div class="panel-body">
              <form action="" method="POST" role="form">
                <legend>Nhập các thông tin</legend>

                <div class="form-group">
                  <label for="">Tên khách hàng</label>
                  <input type="text" class="form-control" placeholder="Nhập tên khách hàng" name="name" value="<?php echo $cli['name'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Giới tính</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="input" value="1" <?php echo ($cli['gender'] == 1) ?'checked' : '' ?>>
                      Nam
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="input" value="0" <?php echo ($cli['gender'] == 0) ?'checked' : '' ?>>
                      Nữ
                    </label>
                  </div>

                </div>
                <div class="form-group">
                  <label for="">Địa chỉ</label>
                  <input type="text" class="form-control" placeholder="Input field" name="diachi" value="<?php echo $cli['diachi'] ?>">
                </div>
               <div class="form-group">
                  <label for="">Số điện thoại</label>
                  <input type="number" class="form-control" placeholder="Input field" name="telephone" value="<?php echo $cli['telephone'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" placeholder="Input field" name="email" value="<?php echo $cli['email'] ?>">
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