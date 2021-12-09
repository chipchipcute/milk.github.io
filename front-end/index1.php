<?php include 'header.php';

 $product = mysqli_query($conn,"SELECT * FROM product ");


 ?>



<div class="container">
  <div class="row">     
    
    <section class="right-content col-lg-9 col-xs-12  collection float-right">
          
            <h1 class="title-head" style="margin-top: 15px;">Sản Phẩm</h1>
    
      <div class="category-products">
                      
        <div class="sortPagiBar">

</div>    
        <section class="products-view products-view-grid">
  
    <div class="row">
            <?php foreach ($product as $key => $value): ?>  
              <div class="col-lg-4 col-md-4  col-sm-6 col-xs-12 item-product">
                <div class="product-box">                 
                    <div class="product-thumbnail">
                      <a href="" title="Tên sản phẩm">


                        <div class="flip-card">
                           <div class="flip-card-inner">
                        <div class="front">
                        <img src="../uploads/<?php echo $value['image'] ?>" alt="" style ="max-height: 300px">
                      </div>
                      <div class="back">
                        <img src="../uploads/<?php echo $value['image'] ?>" alt="" style ="max-height: 300px" alt="" />
                      </div>
                          </div></div>
                   



                      </a>

                    </div>

                    <div class="product-info">
                      <h3 class="product-name"><a href="index3.php?sanpham=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></h3>
                      
                      
                      <div class="product-price"><?php echo number_format($value['price']) ?>đ</div>
                      <div class="product-price" style="position: absolute; left: 9px;top: 37px; color: BurlyWood  " >Trọng lượng:<a style="padding-left: 20px;color: BurlyWood;"><?php echo $value['weight'] ?>gr</a>  
                      </div>
                      </div>

            
                </div>
              </div>
               <?php endforeach ?>
             </div>
  
  <div class="text-right">
    

    
  </div>
 
      </div>
    </section>
  

 <div class="menu-trai">
        <div class="menu-tieude">
            <h2>Danh mục hãng sữa</h2>
            <ul><li>
                <?php foreach ($category as $key => $value): ?> 
                  <a href="index2.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                <?php endforeach ?>
              </li>
            </ul>
        </div>
    </div>
</div>
<!-- footer -->
<footer class="footer-v1" style="background: SeaGreen;width: 1517px;margin-left: -190px;">
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


  <script src="../template/js/owl.carousel.min.js" type="text/javascript"></script>
  <script src="../template/js/dqdt.js" type="text/javascript"></script> 
   </div>
</div> -->

  <div style="height: 1840px;position: fixed;width: 100%;top: 0px;left: 0px;right: 0px;bottom: 0px;z-index: 1001;background: #000 none repeat scroll 0% 0%;opacity: 0.3;display: none;text-align:center" id="khungnen">
  </div>
  <div style="display: none;left: 70%;margin-left: -309px;z-index: 1002;position: fixed;top: 40%;margin-top: 0px;" id="loadding"><img src="template/Default/img/loader.gif" />
  </div>
</body>
</html>