<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
            <h4 class="card-title">Top Leaders</h4>
            <div class="ml-auto">
              <div class="dropdown sub-dropdown">
                <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="12" cy="5" r="1"></circle>
                    <circle cx="12" cy="19" r="1"></circle>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                  <a class="dropdown-item" href="#">Insert</a>
                  <a class="dropdown-item" href="#">Update</a>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table id="customerlist" class="table table-striped table-bordered no-wrap">
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
                <?php foreach ($users as $key => $value): ?>
                  <tr>
                  <td class="border-top-0 px-2 py-4">
                    <div class="d-flex no-block align-items-center">
                      <div class="mr-3"><img src="<?php echo !empty($value['image']) ? base_url($value['image']) : base_url('optimum/assets/images/default-user.png'); ?>" alt="user" class="rounded-circle" width="45" height="45"></div>
                      <div class="">
                        <h5 class="text-dark mb-0 font-16 font-weight-medium"><?php echo ucfirst($value['name']); ?></h5>
                        <span class="text-muted font-14"><?php echo $value['phone']; ?></span>
                      </div>
                    </div>
                  </td>
                  <td class="border-top-0 text-muted px-2 py-4 font-14"><?php echo $value['email']; ?></td>
                  <td class="border-top-0 px-2 py-4">
                  </td>
                  <td class="border-top-0 text-center px-2 py-4">
                    <?php if ($value['status'] == 'active'): ?>
                      <i class="fa fa-circle text-success font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Active"></i>
                      <?php else: ?>
                        <i class="fa fa-circle text-warning font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Deactive"></i>
                    <?php endif; ?>
                  </td>
                  <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                    <?php echo my_date_show($value['joindate']) ?>
                  </td>
                  <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                    <a class="btn btn-success text-white rounded-circle btn-circle font-20" href="javascript:void(0)">+</a>
                    <a class="btn btn-secondary text-white rounded-circle btn-circle font-20" href="javascript:void(0)"><i class="ti-trash"></i> </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<script type="text/javascript">
  function delete_detail(id) {
    var del = confirm("Do you want to Delete");
    if (del == true) {
      var sureDel = confirm("Are you sure want to delete");
      if (sureDel == true) {
        window.location = "<?php echo base_url()?>admin/appsetting/deleteslider/" + id;
      }

    }
  }
</script>
