<?php 
	$this->fileLayout = "Views/Backend/layout1.php";
?>
<?php 
	$this->fileLayout = "Views/Backend/layout1.php";
 ?> 
                    <div class="col-md-12">  
                        <div class="panel panel-primary">
                            <div class="panel-heading">Edit category</div>
                            <div class="panel-body">
                            <form method="post" action="<?php echo $formAction ?>">
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Name</div>
                                    
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" value="<?php echo $result->name; ?>" required>
                                    </div>
                                   
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="submit" name="edit-submit" value="Add" class="btn btn-primary">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>