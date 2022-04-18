<?php 
	$this->fileLayout = "Views/Frontend/Layout_trangtrong.php";
?> 

<div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right no-padding-left" style="width:100%;">
                 
                  <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href=".">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="index.php?controller=product&action=product&id=<?php echo $cate->id ?>">
                           <span itemprop="name"><?php echo $cate->name ?></span></a>
                           <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           <?php echo $result->name ?>
                           </strong>
                           </span>
                           <meta itemprop="position" content="3" />
                        </li>
                     </ol>
                  </div>
                  <div class="content_page">
                     <div class="content-right-items margin0">
                        <div class="title-pro-des-ct">
                           <h1><?php echo $result->name ?></h1>
                        </div>
                        <div class="slider-galery ">
                        
                        <div id="sync1" class="owl-carousel owl-theme">
                           <?php 
                                 $product_img = explode(',',$result->img) ;
                                 // echo '<pre>';
                                 // print_r($product_img);
                                 // echo '   </pre>';
                                 foreach ($product_img as $pro_img) {
                                 
                                 
                           ?>
                           <div class="item">
                              <img src="Assets/Backend/uploads/<?php echo $pro_img ?>" width="100%">
                           </div>     
                           <?php } ?>                                
                        </div>
                        

                        <div id="sync2" class="owl-carousel owl-theme">
                              <?php 
                                 $product_img = explode(',',$result->img) ;
                                 // echo '<pre>';
                                 // print_r($product_img);
                                 // echo '   </pre>';
                                 foreach ($product_img as $pro_img) {
                              ?>
                           <div class="item">
                              <img src="Assets/Backend/uploads/<?php echo $pro_img ?>" width="100%">
                           </div>
                           <?php } ?>        
                                  
                        </div> 
                           
                        </div>
                        <div class="content-des-pro">
                           <div class="content-des-pro_in">
                              <div class="pro-des-sum">
                                 <div class="price">
                                    <p class="code_skin" style="margin-bottom:10px">
                                       <span>Mã hàng: <a href="chitietsp.php">CRW-W06</a> | Thương hiệu: <a href="">Comrack</a></span>
                                    </p>
                                    <div class="status_pro">
                                       <span><b>Trạng thái:</b>  Còn hàng</span>
                                    </div>
                                    <div class="status_pro"><span><b>Xuất xứ:</b>  Việt Nam</span></div>
                                 </div>
                                 <div class="color_price">
                                    <span class="title_price bg_green">Giá bán</span><?php echo number_format($result->price,0,'.','.').' VND' ?></span>. 
                                    <div class="clear"></div>
                                 </div>
                                 
                              </div>
                              <div class="clear"></div>
                           </div>
                           <div class="content-pro-des">
                              <div class="content_des">
                                 <p style="font-size: 16px;font-weight: bold;"><?php echo $result->name ?></p><br />
                                 <p><?php echo $result->content ?></p>

                              </div>
                           </div>
                           <div class="ct">
                              
                              <div class="wp_a">
                                 <a href="index.php?controller=cart&action=add&id=<?php echo $result->id ?>"class="view_duan">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span>
                                 </a>
                                
                                 <div class="clear"></div>
                              </div>
                              <div class="clear"></div>
                           </div>
                           <!--  <div class="conten-infor-pro">
                              <p><img alt="phone icon thietbivanphong123.com" src="/data/upload/home-ico.png" style="height:16px; width:16px" />&nbsp;Địa chỉ : 439/4/20 KP1,Phường Tân Thới Hiệp,Quận 12,TPHCM</p>
                              
                              <p><img alt="phone icon thietbivanphong123.com" src="/data/upload/Phone-icon-thietbivanphong123.png" style="height:16px; width:16px" />&nbsp;0932 023 992</p>
                              
                              <p><img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Mr Quang: 090 66 99 038 &nbsp; &nbsp; &nbsp; &nbsp; <img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Mr Duy: 0938 62 69 60</p>
                              
                              <p><img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Ms Huyền: 0888 039 123 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Ms Ngọc: 090 247 0070</p>
                              
                              <p><img alt="clock icon thietbivanphong123.com" src="/data/upload/clock-icon.png" style="height:16px; width:16px" />&nbsp;Thời gian:Từ 8h - 17h30 thứ 2 đến thứ 6. T7&nbsp;từ 8h - 12h00</p>
                              
                              </div> -->
                           <div class="tags_products prodcut_detail">
                              <div class="tab_link">
                                 <h3 class="title_tab_link">TAGS: </h3>
                                 <div class="content_tab_link"> <a href="tag/"></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="content-des-pro-suport">
                           <div class="box-setup">
                              <div class="title-setup">
                                 <i class="fa fa-tasks" aria-hidden="true"></i> Dịch vụ &amp; Chú ý
                              </div>
                              <div class="info-setup">
                                 <div class="row-setup">
                                    <p style="text-align:justify">Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :</p>
                                    <p><span style="color:#d50100">0932 023 992</span>&nbsp;để biết thêm chi tiết về Phụ kiện sản phẩm.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="info-prod prod-price freeship">
                              <span class="title">
                                 <p>
                                    <!-- <img alt="chuyển hàng miễn phí tại thietbivanphong123.com" src="/data/upload/ship-hang-mien-phi.png" style="height:33px; width:60px" /> --> Bạn sẽ được giao hàng miễn phí trong khu vực nội thành TPHCM khi mua sản phẩm này.
                                 </p>
                              </span>
                              <span class="row more"><a href="" title="">Xem thêm</a>
                              </span>
                           </div>
                           <div class="bx-contact">
                              <span class="title-cnt">Bạn cần hỗ trợ?</span> 
                              <p>Chat với chúng tôi :</p>
                              <p><img alt="icon skype " src="Assets/Frontend/image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="skype:quangtran.123corp?chat">thietbivanphong.com</a></p>
                              
                              
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                  </div>
               </div>
               <div class="wrapper_all_main_right">
                 
                  <div class="product_detail_info">
                     <div class="module_pro_all" id="productDetail">
                        <div class="box-title">
                           <div class="title-bar">
                              <h3>Chi tiết sản phẩm</h3>
                           </div>
                        </div>
                        <div class="tab_content content_text_product content-module">
                         <?php echo $result->descripition ?> 
                        </div>
                     </div>
                     
                  </div>
                  <div class="clear"></div>
                  
                  <script type="text/javascript">
                     CloudZoom.quickStart();
                     
                     jQuery(function($) {
                     
                         var $userName = $('.name');
                     
                         if ($userName.length) {
                     
                             $userName.avatarMe({
                     
                                 className: 'avatar-me',
                     
                                 maxChar: 1
                     
                             });
                     
                         }
                     
                     });
                     
                  </script>
                  <div class="clear"></div>
                 
                  <!-- <div class="content-brank">
                     <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
                  </div> -->
                  <br>
                  <div class="module_pro_all">
            <div class="box-title">
               <div class="title-bar">
                  <h1>Sản phẩm liên quan</h1>
                  
               </div>
            </div>
            <div class="pro_all_gird">
               <div class="girds_all list_all_other_page ">
                  <?php  foreach($related as $row): ?>
                  <div class="grids">
                     <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="index.php?controller=product&action=detail_product&id=<?php echo $row->product_id ?>">
                           <?php $product_img = explode(',',$row->img); ?>
                           <img class="lazy img-pro content-image" src="Assets/Backend/uploads/<?php echo $product_img[0] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                           </a>

                           
                        </div>
                        <div class="name-pro-right">
                           <a href="index.php?controller=product&action=detail_product&id=<?php echo $row->product_id ?>">
                              <h3><?php echo $row->product_name ?></h3>
                           </a>
                        </div>
                        <div class="add_card">
                           <a onclick="return giohang(579);">
                           <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                           </a>
                        </div>
                        <div class="price_old_new">
                           <div class="price">
                              <span class="news_price" style="padding-left:60px"><?php echo number_format($row->price,0,'','.').' đ' ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  <?php endforeach; ?>
                  

                  <div class="clear"></div>
               </div>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
         <script>
            jQuery(document).ready(function() {
            
            
            
                var div_fixed = jQuery('.product_detail_info').offset().top;
            
                jQuery(window).scroll(function() {
            
                    if (jQuery(window).scrollTop() > div_fixed) {
            
                        jQuery('.tabs-animation').addClass('fix_top');
            
                    } else {
            
                        jQuery('.tabs-animation').removeClass('fix_top');
            
                    }
            
                });
            
                jQuery(window).load(function() {
            
                    if (jQuery(window).scrollTop() > div_fixed) {
            
                        jQuery('.tabs-animation').addClass('fix_top');
            
                    }
            
                });
            
            });
            
         </script>