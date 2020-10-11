<div class="container-fluid">
  <div class="row">
    <div class="col-12 mt-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
            <h4 class="card-title">Point of Sales</h4>
            <div class="ml-auto">
              <!-- Add Button Here -->
              <a href="<?php echo base_url('admin/pos/add'); ?>"> <button type="button" class="btn btn-secondary btn-circle"  data-placement="bottom" title="List of Sales"><i class="fa fa-table"></i> </button></a>
            </div>
          </div>
          <form id="pointofsale" action="<?php echo base_url('admin/pos/submit'); ?>" method="post">
            <div class="form-body">
              <div class="">
                <h4>POS Information </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="number" class="form-control" name="saleprice" placeholder="Sale Amount" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="number" class="form-control" name="due" placeholder="Due Amount">
                    <small class="badge badge-danger badge-info form-text text-white float-right">Due amount of selling</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="date" class="form-control" name="saledate" placeholder="selling date">
                    <small class="badge badge-default badge-info form-text text-white float-right">product selling date</small>
                  </div>
                </div>
              </div>
              <div class="">
                <h4>Associate Inforamtion </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <select  id="selectAssociate" name="associates" class="form-control" required>
                      <option selected="">Associate Name</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <input type="number" class="form-control" name="loyalty"  placeholder="Associates Commission In %">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="text" readonly class="form-control" name="commission" placeholder="0.00">
                    <small class="badge badge-secondary badge-info form-text text-white float-right">commission amount</small>
                  </div>
                </div>
              </div>
              <div class="">
                <h4>Project Site Information </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="sitename" placeholder="project site Name" required>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <input type="number" class="form-control" name="price" placeholder="project site price">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <input type="text" class="form-control" name="area" placeholder="site area e.g. 1200" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <select class="form-control" name="unit" required>
                      <option value="">select unit...</option>
                      <option value="sq ft" selected>sq ft</option>
                      <option value="sq in">sq in</option>
                      <option value="sq nmi">sq nmi</option>
                      <option value="sq mi">sq mi</option>
                      <option value="ha">ha</option>
                      <option value="acre">acre</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="">
                <h4>Customer Information </h4>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="customer_name" placeholder="Full Name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number e.g. 00000 00000" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email e.g. customer@email.com">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Customer full address">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="postcode" placeholder="Post Code e.g. 233001">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select id="customercity" class="form-control" name="city" required>
                      <option selected="">Customer City</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="bio" class="form-control" rows="3" placeholder="Customer Remark"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="text-right">
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
<script type="text/javascript">
  $(document).ready(function(){
      $("#pointofsale").validate({
        rules: {
          associates : {
            required: true,
          },
          loyalty : {
            required: true,
          },
          saleprice: {
            required: true,
            number: true,
          },
          weight: {
            required: {
              depends: function(elem) {
                return $("#age").val() > 50
              }
            },
            number: true,
            min: 0
          }
        },
        messages :{
          loyalty : {
              required : 'Enter associates commission in percentage (%)'
          },
          associates : {
              required : 'Select associates name'
          },
          saleprice : {
            required : 'Enter sale amount',
            number : 'Enter valide sale amount'
          }
        },
        submitHandler: function(form) {
          // do other things for a valid form
          form.submit();
        }

    });

  });

</script>
