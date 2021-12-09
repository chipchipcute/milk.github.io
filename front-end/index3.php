<?php include 'header.php';
 if(isset($_GET['sanpham'])){
 	$id = $_GET['sanpham'];
 
 $product = mysqli_query($conn,"SELECT * FROM product where id = '$id' ");
 $pro = mysqli_fetch_assoc($product);

}
 ?>

 
    <div class="ct-sanpham">
    	<div class="anh-sanpham">
    		<img src="../uploads/<?php echo $pro['image'] ?>">
    		<h1><?php echo $pro['name'] ?></h1>
    		<span> | Tình Trạng : Còn hàng </span>
    		<hr>
    		<div><span class="tien"><?php echo number_format($pro['price']) ?>đ</span></div>
    		<div class="button">
    		<input type="button"  value="<?php echo $pro['weight'] ?>gr"     id="nang">
            <input type="button"  value="Mã:D0<?php echo $pro['id'] ?>" id="ma">
            <input type="button"  value="<?php echo $pro['loaisua'] ?>"    id="loai">
            </div>
            <div class="khuyenmai">
            	<img src="../data/upload/box.jpg">
            	<span>KHUYẾN MÃI</span>
            	<p>- Miễn vẫn chuyển trong nội địa</p>
            	<p>- Mở kèm theo quà</p>
            	<p>- Mua 3 tặng 1 </p>             
            </div>
             <div class="chuthich">   
                                    <img src="../data/upload/car.jpg"  >
                                    <p>Miễn phí vận chuyển với trong tỉnh</p>
                          
                                    <img src="../data/upload/reset.jpg" >
                                    <p>Đổi trả hàng lỗi trong 3 ngày, thủ tục đơn giản.</p>
                              
                               
                                    <img src="../data/upload/pay.jpg">
                                    <p>Thanh toán khi nhận hàng.</p>
                                </div>
        <table border="1" class="thongtin">
       <tr>
            <th colspan="2" style="height: 40px;font-size: 18px;">THÔNG TIN SẢN PHẨM:<span style="font-size: 20px ; font-family: Geneva ; font-style: italic; color: LightSeaGreen"> <?php echo $pro['name'] ?></span></th>
           
        </tr>
     
        <tr>
                <td  style="width: 100px"><img src="../uploads/<?php echo $pro['image'] ?>" style="width: 150px;
	height: 150px; margin-left: 15px;" ></td>
                <td style="width: 470px; padding-left: 10px">
                	<h3>Thành phần dinh dưỡng:</h3>
                	<p><?php echo $pro['vitamin'] ?></p>
                	<h3 >Lợi ích:</h3>
                 	<p><?php echo $pro['loiich'] ?></p>
                </td>
         
            
            </tr>

    </table>
            
    	</div>
    

<!--end:body-->

	
	<footer class="footer-v1" style="background: SeaGreen">
		<div class="site-footer">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							
							<div class=" contact">
								<div class="fanpage">
									
									<div class="infor-page">
									<h3><span style="font-size: 22px;"><span style="color: #ffffff;"><strong><span style="color: #ffffff;">Sữa HTP</span></strong></span></span></h3>
<p><span style="color: #ffffff;"><span style="font-size: medium;"><span style="font-size: small;"><span style="color: #ffffff;">SĐT: 0889489221</span></span></span></span></p>
<p><span style="color: #ffffff;"><span style="font-size: medium;"><span style="font-size: small;"><span style="color: #ffffff;">Email: tranhiep010201@gmail.com</span></span></span></span></p>
										
									</div>
								</div>
								
								
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<h3><span>Hỗ trợ khách hàng</span></h3>
							<ul class="list-menu">
								
							  <li><a >Liên hệ và góp ý</a></li>
        
								<li><a href="">Hướng dẫn mua hàng</a></li>
								 
								<li><a href="">Chính Sách Bảo Mật</a></li>
								
								 
								<li><a href="">Chính Sách Giao/Nhận</a></li>
								
								 
								<li><a href="">Chính Sách Thanh Toán</a></li>
								
								 
								
							</ul>
						</div>
						
						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<h3><span>Fanpage</span></h3>
							<div class="list-menu">
							<div class="fanpage">
									<div id="w_facebook_embed">
										<div class="fb-like-box" data-href="https://www.facebook.com/hiep010201/" data-width="262" data-height="250" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
										
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<h3><span>THỜI GIAN LÀM VIỆC</span></h3>
							<div class="list-menu footer-col-content">
								<div class="time">
									<div class="lich">
										Thứ 2 - Thứ 7: 8:30 - 20:00<br>
										Chủ nhật: 8:30 - 17:00
									</div>
								</div>
								<h3>Hỗ trợ thanh toán</h3>
								<div class="bank">
									<img src="../template/img/vietcom.png" alt="vietcombank">
									<img src="../template/img/sacom.png" alt="sacombank">
									<img src="../template/img/acb.png" alt="acbank">
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="copyright clearfix">
			<div class="container">
				<div class="inner clearfix">
					<div class="pull-left">
						<h4 class="title-copyright">© Bài tập lớn Thiet Ke Web Bởi <a href="https://www.facebook.com/hiep010201">Hiệp</a></h4>
					</div>				
					<div class="pull-right hidden-xs-down payment">
						<span>Phương thức thanh toán:</span>
						<img src="../template/img/payment.png" alt="payment">
					</div>
				</div>
			</div>
		</div>
	</footer>

 
  
  </div>
 </div>
</div> -->

	<div style="height: 1840px;position: fixed;width: 100%;top: 0px;left: 0px;right: 0px;bottom: 0px;z-index: 1001;background: #000 none repeat scroll 0% 0%;opacity: 0.3;display: none;text-align:center" id="khungnen">
	</div>
	<div style="display: none;left: 70%;margin-left: -309px;z-index: 1002;position: fixed;top: 40%;margin-top: 0px;" id="loadding"><img src="../template/Default/img/loader.gif" />
	</div>
</body>
</html>