<?php include 'header.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $category = mysqli_query($conn,"SELECT * FROM category WHERE id = $id");
        
        $pro = mysqli_fetch_assoc($category);

      } 


    $category = mysqli_query($conn," SELECT * FROM category ");

    if (isset($_POST['name'])){
      $name = $_POST['name'];
      $DiaChi = $_POST['DiaChi'];
      $telephone = $_POST['telephone'];
      $email = $_POST['email'];
     
        $sql = "UPDATE category SET name= '$name',DiaChi='$DiaChi',telephone='$telephone',email='$email' WHERE id = $id ";  
         $query =  mysqli_query($conn,$sql);
         
         if($query){
          header('location:list-category.php');
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
               <h3 class="panel-title">Sửa hãng sửa</h3>
             </div>
             <div class="panel-body">
              <form action="" method="POST" role="form">
                <legend>Sửa các thông tin</legend>

                <div class="form-group">
                  <label for="">Tên hãng sửa</label>
                  <input type="text" class="form-control" placeholder="Nhập tên hãng sửa" name="name" value="<?php echo $pro['name'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Địa Chỉ</label>
                  <input type="text" class="form-control" placeholder="Input field" name="DiaChi" value="<?php echo $pro['DiaChi'] ?>" >
                </div>
                <div class="form-group">
                  <label for="">Số Điện Thoại</label>
                  <input type="number" class="form-control" placeholder="Input field" name="telephone" value="<?php echo $pro['telephone'] ?>">
                </div>
               <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" placeholder="Input field" name="email" value="<?php echo $pro['email'] ?>">
                </div>

                </div>
                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-wrench">
                Sửa</i></button>
              </form>
             </div>
           </div>
         </div>
        
       </div>
     </div>
<?php include 'footer.php' ?>