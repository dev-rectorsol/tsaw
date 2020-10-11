<script type="text/javascript">
  $(document).ready(function(){

    var tabView = $("#details");

    $('.node').click(function(){

      var tab = $(this).attr('data-info');

      $.ajax({
        type: 'GET',
        url: '<?php echo base_url("admin/verification/load") ?>',
        data: {
          'tab': tab,
        },
        beforeSend: function() {
            tabView.html('<img style="margin: auto;" src="<?php echo base_url('optimum/assets/images/loading.svg') ?>" />');
        },
        success: function(response) {
          tabView.html(response);
        }
      });

    });

});


</script>
