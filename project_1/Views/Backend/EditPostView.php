<?php 
	$this->fileLayout = "Views/Backend/layout1.php";
 ?> 
                     <div class="col-md-12">  
                        <div class="panel panel-primary">
                            <div class="panel-heading">Add post</div>
                            <div class="panel-body">
                            <form method="post"  action="<?php echo $formAction ?>" enctype="multipart/form-data">
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Name</div>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php echo $result->name ?>" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Img</div>
                                    <div class="col-md-10">
                                        <input type="file" value="" name="img" class="form-control" >
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Content</div>
                                    <div class="col-md-10">
                                        <textarea name="content" id="editor1">
                                        <?php echo $result->content ?>
                                        </textarea>
                                        <script>    CKEDITOR.replace( 'editor1' );</script>
                                    </div>
                                </div>
                                <!-- end rows -->
                               
                               
                                
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="submit" value="Process" class="btn btn-primary">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>