<div class="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
        style="background:url(<?php echo ASSETS ?>/assets/images/big/auth-bg.jpg) no-repeat center center;">
        <div class="auth-box row">
            <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(<?php echo base_url(ASSETS) ?>/assets/images/background/making-a-payment-with-a-smartphone-4199524.jpg);">
            </div>
            <div class="col-lg-5 col-md-7 bg-white">
                <div class="p-3">
                    <div class="text-center">
                        <img src="<?php echo ASSETS ?>/assets/images/favicon_io/apple-touch-icon.png" alt="wrapkit">
                    </div>
                    <h2 class="mt-3 text-center">Sign In</h2>
                    <p class="text-center">Enter your email address and password to access admin panel.</p>
                    <form id="logon" class="mt-4" action="<?php echo base_url('auth'); ?>" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="uname">Username</label>
                                    <input class="form-control" id="uname" name="email" type="text"
                                        placeholder="enter your username">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="pwd">Password</label>
                                    <input class="form-control" id="pwd" name="password" type="password"
                                        placeholder="enter your password">
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                                <button type="submit" class="btn btn-block btn-dark" >Sign In</button>
                            </div>
                            <div class="col-lg-12 text-center mt-5">
                                Don't have an account? <a href="#" class="text-danger">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->
    <!-- ============================================================== -->
</div>
<script type="text/javascript">
  $(document).ready(function(){
    // ON form is submit event
    $('#logon').on('submit', function(){
      event.preventDefault();
      var email = $('input[name="email"]');
      var password = $('input[name="password"]');
      if(!email.val()){
        email.css({'border': '1px solid #ff4f70'}).parent().append('<p class="text-danger">Username must be entered</p>');
      }else if(!password.val()){
        password.css({'border': '1px solid #ff4f70'}).parent().append('<p class="text-danger">Password must be entered</p>');
      }else{
        email.css({'border': '1px solid #e9ecef'});
        password.css({'border': '1px solid #e9ecef'});
        $('p.text-danger').remove();
        var form = $(this).serialize();
        $.ajax({
          url: '<?php echo base_url('api/login'); ?>',
          type: 'POST',
          data: form,
          beforeSend: function(){
            $('button[type="submit"]').attr('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
          },
          success: function(data) {
            if (data.is_login) {
              $('button[type="submit"]').parent().prepend('<p class="text-success">Welcome! Back '+data.uname+'.</p>');
              $('#logon')[0].submit();
            }else {
              $('button[type="submit"]').attr('disabled', false).html('Sign In');
              $('button[type="submit"]').parent().prepend('<p class="text-danger">Invalide Username or Password</p>');
            }
          }
        });
      }
    });

  });
</script>
