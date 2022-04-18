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
                           <?php echo $result->name ?>
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
                           <h1> <?php echo $result->name ?></h1>
                        </div>
                     </div>
                     <div class="content_text">         
                        <p>
                            <span style="font-size:16px"> <?php echo $result->content ?></span>
                        </p>
                     </div>
                  </div>
			</div>
		</div>
	</div>			  
</section>				  