<?php $application_name = $this->db->get_where('setting', array('setting_name' => 'application_name'))->row()->setting_value; ?>
<?php $application_title = $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value; ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(ASSETS) ?>/assets/images/favicon_io/favicon.ico">
    <title><?php echo $application_name ?> - <?php echo $application_title; ?></title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url(ASSETS) ?>/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="<?php echo base_url(ASSETS) ?>/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(ASSETS) ?>/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="<?php echo base_url(ASSETS) ?>/dist/css/jquery.toast.css" rel="stylesheet" />
    <!-- DataTable plugin CSS -->
    <link href="<?php echo base_url(ASSETS) ?>/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?php echo base_url(ASSETS) ?>/assets/extra-libs/dropzone/dropzone.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(ASSETS) ?>/join/vendor/select2/select2.css" rel="stylesheet" />
    <link href="<?php echo base_url(ASSETS) ?>/dist/css/chocolat.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url(ASSETS) ?>/dist/css/style.min.css" rel="stylesheet">
    <link href="<?php echo base_url(ASSETS) ?>/dist/css/main.css" rel="stylesheet">


</head>

<body ng-app="ViteApp">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
