<?php 
	$this->fileLayout = "Views/Backend/layout1.php";
 ?> 
                     <div class="col-md-12">  
                        <div class="panel panel-primary">
                            <div class="panel-heading">Add Product</div>
                            <div class="panel-body">
                            <form method="post" enctype="multipart/form-data" action="index.php?area=Backend&controller=Product&action=doAdd">
                               
                                 <!-- rows -->
                                 <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Name</div>
                                    <div class="col-md-10">
                                        <input type="text" value="" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                 <!-- rows -->
                                 <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Image</div>
                                    <div class="col-md-10">
                                        <input type="file"  name="img[]" multiple  class="form-control" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                 <!-- rows -->
                                 <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Content</div>
                                    <div class="col-md-10">
                                        <textarea id="editor2" name="content" cols="80" rows="10">
                                           
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
                                            
                                        </textarea>
                                        <script>    CKEDITOR.replace( 'editor1' );</script>
                                        
                                    </div>
                                </div>
                                <!-- end rows -->
                                 <!-- rows -->
                                 <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Price</div>
                                    <div class="col-md-10">
                                        <input type="number" value="" name="price" class="form-control" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Category_id</div>
                                    <div class="col-md-10">
                                        <select name="category_id" class="form-control" style="width: 300px;">
                                            <?php foreach($result as $row): ?>
                                                <option value="<?php echo $row->id?>"><?php echo $row->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Product_hot</div>
                                    <div class="col-md-10">
                                        <select name="product_hot" class="form-control" style="width: 300px;">
                                            <option value="0">Không</option>
                                            <option value="1">Có</option>
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