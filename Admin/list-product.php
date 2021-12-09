<?php include 'header.php' ;
$product = mysqli_query($conn," SELECT * FROM product ");

// $pro = mysqli_query($conn," SELECT * FROM category  ");
// $p = mysqli_fetch_assoc($pro);

$total = mysqli_num_rows($product);
$limit = 4;
$total_page = ceil($total/$limit);


$cr_page = isset($_GET['page']) ? $_GET['page'] : 1 ;

$start = ($cr_page - 1) * $limit;
$product = mysqli_query($conn," SELECT * FROM product LIMIT $start,$limit");
?>
     <div class="container">
       <div class="row">
         <div class="col-md-3">
           <div class="panel panel-info">
             <div class="panel-heading">
               <h3 class="panel-title">Quản lý sản phẩm</h3>
             </div>
             <div class="panel-body">
               <div class="list-group">
                 <a href="add-product.php" class="list-group-item active">Thêm mới sản phẩm</a> </div>
             </div>
           </div>
         </div>
         <div class="col-md-9">
           <table class="table table-bordered table-hover">
             <thead>
               <tr>
                 <th>STT</th>
                 <th>Name</th>
                 <th>Category</th>         
                 <th>Image</th>
                 <th>Price</th>
                 <th>Loại sữa</th>
                 <th>Trọng lượng</th>
                 <th>Dinh dưỡng</th>
                 <th>Lợi ích</th>
               </tr>
             </thead>
             <tbody>
              <?php foreach($product as $key => $data ) { ?>
               <tr>
                 <td><?php echo $key +1 ?></td>
                 <td><?php echo $data['name'] ?></td>
                  
                 <td><?php echo $data['id_category'] ?></td>

                 <td><img src="../uploads/<?php echo $data['image']?>" alt="" width="50px"></td>
                  <td><?php echo number_format($data['price']) ?>VNĐ</td>
                  <?php if($data['loaisua'] == 'Sữa bột') {?>
                  <td>Sữa bột</td>
                <?php }else{ ?>
                  <td>Sữa tươi</td>
                <?php }?>
                  <td><?php echo $data['weight'] ?>gr</td>
                  <td><?php echo $data['vitamin'] ?></td>
                  <td><?php echo $data['loiich'] ?></td>
                
                  <td>
                    <a href="edit-product.php?id=<?php echo $data['id'] ?>" class="btn btn-info" title="Sửa"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="delete-product.php?id=<?php echo $data['id'] ?>"class="btn btn-danger" title="Xoá" onclick = "return confirm('Bạn có chắn chắn muốn xoá không !!')"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
               </tr>
             <?php  }?>
             </tbody>
           </table>
           <ul class="pagination">
            <li class="<?php echo (($cr_page -1 ==0)? 'check' : '') ?>"><a href="list-product.php?page=<?php echo $cr_page -1 ?>">&laquo;</a></li>

           <?php for($i = 1; $i <= $total_page; $i++) {  ?>
            <li class="<?php echo(($cr_page == $i)?'active': '')?>"><a href="list-product.php?page=<?php echo $i ?>"> <?php echo $i  ?></a></li>
           <?php } ?>
           
            <li class="<?php echo (($cr_page == $total_page)? 'check' : '') ?>"><a href="list-product.php?page=<?php echo $cr_page + 1?>">&raquo;</a></li>
            
          </ul>
         </div>
       </div>
     </div>
<?php include 'footer.php' ?>