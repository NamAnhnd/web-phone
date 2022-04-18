<?php 
	$this->fileLayout = "Views/Backend/layout1.php";
?>
    <h4 class="check" style="color:red">
        <?php 
            if(!empty($_SESSION['check'])) {
                echo $_SESSION['check'];
                unset($_SESSION['check']);
            }
        ?>
        
    </h4>
    
    
    
                 
                    <div class="col-md-12">
                        <div style="margin-bottom:5px;">
                            <a href="<?php echo $formAction ?>" class="btn btn-primary">Add Product</a>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">List news</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th >STT</th>
                                        <th>Hình ảnh</th>
                                        <th >Name</th>
                                        <th>Category_name</th>
                                        <th style="width:400px" >Content</th>
                                        <th >Price</th>
                                        <th >Product_hot</th>
                                        <th >Action</th>
                                    </tr>
                                    
                                    <?php  

                                        $id = 0;
                                        foreach($result as $row) {

                                            $new = explode(',',$row->img)  ;
                                            $id++;
                                    ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td>
                                            <img src="Assets/Backend/uploads/<?php echo $new[0] ?>" style="width: 100px;">
                                        </td>
                                        <td><?php echo $row->name ?></td>
                                        <?php 
                                            foreach($category as $cate) {
                                                if($row->category_id == $cate->id) {
                                        ?>
                                        <td><?php echo $cate->name ?></td>
                                        <?php } } ?>
                                        <td><?php echo $row->content ?></td>
                                        <td><?php echo number_format($row->price,0,'.','.').' đ' ?></td>
                                        <td>
                                            <?php 
                                                if( $row->product_hot == 1) {
                                                    echo "Có";
                                                }else {
                                                    echo "Không";
                                                }
                                            ?>
                                        </td>
                                        <td >
                                            <a href="index.php?area=Backend&controller=Product&action=edit&id=<?php echo $row->id ?>">Edit</a>&nbsp;
                                            <a href="index.php?area=Backend&controller=Product&action=delete&id=<?php echo $row->id ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                                <style type="text/css">
                                    .pagination{padding:0px; margin:0px;}
                                </style>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Trang</a></li>
                                        <?php for($i=1;$i<=$page;$i++) :?>
                                        <li class="page-item"><a class="page-link" href="index.php?area=Backend&controller=Product&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                       
                                        <?php endfor; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>