<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- App Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/backend') ?>/images/favicon.ico">
    <!-- App title -->
    <title>RentalNote Login</title>
    <!-- App CSS -->
    <link href="<?php echo base_url('assets/backend') ?>/css/style.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
    	<div class="account-bg">
        <div class="card-box m-b-0">
          <div class="text-xs-center m-t-20">
            <a href="#" class="logo">
                <i class="zmdi zmdi-car-taxi"></i>
                <span>RENTALNOTE</span>
            </a>
          </div>
            <div class="m-t-30 m-b-20">
              <div class="col-xs-12 text-xs-center">
                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
              </div>
              <div id="infoMessage"><?php echo $message;?></div>
              <?php echo form_open("admin/notelog/login");?>
                  <div class="form-group ">
                    <div class="col-xs-12"><br>
                      <?php echo form_input($identity);?>
                    </div>
                  </div>
                    <div class="form-group">
                      <div class="col-xs-12">
                        <?php echo form_input($password);?>
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-xs-12">
                          <div class="checkbox checkbox-custom">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                             Remember me
                          <!-- <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> -->
                            <!-- Warning : Form Checkbox can not set -->
                            </label>
                          </div>
                      </div>
                    </div>
                    <div class="form-group text-center m-t-30">
                      <div class="col-xs-12">
                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                      </div>
                    </div>
                    <div class="form-group m-t-30 m-b-0">
                      <div class="col-sm-12">
                        <a href="forgot_password" class="text-muted"><i class="fa fa-lock m-r-5"></i><?php echo lang('login_forgot_password');?></a>
                      </div>
                    </div>
                    <div class="form-group m-t-30 m-b-0">
                      <div class="col-sm-12 text-xs-center">
                        <h5 class="text-muted"><b>Sign in with</b></h5>
                      </div>
                    </div>
                    <div class="form-group m-b-0 text-xs-center">
                      <div class="col-sm-12">
                        <button type="button" class="btn btn-facebook waves-effect waves-light m-t-20">
                          <i class="fa fa-facebook m-r-5"></i> Facebook
                        </button>
                        <button type="button" class="btn btn-twitter waves-effect waves-light m-t-20">
                          <i class="fa fa-twitter m-r-5"></i> Twitter
                        </button>
                        <button type="button" class="btn btn-googleplus waves-effect waves-light m-t-20">
                           <i class="fa fa-google-plus m-r-5"></i> Google+
                        </button>
                      </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
        </div>
          <!-- end card-box-->
          <div class="m-t-20">
            <div class="text-xs-center">
              <p class="text-white">Don't have an account? <a href="#" class="text-white m-l-5"><b>Sign Up</b></a></p>
            </div>
          </div>
      </div>
      <!-- end wrapper page -->
      <script>
          var resizefunc = [];
      </script>
      <!-- jQuery  -->
      <!-- jQuery  -->
      <script src="<?php echo base_url('assets/backend') ?>/js/jquery.min.js"></script>
      <script src="<?php echo base_url('assets/backend') ?>/js/tether.min.js"></script><!-- Tether for Bootstrap -->
      <script src="<?php echo base_url('assets/backend') ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url('assets/backend') ?>/js/waves.js"></script>
      <script src="<?php echo base_url('assets/backend') ?>/js/jquery.nicescroll.js"></script>
      <script src="<?php echo base_url('assets/backend') ?>/plugins/switchery/switchery.min.js"></script>

      <!-- Validation js (Parsleyjs) -->
      <script type="text/javascript" src="<?php echo base_url('assets/backend'); ?>/plugins/parsleyjs/parsley.min.js"></script>

      <!-- App js -->
      <script src="<?php echo base_url('assets/backend') ?>/js/jquery.core.js"></script>
      <script src="<?php echo base_url('assets/backend') ?>/js/jquery.app.js"></script>

      <script type="text/javascript">
			  $(document).ready(function() {
				$('form').parsley();
			});
		</script>
  </body>
</html>
