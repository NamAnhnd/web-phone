<?php 
	$this->fileLayout = "Views/Backend/layout1.php";
?>
         
                    <div class="col-md-12">
                        <div style="margin-bottom:5px;">
                            <a href="index.php?area=Backend&controller=Cart&action=xacNhan&id=<?php echo $id?>" class="btn btn-primary">Xác nhận giao hàng</a>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">Chi tiết đơn hàng</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th >Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th >Giá</th>
                                        <th>Số lượng</th>
                                        
                                    </tr>
                                   
                                    <?php foreach($joinProduct as $product): ?>
                                    <?php $anh = explode(',',$product->img) ?>
                                    <tr>
                                        <td><img src="Assets/Backend/uploads/<?php echo $anh[0] ?>" style="width="100" height="100"></td>
                                        <td><?php echo $product->name ?></td>
                                        <td><?php echo $product->price ?></td>
                                        <td><?php echo $product->number ?></td>
                                    </tr>
                                    <?php endforeach; ?>    
                                </table>
                                <style type="text/css">
                                    .pagination{padding:0px; margin:0px;}
                                </style>
                                
                            </div>
                        </div>
                    </div>