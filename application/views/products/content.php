<section class="shop_grid_area section-padding-80">
        <div class="container">
        <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success" role="alert">
            Save Successful
        </div>
        <?php } ?>
            <form method="get">
                <div class="row">
                <div class="col-2">
                        <a href="<?php echo base_url('products/create')?>"  class="btn btn-primary"><i class="far fa-plus-square"></i> Create product</a>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <input type="text" name="namesearch" class="form-control" placeholder="Search by product name" value="<?php echo $namesearch;?>">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <select class="form-control" name="catesearch" id="exampleFormControlSelect1">
                            <option value="">Select Categories</option>
                            <?php foreach($categories as $key => $value){?>
                                <option value="<?php echo $value['_id']?>" <?php echo ($catesearch == $value['_id'])?'selected':''; ?>><?php echo $value['categories_name']?></option>
                            <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="submit" name="search" class="btn btn-primary" value="search"><i class="fas fa-search"></i> Search</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Categories</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($products as $key => $value){?>
                        <tr>
                        <th scope="row"><?php echo ($key+1)?></th>
                        <td><?php echo $value['product_name']?></td>
                        <td><?php echo $value['priceEach']?></td>
                        <td><?php echo getCategoriesNameFromId($value['categories_id']['$oid'])?></td>
                        </tr>
                    <?php }?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
    