<div class="col-12 mt-4">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center mb-4">
        <h4 class="card-title">New Distributor List</h4>
        <div class="ml-auto">
          <!-- Add Button Here -->
          <button type="button" class="btn btn-danger btn-circle" data-placement="bottom" title="Show All Pending Distributors"><i class="fa fa-clock"></i> </button>
          <button type="button" class="btn btn-success btn-circle" data-placement="bottom" title="Show All Distributors"><i class="fa fa-table"></i> </button>

        </div>
      </div>
      <div class="table-responsive">
        <table id="distributorlist" class="table table-striped table-bordered no-wrap">
          <thead>
            <tr class="border-0">
              <th class="border-0 font-14 font-weight-medium text-muted">Name
              </th>
              <th class="border-0 font-14 font-weight-medium text-muted px-2">Phone
              </th>
              <th class="border-0 font-14 font-weight-medium text-muted">City</th>
              <th class="border-0 font-14 font-weight-medium text-muted">KYC</th>
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

<script type="text/javascript">

    $('#distributorlist').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            url: "<?php echo base_url('admin/distributor/new_distributor') ?>",
            type: "GET"
        },
        "columnDefs": [{
            "targets": [3, 5],
            "orderable": false,
        }, ],
        "pageLength": 10
    });

</script>
