<!DOCTYPE html>
<html lang="en-CA">

<head>
    <title>Website điện thoại</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="cleartype" content="on" />
    <link rel="icon" href="template/Default/img/favicon.ico" type="image/x-icon" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <!--rieng-->
    <meta property='og:title' name="title" content='' />
    <meta property='og:url' content='' />
    <meta property='og:image' content='' />
    <meta property='og:description' itemprop='description' name="description" content='' />
    <!--rieng-->
    <!--tkw-->
    <meta property="og:type" content="article" />
    <meta property="article:section" content="" />
    <meta property="og:site_name" content='' />
    <meta property="article:publisher" content="" />
    <meta property="article:author" content="" />
    <meta property="fb:app_id" content="1639622432921466" />
    <meta vary="User-Agent" />
    <meta name="geo.region" content="VN-SG" />
    <meta name="geo.placename" content="Ho Chi Minh City" />
    <meta name="geo.position" content="10.823099;106.629664" />
    <meta name="ICBM" content="10.823099, 106.629664" />
    <link rel="icon" type="image/png" href="template/Default/img/favicon.png">
    <!--tkw-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/style.css">

    <!-- link rel="stylesheet" href="template/Default/css/responsive.css" type="text/css"/> -->
    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/owl.theme.default.min.css">
</head>

<body>
    <header>
        <div class="info_top">
            <div class="bg_in">
                <p class="p_infor">
                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i>Email: sales@3tmobile.gmail</span>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 0923-032-992</span>
                </p>
            </div>
        </div>
        <div class="header_top_menu">
            <div class="header_top_menu_all">
                <div class="header_top">
                    <div class="bg_in">
                        <div class="logo">
                            <a href="."><img src="Assets/Frontend/image/logohere.jpeg" width="250" height="100" alt="logohere.jpeg" /></a>
                        </div>
                        
                        <nav class="menu_top">
                            <form class="search_form" method="post" action="index.php?controller=search" >
                                <input class="searchTerm" name="search" placeholder="Nhập từ cần tìm..."  />
                                <button class="searchButton" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </nav>
                        <div class="cart_wrapper">
                            <div class="cols_50">
                                <div class="hot_line_top">
                                    <span><b>Trụ sở chính</b></span>
                                    <br/>
                                    <span class="red">Hà Nội</span>
                                </div>
                            </div>
                            <div class="cols_50">
                                <div class="hot_line_top">
                                    <span><b>Văn phòng chi nhánh</b></span>
                                    <br/>
                                    <span class="red">Hà Nội</span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="btn_menu_search">
                <div class="bg_in">
                    <div class="table_row_search">
                        <div class="menu_top_cate">
                            <div class="">
                                <div class="menu" id="menu_cate">
                                    <div class="menu_left">
                                        <i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="search_top">
                            <div id='cssmenu'>
                                <ul>
                                    <li class='active'><a href='index.php'>Trang chủ</a></li>
                                   <?php
                                    $conn = Connection::getInstance();
                                    $query = $conn->query("SELECT * FROM tbl_category");
                                    $result = $query->fetchAll();
                                   
                                   ?>
                                   
                                    <li class=''>

                                        <a href='index.php?controller=product'>Sản phẩm</a>

                                        <ul>
                                            <?php foreach($result as $cate): ?>
                                            <li>
                                                <a href='index.php?controller=product&action=product&id=<?php echo $cate->id ?>'><?php echo $cate->name ?></a>                                               
                                            </li>
                                            <?php endforeach;?>

                                           

                                        </ul>
                                    </li>

                                    <li class=''><a href='index.php?controller=Post'>Tin tức</a></li>
                                    <li class=''><a href='index.php?controller=Cart'>Giỏ hàng</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <div class="clear"></div>
    
    <link rel="stylesheet" type="text/css" href="Assets/Frontend/css/product.css">
      <script defer type="text/javascript" src="Assets/Frontend/js/jquery.avatarme-1.0.min.js"></script>
      <script src="Assets/Frontend/js/cloudzoom.js"></script>
      <script defer src="Assets/Frontend/js/jquery.scrollto.js"></script>
      <script defer type="text/javascript">
         function giohang(id) {
            window.open('http://localhost/3tmobile/giohang.php');
             // document.getElementById("khungnen").style.display = "block";
         
             // document.getElementById("loadding").style.display = "block";
         
             // var sl = $('#qty').val();
         
             // jQuery.post('./gio-hang/', {
         
             //     'qty': sl,
         
             //     'maSanPham': id
         
             // }, function(data) {
         
             //     document.getElementById("khungnen").style.display = "none";
         
             //     document.getElementById("loadding").style.display = "none";
         
             //     swal({
         
             //             title: "Thành công",
         
             //             text: "Sản phẩm đã được thêm vào giỏ hàng!",
         
             //             type: "success",
         
             //             showCancelButton: true,
         
             //             confirmButtonColor: '#F19F00',
         
             //             confirmButtonText: 'Xem giỏ hàng',
         
             //             cancelButtonText: "Tiếp tục mua",
         
             //             closeOnConfirm: false,
         
             //         },
         
             //         function(isConfirm) {
         
             //             if (isConfirm) {
         
             //                 window.location = 'http://localhost/3tmobile/giohang.php';
         
             //             } else {
         
             //                 closeOnCancel: true;
         
             //             }
         
             //         });
         
             // })
         
         }
         
         
         
         function giohang2(id) {
         
             document.getElementById("khungnen").style.display = "block";
         
             document.getElementById("loadding").style.display = "block";
         
             jQuery.post('./gio-hang/', {
         
                 'qty': 1,
         
                 'maSanPham': id
         
             }, function(data) {
         
                 document.getElementById("khungnen").style.display = "none";
         
                 document.getElementById("loadding").style.display = "none";
         
                 swal({
         
                         title: "Thành công",
         
                         text: "Sản phẩm đã được thêm vào giỏ hàng!",
         
                         type: "success",
         
                         showCancelButton: true,
         
                         confirmButtonColor: '#F19F00',
         
                         confirmButtonText: 'Xem giỏ hàng',
         
                         cancelButtonText: "Tiếp tục mua",
         
                         closeOnConfirm: false,
         
                     },
         
                     function(isConfirm) {
         
                         if (isConfirm) {
         
                             window.location = './gio-hang/';
         
                         } else {
         
                             closeOnCancel: true;
         
                         }
         
                     });
         
             })
         
         }
         
         
         
         function comment(doc) {
         
             document.getElementById("khungnen").style.display = "block";
         
             document.getElementById("loadding").style.display = "block";
         
             jQuery.post('https://thietbivanphong123.com/comment', $(doc).serialize(), function(data) {
         
                 document.getElementById("khungnen").style.display = "none";
         
                 document.getElementById("loadding").style.display = "none";
         
                 if (data == 0) {
         
                     swal({
         
                             title: "Bình luận thành công. Đợi phê duyệt",
         
                             type: "success",
         
                             showCancelButton: false,
         
                             confirmButtonColor: '#F19F00',
         
                             confirmButtonText: 'OK',
         
                         },
         
                         function(isConfirm) {
         
                             if (isConfirm) {
         
                                 location.reload();
         
                             }
         
                         });
         
                 } else if (data == 1 || data != 0) {
         
                     swal({
         
                             title: "Đã xảy ra lỗi",
         
                             type: "error",
         
                             showCancelButton: false,
         
                             confirmButtonColor: '#F19F00',
         
                             confirmButtonText: 'OK',
         
                         },
         
                         function(isConfirm) {
         
                             if (isConfirm) {
         
                                 return false;
         
                             }
         
                         });
         
                 }
         
             });
         
             return false;
         
         }
         
         
         
         function rep(doc) {
         
             document.getElementById("khungnen").style.display = "block";
         
             document.getElementById("loadding").style.display = "block";
         
             jQuery.post('https://thietbivanphong123.com/comment', $(doc).serialize(), function(data) {
         
                 document.getElementById("khungnen").style.display = "none";
         
                 document.getElementById("loadding").style.display = "none";
         
                 if (data == 0) {
         
                     swal({
         
                             title: "Bình luận thành công. Đợi phê duyệt",
         
                             type: "success",
         
                             showCancelButton: false,
         
                             confirmButtonColor: '#F19F00',
         
                             confirmButtonText: 'OK',
         
                         },
         
                         function(isConfirm) {
         
                             if (isConfirm) {
         
                                 location.reload();
         
                             }
         
                         });
         
                 } else if (data == 1 || data != 0) {
         
                     swal({
         
                             title: "Đã xảy ra lỗi",
         
                             type: "error",
         
                             showCancelButton: false,
         
                             confirmButtonColor: '#F19F00',
         
                             confirmButtonText: 'OK',
         
                         },
         
                         function(isConfirm) {
         
                             if (isConfirm) {
         
                                 return false;
         
                             }
         
                         });
         
                 }
         
             });
         
             return false;
         
         }
         
      </script>

    <section>
        <div class="bg_in">
            <div class="col-md-7 col-xs-12 col-sm-12" style="padding: 0;margin-top:10px;">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="Assets/Frontend/image/banner3.jpg" alt="Siêu khuyến mãi">
                        </div>

                        <div class="item">
                            <img src="Assets/Frontend/image/banner3.jpg" alt="Siêu khuyến mãi">
                        </div>

                        <div class="item">
                            <img src="Assets/Frontend/image/banner3.jpg" alt="Siêu khuyến mãi">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12" style="padding: 0;margin-left:30px;margin-top:5px;">
            <?php 
               
                $conn = Connection::getInstance();
                $query = $conn->query("SELECT id, name,content,img FROM tbl_post ORDER BY id DESC LIMIT 0,4 ");
                // $query->execute(array('start'=>$start,'limit'=>$limit));
                $result =  $query->fetchAll();                
            ?>    
            <div class="row">
                    <div class="panel  panel-warning panel-styling">
                        <div class="panel-heading">Tin tức cập nhật</div>
                        <div class="panel-body scrollable-panel">
                            <?php foreach($result as $post): ?>
                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4">
                                    <a href="index.php?controller=Post&action=content&id=<?php echo $post->id ?>">
                                        <img src="Assets/Backend/uploads/<?php echo $post->img ?>">
                                    </a>
                                    
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8">
                                    <h4><?php echo $post->name ?></h4>
                                    <p><?php echo substr($post->content,0, 300) ?></p>
                                </div>
                            </div>
                            <hr>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                </div>
            </div>   
            

        </div>
        <div class="clear"></div>
    </section>

    <!-- Main content -->
    <section>
        <?php 
            //xuat noi dung cua view trong MVC ra day
            echo $this->view;
        ?>
            
    </section>
        <!-- /.content -->
    <!--end:body-->
    <div class="clear"></div>
    <footer>
        <div class="footer_top_bootom">
            <div class="bg_in">
                <div class="footer footer_bottom">
                    <div class="footer-col">
                        <h4>Thông tin công ty</h4>
                        <div class="footer-col-content">
                            <ul>
                                <li><a href="chitiettin.php">Về chúng tôi</a></li>
                                <li><a href="chitiettin.php">Tin tuyển dụng</a></li>
                                <li><a href="chitiettin.php">Chương trình khuyến mãi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4>Hỗ trợ khách hàng</h4>
                        <div class="footer-col-content">
                            <ul>
                                <li><a href="chitiettin.php">Hướng dẫn mua hàng</a></li>
                                <li><a href="chitiettin.php">Chính sách bảo hành thiết bị</a></li>
                                <li><a href="chitiettin.php">Chính sách bảo mật thông tin</a></li>
                                <li><a href="chitiettin.php">Quy định và hình thức thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4>Kết nối với chúng tôi</h4>
                        <div class="footer-col-content">
                            <ul class="social">
                                <li>
                                    <a href="#" class="fb"><img src="Assets/Frontend/image/Fb.png">Facebook</a>
                                </li>
                                <li>
                                    <a href="#" class="fb"><img src="Assets/Frontend/image/Gg.png">Google</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4>Dịch vụ khách hàng</h4>
                        <div class="footer-col-content">
                            <ul class="icon_list">
                                <li>
                                    <a href=".">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <p class="text_li">
                                            <span class="phone_footer">Hotline: 0923-032-992</span>
                                            <span class="text_small">(Từ 8h đến 20h tất cả các ngày)</span>
                                        </p>
                                    </a>
                                </li>
                                <div class="clear"></div>
                                <li><a><i class="fa fa-envelope" aria-hidden="true"></i>  3tphone@gmail.com</a></li>
                                <li><a><i class="fa fa-mouse-pointer" aria-hidden="true"></i>  https://3tphone.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="footer_top">
            <div class="bg_in">
                <div class="footer">
                    <div class="infor_company">
                        <h3>CÔNG TY THIẾT KẾ WEBSITE WEBEXTRASITE.COM</h3>
                        <a href=""><img src="Assets/Frontend/image/da-dang-ky-voi-bo-cong-thuong.png" alt="da-dang-ky-voi-bo-cong-thuong.png" class="cangiua" /></a>
                        <p class="note_mst">GPĐKKD số: 7777777. Cấp lần 1: 10/10/2015. Thay đổi: 10/10/2010. Nơi cấp: Phòng đăng ký kinh doanh Sở kế hoạch đầu tư TP Hồ Chí Minh</p>
                    </div>
                    <div class="footer-col">
                        <h4>TRỤ SỞ CHÍNH</h4>
                        <div class="infor_footer">
                            <address>
                        <address>Địa Chỉ : 151 Lý Thái Tổ, P. 9, Q. 10, TP. Hồ Chí Minh <br />
                           Điện thoại: 0923-032-992<br />
                           Email: sales@webextrasite.com
                        </address>
                            </address>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4>VĂN PHÒNG ĐẠI DIỆN</h4>
                        <div class="infor_footer">
                            <address>
                        <address>Địa Chỉ : 151 Lý Thái Tổ, P. 9, Q. 10, TP. Hồ Chí Minh <br />
                           Điện thoại: 0923-032-992<br />
                           Email: sales@webextrasite.com
                        </address>
                            </address>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="copyright">
            <h4 class="tkw9999">&copy;  © Bản quyền thuộc về Webextrasite. Designed by <a href="http://webextrasite.com/" rel="dofollow" target="_blank">Thiet Ke Web</a> Bởi <a href="http://webextrasite.com/">Webextrasite.com</a></h4>
        </div>
    </footer>
    <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon">
        <a href="tel:0923-032-992" title="Gọi ngay cho chúng tôi">
            <div class="coccoc-alo-ph-circle"></div>
            <div class="coccoc-alo-ph-circle-fill"></div>
            <div class="coccoc-alo-ph-img-circle"></div>
        </a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer type="text/javascript" src="Assets/Frontend/js/sweet-alert.js"></script>
    <script defer type="text/javascript" src="Assets/Frontend/js/bootstrap.js"></script>
    <script defer type="text/javascript" src="Assets/Frontend/js/jquery.flexslider-min.js"></script>
    <script defer src="Assets/Frontend/js/owl.carousel.min.js" type="text/javascript"></script>
    <script defer src="Assets/Frontend/js/jquery.lazyload.min.js" type="text/javascript"></script>
    <script defer type="text/javascript" src="Assets/Frontend/js/script_ex.js"></script>
    <script defer type="text/javascript" src="Assets/Frontend/js/script_menu.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="template/Default/js/sweet-alert.css"/> -->
    <link rel="stylesheet" href="Assets/Frontend/css/font-awesome.min.css" type="text/css" />
    <<!-- link rel="stylesheet" href="template/Default/css/responsive.css" type="text/css" /> -->
    <link async rel="stylesheet" href="Assets/Frontend/css/cssfooter.css" />
    <div style="height: 1840px;position: fixed;width: 100%;top: 0px;left: 0px;right: 0px;bottom: 0px;z-index: 1001;background: #000 none repeat scroll 0% 0%;opacity: 0.3;display: none;text-align:center" id="khungnen"></div>
    <div style="display: none;left: 70%;margin-left: -309px;z-index: 1002;position: fixed;top: 40%;margin-top: 0px;" id="loadding">
        <img src="Assets/Frontend/image/loader.gif" />
    </div>

    <link async rel="stylesheet" href="css/cssfooter.css"/>
     
      
      
      
      <script defer src="Assets/Frontend/js/owl.carousel.js" type="text/javascript"></script>
      
      
     
      <!-- <link rel="stylesheet" type="text/css" href="template/Default/js/sweet-alert.css"/> -->
    <script type="text/javascript">
      $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 5; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
          items : 1,
          slideSpeed : 2000,
          nav: false,
          autoplay: true,
          dots: false,
          loop: true,
          responsiveRefreshRate : 200,
          navText: ['<svg width="10%" height="10%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 2px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
          '<svg width="3%" height="3%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 2px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
        }).on('changed.owl.carousel', syncPosition);

        sync2
          .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
          })
          .owlCarousel({
          items : slidesPerPage,
          dots: false,
          nav: false,
          smartSpeed: 200,
          slideSpeed : 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate : 100
        }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
          //if you set loop to false, you have to restore this next line
          //var current = el.item.index;
          
          //if you disable loop you have to comment this block
          var count = el.item.count-1;
          var current = Math.round(el.item.index - (el.item.count/2) - .5);
          
          if(current < 0) {
            current = count;
          }
          if(current > count) {
            current = 0;
          }
          
          //end block

          sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
          var onscreen = sync2.find('.owl-item.active').length - 1;
          var start = sync2.find('.owl-item.active').first().index();
          var end = sync2.find('.owl-item.active').last().index();
          https://thietbivanphong123.com/data/upload/ST8000VN004.jpg
          if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
          }
          if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
          }
        }
        
        function syncPosition2(el) {
          if(syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
          }
        }
        
        sync2.on("click", ".owl-item", function(e){
          e.preventDefault();
          var number = $(this).index();
          sync1.data('owl.carousel').to(number, 300, true);
        });
      });
  </script> 
</body>

</html>