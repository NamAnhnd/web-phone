<?php 
	$this->fileLayout = "Views/Backend/layout1.php";
    
 ?> 
 <h4 style="color:red;">
     <?php 
        if(!empty($_SESSION['conect'])) {
            echo $_SESSION['conect'];
            unset($_SESSION['conect']);
        }
    ?>
 </h4>
                    <div class="col-md-12">
                        <div style="margin-bottom:5px;">
                            <a href="index.php?area=Backend&controller=Category&action=add" class="btn btn-primary">Add category</a>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">List cateogry</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <th style="width:100px;"></th>
                                    </tr>
                                    <?php foreach($data as $rows): ?>
                                    <tr>
                                        <td><?php echo $rows->name ?></td>
                                        <td style="text-align:center;">
                                            <a href="index.php?area=Backend&controller=Category&action=edit&id=<?php echo $rows->id?>">Edit</a>&nbsp;
                                            <a href="index.php?area=Backend&controller=Category&action=delete&id=<?php echo $rows->id?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                                <style type="text/css">
                                    .pagination{padding:0px; margin:0px;}
                                </style>
                                
                                
                                <nav >
                                    <ul class="pagination" >
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Trang</a>
                                        </li>
                                        <?php for($i = 1; $i <= $page; $i++):  ?>
                                        
                                            <li class="page-item " >
                                                <a class="page-link" href="index.php?area=Backend&controller=Category&action=index&id=<?php echo $i ?>"><?php echo $i ?> <span class="sr-only">(current)</span></a>
                                            </li>
                                        <?php endfor; ?> 
                                        </li>
                                    </ul>
                                </nav>   
                                    
                                
                            </div>
                        </div>
                    </div>
                    <!-- end content -->
                </div>