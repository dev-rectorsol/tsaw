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
    <title><?php echo $application_name; ?> - <?php echo $application_title ?></title>

    <!-- Custom CSS -->
    <link href="<?php echo base_url(ASSETS) ?>/dist/css/style.min.css" rel="stylesheet">
		<script src="<?php echo base_url(ASSETS) ?>/assets/libs/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(ASSETS) ?>/dist/js/angular.min.js"></script>

</head>
<body>
