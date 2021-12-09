<?php include 'header.php';



    $category = mysqli_query($conn," SELECT * FROM category ");

    if (isset($_POST['name'])){
      $name = $_POST['name'];
      $id_category = $_POST['id_category'];
      $price = $_POST['price'];
      $weight = $_POST['weight'];
      $loaisua = $_POST['loaisua'];
      $vitamin = $_POST['vitamin'];
      $loiich = $_POST['loiich'];
      if (($_FILES['image']['error'] == 0)){
      //b1: chuyển file từ bộ nhớ tạm vào thư mục uploads
        $file =$_FILES['image'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'],'../uploads/'.$file_name);
      //b2: luu ten cua file vaof database
        $sql = "INSERT INTO product(name,id_category,image,price,weight,loaisua,vitamin,loiich) VALUES('$name','$id_category','$file_name','$price','$weight','$loaisua','$vitamin','$loiich')";
         $query =  mysqli_query($conn,$sql);
         
         if($query){
          header('location:list-product.php');
         }
         else{
          echo "error";
         }
      }

      else{
        echo "lỗi rồi";
      }
    }





 ?>
     <div class="container">
       <div class="row">
         <div class="col-md-9">
           <div class="panel panel-info">
             <div class="panel-heading">
               <h3 class="panel-title">Thêm mới sản phẩm</h3>
             </div>
             <div class="panel-body">
              <form action="" method="POST" role="form" enctype="multipart/form-data">
                <legend>Nhập các thông tin</legend>

                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="name">
                </div>
                <div class="form-group">
                  <label for="">Danh mục</label>
                  <select id="input" class="form-control" name="id_category">
                    <option value="">---Lựa chọn Danh mục---</option>
                    <?php foreach($category as $cate) {?>
                     <option value="<?php echo $cate['id']?>"><?php echo $cate['name'] ?></option>
                     <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label>
                  <input type="file" class="form-control" placeholder="Input field" name="image" >
                </div>
                <div class="form-group">
                  <label for="">Giá sản phẩm</label>
                  <input type="text" class="form-control" placeholder="Input field" name="price">
                </div>
                   <div class="form-group">
                  <label for="">Loại sữa</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="loaisua" id="input" value="Sữa bột" >
                      Sữa bột
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="loaisua" id="input" value="Sữa tươi">
                      Sữa tươi
                    </label>
                  </div>
                 <div class="form-group">
                  <label for="">Trọng lượng</label>
                  <input type="text" class="form-control" placeholder="Input field" name="weight">
                </div>
                <div class="form-group">
                  <label for="">Dinh dưỡng</label>
                  <input type="text" class="form-control" placeholder="Input field" name="vitamin">
                </div>
                <div class="form-group">
                  <label for="">Lợi ích</label>
                  <input type="text" class="form-control" placeholder="Input field" name="loiich">
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
              </form>
             </div>
           </div>
         </div>
        
       </div>
     </div>
<?php include 'footer.php' ?>