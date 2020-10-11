<script type="text/javascript">
  $(document).ready(function(){
    $('form[name="distributorjoining"]').validate({
      rules: {
        // simple rule, converted to {required:true}
        fname: "required",
        lname: "required",
        // compound rule
        email: {
          required: true,
          email: true
        },
        phone: {
          required:true,
          minlength:9,
          maxlength:10,
          number: true
        },
        pincode: {
          required: true,
          minlength:6,
          maxlength:6,
        }
      },
      messages: {
        fname: "Please specify your First Name",
        lname: "Please specify your Last Name",
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        },
        phone : {
          required: 'Phone must be entered',
          minlength: 'Enter valide phone number',
          maxlength: 'Enter valide phone number',
        },
        pincode : {
          required: 'Pincode must be entered',
          minlength: 'Enter valide Pincode number',
          maxlength: 'Enter valide Pincode number',
        }
      }
    });


    $('#distributorlist').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            url: "<?php echo base_url('admin/product/get_product') ?>",
            type: "GET"
        },
        "columnDefs": [{
            "targets": [4, 6],
            "orderable": false,
        }, ],
        "pageLength": 10
    });
});


</script>
