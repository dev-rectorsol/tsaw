<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url(ASSETS) ?>/assets/libs/jquery/dist/jquery.min.js"></script>

<script src="<?php echo base_url(ASSETS) ?>/dist/js/jquery.validate.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/dist/js/angular.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/assets/extra-libs/dropzone/dropzone.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/dist/js/jquery.toast.js"></script>
<!-- apps -->

<!--Select2 plugin  -->
<script src="<?php echo base_url(ASSETS) ?>/join/vendor/select2/select2.min.js"></script>

<!-- apps -->
<script src="<?php echo base_url(ASSETS) ?>/dist/js/app-style-switcher.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/dist/js/feather.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url(ASSETS) ?>/dist/js/chocolat.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="<?php echo base_url(ASSETS) ?>/assets/extra-libs/c3/d3.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/assets/extra-libs/c3/c3.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/assets/libs/chartist/dist/chartist.min.js"></script>
<!-- <script src="<?php echo base_url(ASSETS) ?>/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script> -->
<script src="<?php echo base_url(ASSETS) ?>/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<!-- <script src="<?php echo base_url(ASSETS) ?>/dist/js/pages/dashboards/dashboard1.min.js"></script> -->

<!--dataTables plugins -->
<script src="<?php echo base_url(ASSETS) ?>/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(ASSETS) ?>/dist/js/pages/datatable/datatable-basic.init.js"></script>



<?php include('__appModule.php'); ?>
<?php include('__media.php'); ?>
<?php include('__list.php'); ?>
<?php if (isset($is_script)) {
  // code...
  echo $is_script;
} ?>
<?php include('__notification.php'); ?>
</body>

</html>
