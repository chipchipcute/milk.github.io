<?php include 'header.php';
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $product = mysqli_query($conn,"SELECT * FROM product WHERE id = $id");
        
        $pro = mysqli_fetch_assoc($product);

      } 

    
    $category = mysqli_query($conn," SELECT * FROM category ");

    if (isset($_POST['name'])){
      $name = $_POST['name'];
      $id_category = $_POST['id_category'];
      $price = $_POST['price'];
      $weight = $_POST['weight'];
      $loaisua = $_POST['loaisua'];
      $vitamin = $_POST['vitamin'];
      $loiich = $_POST['loiich'];
      var_dump($_FILES['image']);
      if (empty($_FILES['image']['name'])) {
         $image = $pro['image']; 
      }
      else{
         $file =$_FILES['image'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'],'../uploads/'.$file_name);
        $image = $file_name;
      }
      $sql = "UPDATE product SET name= '$name',id_category='$id_category',price='$price',weight='$weight',loaisua='$loaisua',vitamin='$vitamin',loiich='$loiich',image='$image' WHERE id = $id ";     
        $query = mysqli_query($conn,$sql);
        if ($query) {
          header('location: list-product.php');
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
               <h3 class="panel-title">Sửa sản phẩm</h3>
             </div>
             <div class="panel-body">
              <form action="" method="POST" role="form" enctype="multipart/form-data">
                <legend>Sửa các thông tin</legend>

                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="name" value="<?php echo $pro['name'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Danh mục</label>
                  <select id="input" class="form-control" name="id_category">
                    <option value="">---Lựa chọn Danh mục---</option>
                    <?php foreach($category as $cate) {?>
                     <option value="<?php echo $cate['id']?>" <?php echo ($cate['id'] == $pro['id_category']) ?'selected' : '' ?>><?php echo $cate['name'] ?></option>
                     <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label>
                  <input type="file" class="form-control" placeholder="Input field" name="image" >
                  <img src="../uploads/<?php echo $pro['image'] ?>" alt="" width="300px">
                </div>
                <div class="form-group">
                  <label for="">Giá sản phẩm</label>
                  <input type="text" class="form-control" placeholder="Input field" name="price" value="<?php echo $pro['price'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Trọng lượng</label>
                  <input type="text" class="form-control" placeholder="Input field" name="weight" value="<?php echo $pro['weight'] ?>"></div>
                  <div class="form-group">
                  <label for="">Loại sữa</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="loaisua" id="input" value="Sữa bột"  <?php echo ($pro['loaisua'] == 'Sữa bột') ?'checked' : '' ?>>
                      Sữa bột
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="loaisua" id="input" value="Sữa tươi"  <?php echo ($pro['loaisua'] == 'Sữa tươi') ?'checked' : '' ?>>
                      Sữa tươi
                    </label>
                  </div>
                  <div class="form-group">
                  <label for="">Dinh dưỡng</label>
                  <input type="text" class="form-control" placeholder="Input field" name="vitamin" value="<?php echo $pro['vitamin'] ?>">
                </div>
                 <div class="form-group">
                  <label for="">Lợi ích</label>
                  <input type="text" class="form-control" placeholder="Input field" name="loiich" value="<?php echo $pro['loiich'] ?>">
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