<div class="container-fluid">
  <div class="row">
    <div class="col-12 mt-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
            <h4 class="card-title">Distributor's Joining</h4>
            <div class="ml-auto">
              <!-- Add Button Here -->
              <a href="<?php echo base_url('admin/distributor'); ?>"> <button type="button" class="btn btn-secondary btn-circle"  data-placement="bottom" title="List of Sales"><i class="fa fa-table"></i> </button></a>
            </div>
          </div>
          <form name="distributorjoining" action="<?php echo base_url('admin/distributor/save') ?>" method="post">
            <div class="form-body">
              <div class="">
                <h4>Distributor Information </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <small class="badge badge-primary badge-info form-text text-white float-right">First Name</small>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="jason">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <small class="badge badge-primary badge-info form-text text-white float-right">Last Name</small>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="dou">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="+91 - 88888 05000">
                    <small class="badge badge-danger badge-info form-text text-white float-right" >Contact Number</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="date" class="form-control" name="joindate" id="joindate" placeholder="Joining date">
                    <small class="badge badge-default badge-info form-text text-white float-right">Joining Date</small>
                  </div>
                </div>
              </div>
              <div class="">
                <h4>Address Information </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <small class="badge badge-default badge-info form-text text-white float-right">Enter Full Address</small>
                    <input type="text" class="form-control" name="address" id="address" placeholder="where are you from ?" >
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <select id="states" class="form-control" name="states" required>
                      <option selected="">Distributor States</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <select id="cities" class="form-control" name="city" required>
                      <option selected="">Distributor City</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="number" class="form-control" name="pincode" id="pincode" placeholder="pin code">
                  </div>
                </div>
              </div>
              <div class="">
                <h4> Basic Information </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="remark" class="form-control" rows="3" placeholder="Customer Remark"></textarea>
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
