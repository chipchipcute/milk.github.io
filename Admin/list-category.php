<?php include 'header.php' ;
$hangsua = mysqli_query($conn," SELECT * FROM category ");

$total = mysqli_num_rows($hangsua);
$limit = 4;
$total_page = ceil($total/$limit);


$cr_page = isset($_GET['page']) ? $_GET['page'] : 1 ;

$start = ($cr_page - 1) * $limit;
$hangsua = mysqli_query($conn," SELECT * FROM category LIMIT $start,$limit");
?>
     <div class="container">
      <div class="row">
         <div class="col-md-3">
           <div class="panel panel-info">
             <div class="panel-heading">
               <h3 class="panel-title">Quản lý hãng sữa</h3>
             </div>
             <div class="panel-body">
               <div class="list-group">
                 <a href="add-category.php" class="list-group-item active">Thêm mới hãng sữa</a> </div>
             </div>
           </div>
         </div>
         <div class="col-md-9">
           <table class="table table-bordered table-hover" >
             <thead>
               <tr>
                 <th>STT</th>
                 <th>Tên hãng sữa</th>
                 <th>Địa chỉ</th>
                 <th>Điện thoại</th>
                 <th>Email</th>
               </tr>
             </thead>
             <tbody>
              <?php foreach($hangsua as $key => $hang) { ?>
               <tr>
                 <td><?php echo $key +1 ?></td>
                 <td><?php echo $hang['name'] ?></td>
                 <td><?php echo $hang['DiaChi'] ?></td>
                  <td><?php echo $hang['telephone'] ?></td>
                  <td><?php echo $hang['email'] ?></td>
                   <td>
                    <a href="edit-category.php?id=<?php echo $hang['id'] ?>"class="btn btn-info" title="Sửa"><i class="glyphicon glyphicon-pencil">Sửa</i></a>
                  </td>
                  <td>
                    <a href="delete-category.php?id=<?php echo $hang['id'] ?>" class="btn btn-danger" title="Xoá" onclick = "return confirm('Bạn có chắn chắn muốn xoá không !!')"><i class="glyphicon glyphicon-trash">Xoá</i></a>
                  </td>
               </tr>
             <?php  }?>
             </tbody>
           </table>
          <ul class="pagination">
            <li class="<?php echo (($cr_page -1 ==0)? 'check' : '') ?>"><a href="list-category.php?page=<?php echo $cr_page -1 ?>">&laquo;</a></li>
           <?php for($i = 1; $i <= $total_page; $i++) {  ?>
            <li class="<?php echo(($cr_page == $i)?'active': '')?>"><a href="list-category.php?page=<?php echo $i ?>"> <?php echo $i  ?></a></li>
           <?php } ?>
            <li class="<?php echo (($cr_page == $total_page)? 'check' : '') ?>"><a href="list-category.php?page=<?php echo $cr_page + 1?>">&raquo;</a></li>
            
          </ul>
         </div>
       </div>
     </div>
<?php include 'footer.php' ?>