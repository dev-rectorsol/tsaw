

<script type="text/javascript">

Dropzone.autoDiscover = false;
$(document).ready(function(){
  $("#addSliderImage").dropzone({
      maxFilesize: 5, //MB
      maxFiles: 10, //number of file
      url: '<?php echo base_url('file_upload'); ?>',
      success: function(file, response){
        $.ajax({
          url: '<?php echo base_url('admin/appsetting/addslider'); ?>',
          type: 'POST',
          data: JSON.parse(response),
          success: function(data) {
            var result = JSON.parse(data);
            if (result.error) {
              $.toast({
                    heading: 'Faild!',
                    text: 'failed to file upload for some technical reasons.',
                    showHideTransition: 'slide',
                    icon: 'danger'
                })
            } else {
              $.toast({
                    heading: 'Success',
                    text: 'Your slider save.',
                    showHideTransition: 'slide',
                    icon: 'success'
                });
                window.setTimeout(function(){
                  window.location.reload();
                }, 3000);

            }
          },
        })
      }
  });

  $('#addGalleryImage').dropzone({
    maxFilesize: 5, //MB
    maxFiles: 10, //number of file
    url: '<?php echo base_url('file_upload'); ?>',
    success: function(file, response){
      var data = JSON.parse(response);
      if (data.status) {
        $('#product_image').val(data.path);
      }
    }
  });


$('#listbox div:first').addClass('active');
});

document.addEventListener("DOMContentLoaded", function(event) {
    Chocolat(document.querySelectorAll('.chocolat-parent .chocolat-image'),{
      loop: true,
    });
});

</script>
