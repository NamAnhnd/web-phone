<?php 
	$this->fileLayout = "Views/Frontend/Layout_trangtrong.php";
?> 
 <div class="bg_in">
            <div class="breadcrumbs">

                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">

                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                           <a itemprop="item" href=".">

                           <span itemprop="name">Trang chủ</span></a>

                           <meta itemprop="position" content="1" />

                        </li>

                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">

                           <a itemprop="item" href="sanpham.php">

                           <span itemprop="name">Tất cả sản phẩm</span></a>

                           <meta itemprop="position" content="2" />

                        </li>

                       
                     </ol>

                  </div>


            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Tất cả sản phẩm</h1>
                        
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                       
                        <?php foreach($result as $row): ?>
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">

                                        <a href="index.php?controller=product&action=detail_product&id=<?php echo $row->id ?>">
                                            <?php $product_img = explode(',',$row->img); ?>
                                            <img class="lazy img-pro content-image" src="Assets/Backend/uploads/<?php echo $product_img[0] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                        </a>

                                       
                                       
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="index.php?controller=product&action=detail_product&id=<?php echo $row->id ?>">
                                            <h3><?php echo $row->name?></h3>
                                        </a>
                                    </div>
                                    <div class="add_card">
                                        <a href="index.php?controller=cart&action=add&id=<?php echo $row->id ?>">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                        </a>
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span class="news_price"><?php echo number_format($row->price,0,'.','.') .' đ' ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <nav aria-label="Page navigation example" style="text-align:center">
                           <ul class="pagination">
                              <li  class="page-item"><a style="background :orange; color:black" class="page-link" href="#">Trang</a></li>
                              <?php for($i = 1;$i<=$one;$i++): ?>
                              <li  class="page-item"><a class="page-link"style=" color:black" href="index.php?controller=Product&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
                              <?php endfor; ?>
                           </ul>
                        </nav>
                <div class="clear"></div>
            </div>
                           
</div>           
