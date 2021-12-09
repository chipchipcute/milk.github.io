<?php include 'header.php' ;
$client = mysqli_query($conn," SELECT * FROM client ");

$total = mysqli_num_rows($client);
$limit = 4;
$total_page = ceil($total/$limit);


$cr_page = isset($_GET['page']) ? $_GET['page'] : 1 ;

$start = ($cr_page - 1) * $limit;
$client = mysqli_query($conn," SELECT * FROM client LIMIT $start,$limit");
?>
     <div class="container">
       <div class="row">
         <div class="col-md-3">
           <div class="panel panel-info">
             <div class="panel-heading">
               <h3 class="panel-title">Thông tin khách hàng</h3>
             </div>
             <div class="panel-body">
               <div class="list-group">
                 <a href="add-client.php" class="list-group-item active">Thêm mới khách hàng</a></div>
             </div>
           </div>
         </div>
         <div class="col-md-15">
           <table class="table table-bordered table-hover">
             <thead>
               <tr>
                 <th>Mã KH</th>
                 <th>Tên khách hàng</th>
                 <th>Giới tính</th>
                 <th>Địa chỉ</th>
                 <th>Số điện thoại</th>
                 <th>Email</th>
                 <th>Sửa</th>
                 <th>Xoá</th>
               </tr>
             </thead>
             <tbody>
              <?php foreach($client as $key => $hang) { ?>
               <tr>
                 <td><?php echo $key +1 ?></td>
                 <td><?php echo $hang['name'] ?></td>
                 <?php if($hang['gender'] == 1) {?>
                  <td>Nam</td>
                <?php }else{ ?>
                  <td>Nữ</td>
                <?php }?>
                  <td><?php echo $hang['diachi'] ?></td>
                  <td><?php echo $hang['telephone'] ?></td>
                  <td><?php echo $hang['email'] ?></td>
                   <td>
                    <a href="edit-client.php?id=<?php echo $hang['id'] ?>"class="btn btn-info" title="Sửa"><i class="glyphicon glyphicon-pencil"></i></a>
                  </td>
                  <td>
                    <a href="delete-client.php?id=<?php echo $hang['id'] ?>" class="btn btn-danger" title="Xoá" onclick = "return confirm('Bạn có chắn chắn muốn xoá không !!')"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
               </tr>
             <?php  }?>
             </tbody>
           </table>
           <ul class="pagination">
            <li class="<?php echo (($cr_page -1 ==0)? 'check' : '') ?>"><a href="client.php?page=<?php echo $cr_page -1 ?>">&laquo;</a></li>
           <?php for($i = 1; $i <= $total_page; $i++) {  ?>
            <li class="<?php echo(($cr_page == $i)?'active': '')?>"><a href="client.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
           <?php } ?>
            <li class="<?php echo (($cr_page == $total_page)? 'check' : '') ?>"><a href="client.php?page=<?php echo $cr_page +1 ?>">&raquo;</a></li>
            
          </ul>
         </div>
       </div>
     </div>
<?php include 'footer.php' ?>