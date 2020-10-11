<div class="container-fluid">
  <div class="row">
    <?php if (!empty($kycdata)): ?>
      <div class="col-12 mt-4">

        <div class="card">
            <div class="card-body">
            <div class="d-flex align-items-center mb-4">
              <h4 class="card-title">KYC Information
                <?php if ($status->kyc == 'pending'): ?>
                    <span class="badge badge-warning"><i class="fa fa-clock"></i> Pending</span>
                  <?php elseif($status->kyc == 'varify'): ?>
                    <span class="badge badge-success"><i class="fas fa-check"></i> Varifed</span>
                  <?php else: ?>
                    <span class="badge badge-danger"><i class="fas fa-ban"></i> Danger</span>
                <?php endif; ?>
              </h4>
              <div class="ml-auto">
                <!-- Add Button Here -->
                <a href="<?php echo base_url('admin/verification/kycaction?type=').$request['type'].'&key='.$request['key'].'&action=varify'; ?>"> <button type="button" class="btn btn-success btn-circle" data-placement="bottom" title="Varify User KYC Information"><i class="fa fa-check"></i> </button></a>

                <a href="<?php echo base_url('admin/verification/kycaction?type=').$request['type'].'&key='.$request['key'].'&action=cancel'; ?>"> <button type="button" class="btn btn-danger btn-circle" data-placement="bottom" title="cancel KYC varification"><i class="fa fa-times"></i> </button></a>

              </div>
            </div>
            <div class="row">
              <div class="card w-50">
                <div class="card-body">
                  <h3 class="card-title">Personal information</h3>
                  <div class="table-responsive">
                    <table class="table table-hover table-primary">
                      <tbody>
                        <tr>
                          <th class="bg-dark text-white" scope="row" width="18%">Name</th>
                          <td><?php echo ucfirst($kycdata->first_name) . " " . ucfirst($kycdata->last_name); ?></td>
                        </tr>
                        <tr>
                          <th class="bg-dark text-white" scope="row" width="18%">Gender</th>
                          <td><?php echo ucfirst($kycdata->gender); ?></td>

                        </tr>
                        <tr>
                          <th class="bg-dark text-white" scope="row" width="18%">Phone</th>
                          <td><?php echo ucfirst($kycdata->phone); ?></td>
                        </tr>
                        <tr>
                          <th class="bg-dark text-white" scope="row" width="18%">Address</th>
                          <td><?php echo ucfirst($kycdata->address); ?></td>
                        </tr>

                        <tr>
                          <th class="bg-dark text-white" scope="row" width="18%">City</th>
                          <td><?php echo ucfirst($kycdata->city); ?></td>
                        </tr>
                        <tr>
                          <th class="bg-dark text-white" scope="row" width="18%">State</th>
                          <td><?php echo ucfirst($kycdata->states); ?></td>
                        </tr>
                        <tr>
                          <th class="bg-dark text-white" scope="row" width="18%">Pin Code</th>
                          <td><?php echo ucfirst($kycdata->pincode); ?></td>
                        </tr>
                        <tr>
                          <th class="bg-dark text-white" scope="row" width="18%">Adhar</th>
                          <td><?php echo ucfirst($kycdata->adharcard); ?></td>
                        </tr>
                        <tr>
                          <th class="bg-dark text-white" scope="row" width="18%">PAN</th>
                          <td><?php echo $kycdata->pancard; ?></td>
                        </tr>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card w-50">
                <div class="card-body">
                  <h3 class="card-title">Bank Details</h3>
                  <div class="col-12">
                    <?php foreach ($banks as $value): ?>
                      <div class="card text-white bg-primary">
                      <div class="card-header">
                          <h4 class="mb-0 text-white"><i class="fa fa-university" aria-hidden="true"></i> <?php echo $value['bankname']; ?> </h4>
                          <p class="mb-0 text-white"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $value['branch']; ?> </p>
                      </div>
                      <div class="card-body">
                          <h3 class="card-title text-white"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $value['a_holder_name'] ?></h3>
                          <p class="card-text"><i class="fa fa-id-card" aria-hidden="true"></i> <?php echo $value['ac_number'] ?></p>

                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center mb-4">
              <h4 class="card-title">Image/PDF Documents List</h4>
            </div>
            <div class="row">
              <div class="card w-100">
                <div class="chocolat-parent">
                  <?php foreach ($documents as $single):
                    $file = json_decode($single['details']);
                    ?>
                    <?php if (in_array($file->extension, IMAGE_EXT)): ?>
                      <a class="chocolat-image" href="<?php echo base_url($file->dirname."/".$file->basename); ?>" title="caption image 1">
                        <img src="<?php echo base_url($file->dirname."/".$file->basename); ?>" />
                      </a>
                  <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <ul>
                  <?php foreach ($documents as $single):
                    $file = json_decode($single['details']);
                    ?>
                    <?php if(in_array($file->extension, DOC_EXT)): ?>
                      <li>
                        <a href="<?php echo base_url($file->dirname."/".$file->basename); ?>" title="caption image 1">View <?php echo ucfirst($single['type']); ?> Document <small> [PDF] </small> </a>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php else: ?>
        <img style="margin: auto;" src="<?php echo base_url('optimum/assets/images/data-not-found.svg') ?>" alt="">
      <?php endif; ?>
  </div>
</div>
