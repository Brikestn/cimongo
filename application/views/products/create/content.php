<section class="shop_grid_area section-padding-80">
        <div class="container">
        <h3>Create Product</h3><hr>
        <form action="<?php echo base_url('products/save');?>" method="post">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Product Name</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" placeholder="Product Name" name ="product_name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Price</label><span class="text-danger">*</span>
                        <input type="number" class="form-control" placeholder="Product Price" min="0" name="priceEach" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Categories</label><span class="text-danger">*</span>
                        <select class="form-control" name="categories_id" required>
                        <option>Select Categories</option>
                        <?php foreach($categories as $key => $value){?>
                                <option value="<?php echo $value['_id']?>"><?php echo $value['categories_name']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                </div>
            </div>
            <p class="text-center"><button type="submit" class="btn btn-success"><i class="far fa-save"></i> Save</button></p>
        </div>
        </div>
        </form>
        </div>
</section>
    