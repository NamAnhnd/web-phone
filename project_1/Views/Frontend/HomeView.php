<?php 
	$this->fileLayout = "Views/Frontend/Layout_trangchu.php";
?> 
       
       <div class="bg_in">
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sản phẩm HOT</h1>
                        
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
                                            <?php $hot_img = explode(',',$row->img); ?>
                                            <img class="lazy img-pro content-image" src="Assets/Backend/uploads/<?php echo $hot_img[0] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
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
                <div class="clear"></div>
            </div>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sản phẩm mói nhất</h1>
                        
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php foreach($new_product as $new): ?>
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">

                                        <a href="index.php?controller=product&action=detail_product&id=<?php echo $new->id ?>">
                                             <?php $new_img = explode(',',$new->img); ?>
                                            <img class="lazy img-pro content-image" src="Assets/Backend/uploads/<?php echo $new_img[0] ?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                        </a>

                                       
                                       
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="index.php?controller=product&action=detail_product&id=<?php echo $new->id ?>">
                                            <h3><?php echo $new->name?></h3>
                                        </a>
                                    </div>
                                    <div class="add_card">
                                        <a href="index.php?controller=cart&action=add&id=<?php echo $new->id ?>">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                        </a>
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span class="news_price"><?php echo number_format($new->price,0,'.','.') .' đ' ?></span>
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
                <div class="clear"></div>
            </div>
           
