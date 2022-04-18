<?php 
	$this->fileLayout = "Views/Backend/layout1.php";
 ?> 
                     <div class="col-md-12">  
                        <div class="panel panel-primary">
                            <div class="panel-heading">Edit Product</div>
                            <div class="panel-body">
                            <form method="post" enctype="multipart/form-data" action="<?php echo $formAction ?>">
                               
                                 <!-- rows -->
                                 <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Name</div>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" value="<?php echo $result->name ?>" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                 <!-- rows -->
                                 <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Image</div>
                                    <div class="col-md-10">
                                        <input type="file"  name="img[]" multiple class="form-control" >
                                        
                                    </div>
                                </div>
                                <!-- end rows -->
                                 <!-- rows -->
                                 <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Content</div>
                                    <div class="col-md-10">
                                        <textarea id="editor2" name="content" cols="80" rows="10">
                                            <?php echo $result->content ?>
                                        </textarea>
                                        <script>    CKEDITOR.replace( 'editor2' );</script>
                                    </div>
                                </div>
                                <!-- end rows -->
                                 <!-- rows -->
                                 <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Descripition</div>
                                    <div class="col-md-10">
                                        <textarea id="editor1" name="descripition" cols="80" rows="10">
                                            <?php echo $result->descripition ?>
                                        </textarea>
                                        <script>    CKEDITOR.replace( 'editor1' );</script>
                                        
                                    </div>
                                </div>
                                <!-- end rows -->
                                 <!-- rows -->
                                 <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Price</div>
                                    <div class="col-md-10">
                                        <input type="text"  name="price" class="form-control" value="<?php echo $result->price ?>" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Category_id</div>
                                    <div class="col-md-10">
                                        <select name="category_id" class="form-control" style="width: 300px;">
                                            <?php 
                                                foreach($category as $cate) { 
                                                    // if($result->category_id == $cate->id  ) {
                                            ?>
                                                <option value="<?php echo $cate->id ?>"<?php if($result->category_id == $cate->id  ) echo "selected" ?>><?php echo $cate->name ?></option>
                                               
                                            <?php  } ?>
                                        </select>
                                        
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Product_hot</div>
                                    <div class="col-md-10">
                                        <select name="product_hot" class="form-control" style="width: 300px;">
                                        <?php if(($result->product_hot) == 0): ?>
                                            <option value="0" selected>Không</option>
                                            <option value="1">Có</option>
                                        <?php else: ?>
                                            <option value="0" >Không</option>
                                            <option value="1" selected>Có</option>
                                        <?php endif?>   
                                        </select>
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