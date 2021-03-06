<div class="container-fluid">
  <div class="row">
    <div class="col-12 mt-4">

      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
            <h4 class="card-title">Point of Sales</h4>
            <div class="ml-auto">
              <!-- Add Button Here -->
              <a href="<?php echo base_url('admin/pos/add'); ?>"> <button type="button" class="btn btn-success btn-circle"  data-placement="bottom" title="Add New Sale"><i class="fa fa-plus"></i> </button></a>
              <button type="button" class="btn btn-primary btn-circle" data-placement="bottom" title="Print List of Sale"><i class="fa fa-print"></i> </button>
              <button type="button" class="btn btn-primary btn-circle" data-placement="bottom" title="Export Data in Excel"><i class="fa fa-table"></i> </button>

            </div>
          </div>
          <div class="table-responsive">
            <table id="DataTable" class="table table-striped table-bordered no-wrap">
              <thead>
                <tr class="border-0">
                  <th class="border-0 font-14 font-weight-medium text-muted">Basic info
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted px-2">Email
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted">Address</th>
                  <th class="border-0 font-14 font-weight-medium text-muted text-center">
                    Status
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted text-center">
                    Date
                  </th>
                  <th class="border-0 font-14 font-weight-medium text-muted">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-top-0 px-2 py-4">
                    <div class="d-flex no-block align-items-center">
                      <div class="mr-3"><img src="http://localhost/chahat-api/optimum/assets/images/default-user.png" alt="user" class="rounded-circle" width="45" height="45"></div>
                      <div class="">
                        <h5 class="text-dark mb-0 font-16 font-weight-medium">Dnna Joli</h5>
                        <span class="text-muted font-14"></span>
                      </div>
                    </div>
                  </td>
                  <td class="border-top-0 text-muted px-2 py-4 font-14">dnna@gmail.com</td>
                  <td class="border-top-0 px-2 py-4">
                  </td>
                  <td class="border-top-0 text-center px-2 py-4">
                    <i class="fa fa-circle text-success font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Active"></i>
                  </td>
                  <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                    08 Jun 2020 </td>
                  <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                    <a class="btn btn-success text-white rounded-circle btn-circle font-20" href="javascript:void(0)">+</a>
                    <a class="btn btn-secondary text-white rounded-circle btn-circle font-20" href="javascript:void(0)"><i class="ti-trash"></i> </a>
                  </td>
                </tr>
                <tr>
                  <td class="border-top-0 px-2 py-4">
                    <div class="d-flex no-block align-items-center">
                      <div class="mr-3"><img src="http://localhost/chahat-api/optimum/assets/images/default-user.png" alt="user" class="rounded-circle" width="45" height="45"></div>
                      <div class="">
                        <h5 class="text-dark mb-0 font-16 font-weight-medium">Cnna Joli</h5>
                        <span class="text-muted font-14"></span>
                      </div>
                    </div>
                  </td>
                  <td class="border-top-0 text-muted px-2 py-4 font-14">cnna@gmail.com</td>
                  <td class="border-top-0 px-2 py-4">
                  </td>
                  <td class="border-top-0 text-center px-2 py-4">
                    <i class="fa fa-circle text-success font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Active"></i>
                  </td>
                  <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                    08 Jun 2020 </td>
                  <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                    <a class="btn btn-success text-white rounded-circle btn-circle font-20" href="javascript:void(0)">+</a>
                    <a class="btn btn-secondary text-white rounded-circle btn-circle font-20" href="javascript:void(0)"><i class="ti-trash"></i> </a>
                  </td>
                </tr>
                <tr>
                  <td class="border-top-0 px-2 py-4">
                    <div class="d-flex no-block align-items-center">
                      <div class="mr-3"><img src="http://localhost/chahat-api/optimum/assets/images/default-user.png" alt="user" class="rounded-circle" width="45" height="45"></div>
                      <div class="">
                        <h5 class="text-dark mb-0 font-16 font-weight-medium">Bnna Joli</h5>
                        <span class="text-muted font-14"></span>
                      </div>
                    </div>
                  </td>
                  <td class="border-top-0 text-muted px-2 py-4 font-14">bnna@gmail.com</td>
                  <td class="border-top-0 px-2 py-4">
                  </td>
                  <td class="border-top-0 text-center px-2 py-4">
                    <i class="fa fa-circle text-success font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Active"></i>
                  </td>
                  <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                    08 Jun 2020 </td>
                  <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                    <a class="btn btn-success text-white rounded-circle btn-circle font-20" href="javascript:void(0)">+</a>
                    <a class="btn btn-secondary text-white rounded-circle btn-circle font-20" href="javascript:void(0)"><i class="ti-trash"></i> </a>
                  </td>
                </tr>
                <tr>
                  <td class="border-top-0 px-2 py-4">
                    <div class="d-flex no-block align-items-center">
                      <div class="mr-3"><img src="http://localhost/chahat-api/optimum/assets/images/default-user.png" alt="user" class="rounded-circle" width="45" height="45"></div>
                      <div class="">
                        <h5 class="text-dark mb-0 font-16 font-weight-medium">Anna Joli</h5>
                        <span class="text-muted font-14"></span>
                      </div>
                    </div>
                  </td>
                  <td class="border-top-0 text-muted px-2 py-4 font-14">anna@gmail.com</td>
                  <td class="border-top-0 px-2 py-4">
                  </td>
                  <td class="border-top-0 text-center px-2 py-4">
                    <i class="fa fa-circle text-success font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Active"></i>
                  </td>
                  <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                    08 Jun 2020 </td>
                  <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                    <a class="btn btn-success text-white rounded-circle btn-circle font-20" href="javascript:void(0)">+</a>
                    <a class="btn btn-secondary text-white rounded-circle btn-circle font-20" href="javascript:void(0)"><i class="ti-trash"></i> </a>
                  </td>
                </tr>
                <tr>
                  <td class="border-top-0 px-2 py-4">
                    <div class="d-flex no-block align-items-center">
                      <div class="mr-3"><img src="http://localhost/chahat-api/optimum/assets/images/default-user.png" alt="user" class="rounded-circle" width="45" height="45"></div>
                      <div class="">
                        <h5 class="text-dark mb-0 font-16 font-weight-medium">Kali</h5>
                        <span class="text-muted font-14">7905004391</span>
                      </div>
                    </div>
                  </td>
                  <td class="border-top-0 text-muted px-2 py-4 font-14">omie@gmail.com</td>
                  <td class="border-top-0 px-2 py-4">
                  </td>
                  <td class="border-top-0 text-center px-2 py-4">
                    <i class="fa fa-circle text-success font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Active"></i>
                  </td>
                  <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                    13 Mar 2020 </td>
                  <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                    <a class="btn btn-success text-white rounded-circle btn-circle font-20" href="javascript:void(0)">+</a>
                    <a class="btn btn-secondary text-white rounded-circle btn-circle font-20" href="javascript:void(0)"><i class="ti-trash"></i> </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
