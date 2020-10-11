<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                          <h4 class="card-title">Application slider</h4>
                          <h5 class="card-subtitle mb-4 text-muted">create, update, delete slider image from application.</h5>
                            <div id="carouselExampleIndicators2" class="carousel slide"
                                data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <?php for($i = 0; $i < count($slider); $i++):?>
                                    <?php if ($i < 1): ?>
                                      <li data-target="#carouselExampleIndicators2" data-slide-to="0"
                                      class="active"></li>
                                      <?php else: ?>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="<?php echo $i;; ?>"></li>
                                    <?php endif; ?>
                                  <?php endfor; ?>
                                </ol>
                                <div class="carousel-inner" role="listbox" id="listbox">
                                  <?php foreach ($slider as $key => $value):?>
                                      <div class="carousel-item">
                                        <img class="img-fluid" src="<?php echo base_url($value['source']); ?>"
                                        alt="<?php echo $key; ?> slide">
                                      </div>
                                  <?php endforeach; ?>

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators2"
                                    role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators2"
                                    role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="col-lg-12 mb-4 text-right">
                            <button type="button" class="btn btn-success btn-circle" data-toggle="modal"
                            data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="Add slider"><i class="fa fa-plus"></i> </button>
                          </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($slider as $key => $value): ?>
                                        <tr>
                                          <th scope="row"><?php echo get_increment($temp); ?></th>
                                          <td>
                                            <div class="card">
                                              <img class="card-img-top img-fluid" src="<?php echo base_url($value['source']); ?>"
                                              alt="<?php echo $key; ?> slide"></td>
                                            </div>
                                          <td>
                                            <button type="button" onclick="delete_detail('<?php echo $key; ?>')" class="btn btn-secondary btn-circle"><i class="ti-trash"></i></button>
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
    </div>
    <!-- End row -->

    <!-- Add slider modal content -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add New Image</h4>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                  <form id="addSliderImage" class="dropzone" method="POST" enctype="multipart/form-data">
                    <div class="fallback">
                      <input name="file" type="file" multiple />
                    </div>
                  </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
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
