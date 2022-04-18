<?php 
	$this->fileLayout = "Views/Frontend/Layout_trangtrong.php";
?> 
<section>
	<div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right">
 				<!--breadcrumbs-->
                  <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href=".">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           Tin tức
                           </strong>  
                           </span>
                           <meta itemprop="position" content="2" />
                        </li>
                     </ol>
                  </div>
                  <!--breadcrumbs-->
                  <div class="content_page">
                     <div class="box-title">
                        <div class="title-bar">
                           <h1>Tin tức</h1>
                        </div>
                     </div>
                     <div class="content_text">
                        <ul class="list_ul">
							<?php foreach($all_post as $post): ?>
                           <li class="lists">
                              <div class="img-list">
                                 <a href="index.php?controller=Post&action=content&id=<?php echo $post->id ?>">
                                 <img src="Assets/Backend/uploads/<?php echo $post->img ?>" alt="So sánh công nghệ hiển thị 3LCD và DLP" class="img-list-in">
                                 </a>
                              </div>
                              <div class="content-list">
                                 <div class="content-list_inm">
                                    <div class="title-list">
                                       <h2>
                                          <strong ><?php echo $post->name ?></strong>
                                       </h2>
                                       
                                    </div>
                                    <div class="content-list-in">
                                       <p><span style="font-size:16px"><?php echo substr($post->content,0, 500) ?></span></p>
                                    </div>
                                    <div class="xt"><a href="index.php?controller=Post&action=content&id=<?php echo $post->id ?>">Xem thêm</a></div>
                                 </div>
                              </div>
                              <div class="clear"></div>
                           </li>
						   <?php endforeach; ?>
                          
                        </ul>
                        <nav aria-label="Page navigation example" style="text-align:center">
                           <ul class="pagination">
                              <li  class="page-item"><a style="background :orange; color:black" class="page-link" href="#">Trang</a></li>
                              <?php for($i = 1;$i<=$one;$i++): ?>
                              <li  class="page-item"><a class="page-link"style=" color:black" href="index.php?controller=Post&page=<?php echo $i ?>"><?php echo $i; ?></a></li>
                              <?php endfor; ?>
                           </ul>
                        </nav>
                        <div class="clear"></div>
                        <div class="wp_page">
                           <div class="page">
                           </div>
                        </div>
                     </div>
                  </div>
			</div>
		</div>
	</div>			  
</section>				  