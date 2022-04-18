<?php 
	$this->fileLayout = "Views/Backend/layout1.php";
?>               
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Danh sách đơn hàng</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Full name</th>
                                        <th>Email</th>
                                        <th >Phone</th>                    
                                        <th >Address</th>
                                        <th >Create</th>
                                        <th >Status</th>
                                        <th >Action</th>
                                    </tr>
                                    <?php foreach($joinCart as $cart): ?>
                                    <tr>
                                        <td><?php echo $cart->fullname; ?></td>
                                        <td><?php echo $cart->email; ?></td>
                                        <td><?php echo $cart->phone; ?></td>
                                        <td><?php echo $cart->address; ?></td>
                                        <td><?php echo $cart->create_at; ?></td>
                                        <td>
                                            <?php 
                                                if($cart->status == 0) {
                                                    echo "Chưa giao hàng";
                                                }else {
                                                    echo "Đã giao hàng";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="index.php?area=Backend&controller=Cart&action=donhang&id=<?php echo $cart->order_id ?>">Chi tiết</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </table>
                                <style type="text/css">
                                    .pagination{padding:0px; margin:0px;}
                                </style>
                               <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Trang</a></li>
                                        <?php for($i=1;$i<=$a;$i++): ?>
                                        <li class="page-item"><a class="page-link" href="index.php?area=Backend&controller=Cart&page=<?php echo $i  ?>"><?php echo $i ?></a></li>
                                        <?php endfor; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>