<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- row -->
    <?php if (!empty($contacts)): ?>
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                      <div class="col-lg-6 mb-4">
                        <h4 class="card-title">Application Contact Info
                        </h4>
                        <h5 class="card-subtitle mb-4 text-muted">address, emails, contact information from application.</h5>
                      </div>
                      <div class="col-lg-6 mb-4 text-right">
                        <button type="button" class="btn btn-success btn-circle" data-toggle="modal"
                        data-target="#addcontact" data-toggle="tooltip" data-placement="bottom" title="Add slider"><i class="fa fa-plus"></i> </button>
                      </div>
                        <div class="col-lg-12 ">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($contacts as $key => $value): ?>
                                          <tr>
                                            <th scope="row"><?php echo get_increment($temp); ?></th>
                                            <td><?php echo ucfirst($key); ?></td>
                                            <td>
                                                <?php echo $value ?>
                                            </td>
                                            <td>
                                              <button type="button" onclick="edit_detail('<?php echo $key; ?>', '<?php echo $value;  ?>')" class="btn btn-success btn-circle" data-toggle="modal"
                                              data-target="#editcontact" data-toggle="tooltip" data-placement="bottom" title="Edit Matel Price"><i class="ti-pencil"></i> </button>                                            </td>
                                          </tr>
                                        <?php endforeach; ?>
                                      </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                          <h4 class="card-title">Application Contact Info</h4>
                          <h5 class="card-subtitle mb-4 text-muted">address, emails, contact information from application.</h5>
                          <p>

                          </p>
                        </div>
                        <div class="col-lg-6">
                          <div class="col-lg-12 mb-4 text-right">
                            <button type="button" class="btn btn-success btn-circle" data-toggle="modal"
                            data-target="#centermodal" data-toggle="tooltip" data-placement="bottom" title="Add slider"><i class="fa fa-plus"></i> </button>
                          </div>
                        </div>
                        <div class="col-lg-12 p-4 text-center">
                            <h4>No any contact information found.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- End row -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <div class="modal fade" id="addcontact" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myCenterModalLabel">Add Metal Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">

              <form class="pl-3 pr-3" action="<?php echo base_url('admin/setting/update_price') ?>" method="post">

                  <div class="form-group">
                      <label for="username">Title</label>
                      <input class="form-control" type="text" name="setting_name" required="" placeholder="e.g.(silver, gold, copper. etc)">
                  </div>

                  <div class="form-group">
                      <label for="emailaddress">Value</label>
                      <input class="form-control" type="text" name="setting_value" required="" placeholder="e.g.(1000, 400000, etc)">
                  </div>

                  <div class="form-group text-center">
                      <button class="btn btn-primary" type="submit">Save</button>
                  </div>

              </form>

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="editcontact" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myCenterModalLabel">Add Metal Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">

              <form class="pl-3 pr-3" action="<?php echo base_url('admin/setting/update_price') ?>" method="post">

                  <div class="form-group">
                      <label for="username">Title</label>
                      <input class="form-control" type="text" name="setting_name" id="setting_name" required="" placeholder="e.g.(silver, gold, copper. etc)">
                      <input class="form-control" type="hidden" name="name_title" id="name_title" required="" placeholder="e.g.(email, phone. etc)">
                  </div>

                  <div class="form-group">
                      <label for="emailaddress">Value</label>
                      <input class="form-control" type="text" name="setting_value" id="setting_value" required="" placeholder="e.g.(1000, 400000, etc)">
                  </div>

                  <div class="form-group text-center">
                      <button class="btn btn-primary" type="submit">Save</button>
                  </div>

              </form>

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<script type="text/javascript">

function edit_detail(key, value) {
  $('#setting_name').val(key).attr('type', 'hidden');
  $('#name_title').val(key).attr('type', 'text').attr('disabled', 'disabled');
  $('#setting_value').val(value);
}
</script>
