
<script type="text/javascript">

      <?php if ($this->session->flashdata()):?>
        <?php if ($this->session->flashdata('error')): ?>
          $.toast({
              heading: 'Error',
              text: '<?php echo $this->session->flashdata('msg') ?>',
              showHideTransition: 'fade',
              icon: 'error',
              hideAfter: 8000
          });
        <?php  elseif($this->session->flashdata('error') == 2): ?>
          $.toast({
              heading: 'Information',
              text: '<?php echo $this->session->flashdata('msg') ?>',
              icon: 'info',
              loader: true,        // Change it to false to disable loader
              loaderBg: '#9EC600',  // To change the background
              hideAfter: 8000
          })
        <?php else: ?>
          $.toast({
              heading: 'Success',
              text: '<?php echo $this->session->flashdata('msg') ?>',
              showHideTransition: 'slide',
              icon: 'success',
              hideAfter: 8000
          });
        <?php endif; ?>
      <?php endif; ?>
</script>
