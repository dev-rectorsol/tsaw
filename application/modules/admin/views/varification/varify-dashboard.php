<div class="container-fluid" ng-app="distributor">
  <!-- *************************************************************** -->
  <!-- Start First Cards -->
  <!-- *************************************************************** -->
  <div class="card-group">
      <div class="card border-right">
          <div class="card-body node" data-info="retailer">
              <div class="d-flex d-lg-flex d-md-block align-items-center">
                  <div>
                      <div class="d-inline-flex align-items-center">
                          <h2 class="text-dark mb-1 font-weight-medium"><?php echo $allDistributor; ?></h2>
                          <span class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+<?php echo $newDistributor; ?> new</span>
                      </div>
                      <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">All Retail Customer</h6>
                  </div>
                  <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted"><i data-feather="user-check"></i></span>
                  </div>
              </div>
          </div>
      </div>
      <div class="card border-right">
          <div class="card-body node" data-info="distributor">
              <div class="d-flex d-lg-flex d-md-block align-items-center">
                  <div>
                      <div class="d-inline-flex align-items-center">
                          <h2 class="text-dark mb-1 font-weight-medium"><?php echo $allDistributor; ?></h2>
                          <span class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+<?php echo $newDistributor; ?> new</span>
                      </div>
                      <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">All Distributors</h6>
                  </div>
                  <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted"><i data-feather="user-check"></i></span>
                  </div>
              </div>
          </div>
      </div>
      <div class="card border-right">
          <div class="card-body node" data-info="executor">
              <div class="d-flex d-lg-flex d-md-block align-items-center">
                  <div>
                    <div class="d-inline-flex align-items-center">
                      <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup class="set-doller"></sup><?php echo number_format($allExecutor, 0); ?></h2>
                      <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"><?php echo number_format($newExecutor, 0); ?> new</span>
                    </div>
                      <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">All Executors</h6>
                  </div>
                  <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted"><i data-feather="briefcase"></i></span>
                  </div>
              </div>
          </div>
      </div>
      <div class="card border-right">
          <div class="card-body">
              <div class="d-flex d-lg-flex d-md-block align-items-center">
                  <div>
                      <div class="d-inline-flex align-items-center">
                          <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                          <span
                              class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                      </div>
                      <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Projects</h6>
                  </div>
                  <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- *************************************************************** -->
  <div class="row" id="details">
    <div class="col-12 mt-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
            <h4 class="card-title">New Retailer List</h4>
            <div class="ml-auto">
              <!-- Add Button Here -->
              <button type="button" class="btn btn-danger btn-circle" data-placement="bottom" title="Show All Pending Distributors"><i class="fa fa-clock"></i> </button>
              <button type="button" class="btn btn-success btn-circle" data-placement="bottom" title="Show All Distributors"><i class="fa fa-table"></i> </button>

            </div>
          </div>
          <div class="table-responsive">
            <table id="retailerlist" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr class="border-0">
                  <th class="border-0 font-14 font-weight-medium text-muted">Name
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted px-2">Phone
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted">City</th>
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
