<?php 
	$this->fileLayout = "Views/Frontend/Layout_trangtrong.php";
?> 
      <section>
         <div class="bg_in">
            <div class="content_page cart_page">
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
                        Giỏ hàng
                        </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                     </li>
                  </ol>
               </div>
               <div class="box-title">
                  <div class="title-bar">
                     <h1>Giỏ hàng của bạn</h1>
                  </div>
               </div>
               <h1 style="color: red;">
                  <?php 
                     if(isset($_SESSION['pay'])) {
                        echo $_SESSION['pay'];
                        unset($_SESSION['pay']);
                     }
                  ?>
               </h1>
               <div class="content_text">
               <form action='index.php?controller=Cart&action=update' method="post">
                  <div class="container_table">
                     <table class="table table-hover table-condensed">
                        <thead>
                           <tr class="tr tr_first">
                              <th >Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                              <th >Giá</th>
                              <th style="width:100px;">Số lượng</th>
                              <th>Thành tiền</th>
                              <th style="width:50px; text-align:center;"></th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php if($this->cartNumber() == 0): ?>
                              <tr class="alert alert-info">
                                 <td colspan="7" style="padding:40px 0px" >Không có hàng trong giỏ hàng</td>
                              </tr>
                        <?php endif; ?>
                           <?php foreach($_SESSION['cart'] as $product_cart): ?>
                         
                           
                              <tr class="tr">
                                 <td data-th="Hình ảnh">
                                    <div class="col_table_image col_table_hidden-xs"><img src="Assets/Backend/uploads/<?php echo $product_cart['img'] ?>"  class="img-responsive"/></div>
                                 </td>
                                 <td data-th="Sản phẩm">
                                    <div class="col_table_name">
                                       <h4 class="nomargin"><?php echo $product_cart['name'] ?></h4>
                                    </div>
                                 </td>
                                
                                 <td data-th="Giá"><span class="color_red font_money"><?php echo number_format($product_cart['price'],0,'.','.').' đ' ?></span></td>
                                 <td data-th="Số lượng">
                                    <div class="clear margintop5">
                                       <div class="floatleft"><input type="number" class="inputsoluong" name="product_<?php echo $product_cart['id'] ?>"  value="<?php echo $product_cart['number']  ?>" min ="1" require></div>
                                      
                                       
                                    </div>
                                    <div class="clear"></div>
                                 </td>
                                 <td data-th="Thành tiền" class="text_center"><span class="color_red font_money"><?php echo number_format($product_cart['price'] * $product_cart['number'],0,'.','.').' đ' ?></span></td>
                                 <td class="actions aligncenter" data-th="">
                                     
                                   <a href="index.php?controller=cart&action=delete&id=<?php echo $product_cart['id']; ?>" onclick="return window.confirm('Bạn có muốn xóa?');" data-id="2479395"><i class="fa fa-trash" style="font-size:20px"></i></a>                        
                                 </td>
                              </tr>
                              
                           <?php endforeach; ?>

                           

                           <?php if($this->cartNumber() > 0): ?>
                           
                           <tr>
                              
                              <td colspan="5" >
                                 <a href="index.php?controller=Cart&action=allDelete" class="btn btn-primary" style="box-shadow:none;color:white;margin-left: 920px;" >Xóa toàn bộ</a> 
                              </td>
                              <td>
                                 <input type="submit" class="btn btn-primary" style="box-shadow:none;" value="Cập nhập">
                              </td>
                           </tr>
                           <tr>
                              
                              <td colspan="7" class="textright_text">
                                 <div class="sum_price_all">
                                    <span class="text_price">Tổng tiền thành toán</span>: 
                                    <span class="text_price color_red"><?php echo number_format($this->cartTotal(),0,'.','.').' đ' ?></span>
                                 </div>
                              </td>
                           </tr>
                           <tr>                             
                              <td colspan="7" >
                                 <a href="index.php?controller=Cart&action=in" class="btn btn-primary" style="box-shadow:none;color:white;margin-left: 920px;width:150px" >Thanh toán</a> 
                              </td>           
                           </tr>
                           <?php endif; ?>
                        </tbody>
                        <tfoot>
                        
                           <tr class="tr_last">
                              <td colspan="7">
                                 <a href="." class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua hàng</a>
                                 <div class="clear"></div>
                              </td>
                           </tr>
                           
                        </tfoot>
                     </table>
                  </div>
               </form>   
                  
               </div>
            </div>
         </div>
      </section>
      <!---End bg_in----->      
      <script type="text/javascript">
         function del(id, name)
         
         {
         
            var id_del = id;
         
            var name_del = name;
         
            swal({   
         
               title: "Bạn có muốn xóa sản phẩm "+name_del+" ?",
         
               type: "warning",   
         
               showCancelButton: true,   
         
               confirmButtonColor: "#DD6B55",   
         
               confirmButtonText: "YES!",   
         
               closeOnConfirm: false },
         
               function(){   
         
                  window.location="gio-hang/0-"+id_del+"/";
         
               });
         
         }
         
         function checkIt(e) {
         
            // cho phep nhap so, nut backspace, delete vau dau .
         
            var keynum;
         
            if(window.event) // IE
         
            {
         
              keynum = e.keyCode;
         
            }
         
            else if(e.which) // Netscape/Firefox/Opera
         
            {
         
              keynum = e.which;
         
            }
         
            if ( ((keynum > 45) && (keynum <58)) || (keynum == 8) || (keynum == 9) || (keynum == 190) || (keynum == 39)|| (keynum == 37)  || (keynum >= 96 && keynum <= 105)) return true;
         
            else return false;
         
            
         
            // 37 : left ; 39: right
         
         }
         
         function KiemTraEmail()
         
         {
         
            var x = document.FormDatHang;
         
            var n = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
         
            var xx=x.txtEmail.value;
         
            if(!xx.match(n))
         
            {
         
               swal({
         
                  title: "Email không hợp lệ",
         
                  type: "error",
         
                  showCancelButton: false,
         
                  confirmButtonColor: '#F19F00',
         
                  confirmButtonText: 'OK',
         
               },
         
               function(isConfirm){
         
                  if (isConfirm){
         
                     x.txtEmail.focus();
         
                     jQuery("#sub").attr("type", "button");
         
                     return false;
         
                  }
         
               });
         
            }else{
         
               jQuery("#sub").attr("type", "submit");
         
               return true;
         
            }
         
         }
         
</script>                
      <script>
         function checkIt(evt) {
         
         evt = (evt) ? evt : window.event;
         
         var charCode = (evt.which) ? evt.which : evt.keyCode;
         
         if (charCode > 31 && (charCode < 48 || charCode > 57)) {
         
             alert("Số điện thoại phải là các con số.");
         
             return false;
         
         }
         
         return true;
         
         }
         
         function isWhiteSpace(argWhiteSpace) {
         
         argWs = argWhiteSpace.toString()
         
         for (var intI=0; intI < argWs.length; intI++)
         
             if (argWs.charAt(intI) != ' ' && argWs.charAt(intI) != '\t')
         
                 return false
         
         return true
         
         }
         
         function del(id, name)
         
         {
         
         var id_del = id;
         
         var name_del = name;
         
         swal({   
         
         title: "Bạn có muốn xóa sản phẩm "+name_del+" ?",
         
         type: "warning",   
         
         showCancelButton: true,   
         
         confirmButtonColor: "#DD6B55",   
         
         confirmButtonText: "YES!",   
         
         closeOnConfirm: false },
         
         function(){   
         
         window.location="gio-hang/0-"+id_del+"/";
         
         });
         
         }
         
      </script>
      <script>
         function KiemTra()
         
         {
         
             var x = document.FormDatHang;
         
             var y= isWhiteSpace(x.txtHoTen.value);
         
             var dc = isWhiteSpace(x.txtDiaChi.value);
         
             if(y==true ||x.txtHoTen.value =="")
         
             {
         
                 alert("Họ tên không được để trống!");
         
                 x.txtHoTen.focus();
         
                 x.txtHoTen.value ='';
         
                 return false;
         
             }
         
             if(dc==true || x.txtDiaChi.value.length =="")
         
             {
         
                 alert("Địa chỉ không được để trống!");
         
                 x.txtDiaChi.focus();
         
                 x.txtDiaChi.value='';
         
                 return false;
         
             }
         
             if(x.txtDienThoai.value.length < 8 || x.txtDienThoai.value.length > 11)
         
             {
         
                 alert("Điện thoại > 7 và < 12 ký tự!");
         
                 x.txtDienThoai.focus();
         
                 return false;
         
             }
         
             var n = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
         
             var xx=x.txtEmail.value;
         
             if(!xx.match(n))
         
             {
         
                     window.alert("Email không hợp lệ");
         
                     x.txtEmail.focus();
         
                     return false;
         
         
         
             }
         
            
         
         }
         
      </script>
      <script>
         function muahang(doc){
         
            $.post('./gio-hang/',$(doc).serialize(),function(data){
         
               alert(data);
         
               location.reload();
         
            })
         
            return false;
         
         }
         
      </script>