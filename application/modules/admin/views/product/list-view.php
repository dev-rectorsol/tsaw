<div class="container-fluid" ng-app="distributor">
  <div class="row">
    <div class="col-12 mt-4">

      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
            <h4 class="card-title">Products List</h4>
            <div class="ml-auto">
              <!-- Add Button Here -->
              <a href="<?php echo base_url('admin/product/add'); ?>"> <button type="button" class="btn btn-success btn-circle"  data-placement="bottom" title="Add New Sale"><i class="fa fa-plus"></i> </button></a>
              <button type="button" class="btn btn-primary btn-circle" data-placement="bottom" title="Print List of Sale"><i class="fa fa-print"></i> </button>
              <button type="button" class="btn btn-primary btn-circle" data-placement="bottom" title="Export Data in Excel"><i class="fa fa-table"></i> </button>

            </div>
          </div>
          <div class="table-responsive">
            <table id="distributorlist" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr class="border-0">
                  <th class="border-0 font-14 font-weight-medium text-muted">Image
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted px-2">Name
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted px-2">Code
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted">Price</th>
                  <th class="border-0 font-14 font-weight-medium text-muted text-center">
                    Discount
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted text-center">
                    Joindate
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted text-center">
                    Action
                  </th>

                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
