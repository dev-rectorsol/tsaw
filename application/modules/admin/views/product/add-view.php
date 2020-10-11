<div class="container-fluid">
  <div class="row">
    <div class="col-12 mt-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
            <h4 class="card-title">Create Product Catalogue</h4>
            <div class="ml-auto">
              <!-- Add Button Here -->
              <a href="<?php echo base_url('admin/product'); ?>"> <button type="button" class="btn btn-secondary btn-circle"  data-placement="bottom" title="List of Sales"><i class="fa fa-table"></i> </button></a>
            </div>
          </div>
          <form name="distributorjoining" action="<?php echo base_url('admin/product/save') ?>" method="post">
            <div class="form-body">
              <div class="">
                <h4>Product Information </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <small class="badge badge-primary badge-info form-text text-white float-right">Product Name</small>
                    <input type="text" class="form-control" name="product_name" id="product_name" placeholder="DJI Mavic 2 Zoom">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="price" id="price" placeholder="price in rupee" >
                    <small class="badge badge-warning badge-info form-text text-white float-right" >Product Price</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="discount_price" id="discount_price" placeholder="discount price in less then price">
                    <small class="badge badge-danger badge-info form-text text-white float-right">Discount Price</small>
                  </div>
                </div>
              </div>
              <div class="">
                <h4> Product Image </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div id="addGalleryImage" class="dropzone">
                      <div class="fallback">
                        <input name="file" type="file" multiple />
                      </div>
                    </div>
                  </div>
                  <input type="hidden" id="product_image" name="product_image" value="">
                </div>
              </div>

              <div class="">
                <h4> Product Detail Information </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="product_details" class="form-control" rows="3" placeholder="product details"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="text-right">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                <button type="submit" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-dark">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
