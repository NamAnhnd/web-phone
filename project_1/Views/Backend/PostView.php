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
                            <a href="<?php echo $formAction ?>" class="btn btn-primary">Add Post</a>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">List post</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>STT</th>
                                        <th>Img</th>
                                        <th style="width:300px, text-align:center">Name</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                    <?php 
                                        $i=0;
                                        foreach($result as $row) {
                                            $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>
                                            <img src="Assets/Backend/uploads/<?php echo $row->img ?>" style="width:100px">
                                        </td>
                                        <td><?php echo $row->name ?></td>
                                       
                                        <td >
                                            <a href="index.php?area=Backend&controller=Post&action=edit&id=<?php echo $row->id ?>">Edit</a>&nbsp;
                                            <a href="index.php?area=Backend&controller=Post&action=delete&id=<?php echo $row->id ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                                        <?php for($i=1;$i<=$number;$i++) :?>
                                        <li class="page-item"><a class="page-link" href="index.php?area=Backend&controller=Post&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                       
                                        <?php endfor; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- end content -->
                