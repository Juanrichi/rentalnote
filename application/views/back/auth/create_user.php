<?php $this->load->view('back/meta') ?>
<?php $this->load->view('back/header') ?>
<?php $this->load->view('back/navbar') ?>
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="wrapper">
   <div class="container">
      <!-- Page-Title -->
      <div class="row">
         <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
               <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                  data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                  class="fa fa-cog"></i></span></button>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
               </div>
            </div>
            <h4 class="page-title">Create User</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12">
            <div class="card-box">
              <h4 class="m-t-0 header-title"><b>Create</b></h4>
              <p class="text-muted font-13 m-b-30">
                 Daftar nama-nama Pengguna yang dapat dicontrol penuh.
              </p>
               <div class="row">
                    <div class="col-md-11">
                      <div id="infoMessage"><?php echo $message;?></div>
                      <?php echo form_open("admin/notelog/create_user",$form_open);?>
                     <div class="col-md-6">
                       <div class="form-group">
                          <label for="userName">Fist Name<span class="text-danger">*</span></label>
                          <?php echo form_input($first_name);?>
                       </div>
                       <div class="form-group">
                          <label for="userName">Last Name<span class="text-danger">*</span></label>
                          <?php echo form_input($last_name);?>
                       </div>
                       <div class="form-group">
                          <?php
                          if($identity_column!=='email') {
                            echo '<p>';
                            echo lang('create_user_identity_label', 'identity');
                            echo form_error('identity');
                            echo form_input($identity);
                            echo '</p>';
                          }
                          ?>
                       </div>
                       <div class="form-group">
                          <label for="userName">Company<span class="text-danger">*</span></label>
                          <?php echo form_input($company);?>
                       </div>
                       <div class="form-group">
                          <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                          <?php echo form_input($email);?>
                       </div>
                       <div class="form-group">
                          <label>Phone</label>
                          <div>
                          <?php echo form_input($phone);?>
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="pass1">Password<span class="text-danger">*</span></label>
                          <?php echo form_input($password);?>
                       </div>
                       <div class="form-group">
                          <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                          <?php echo form_input($password_confirm);?>
                       </div>
                       <div class="form-group text-right m-b-0">
                          <button class="btn btn-primary waves-effect waves-light" type="submit">
                          Create
                          </button>
                          <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                          Clear All
                          </button>
                       </div>
                     </div>
                  <?php echo form_close();?>
                </div>
               </div>
               <!-- end row -->
            </div>
         </div>
         <!-- end col-->
      </div>
      <!-- end row -->
   </div>
   <!-- container -->
   <!-- Right Sidebar -->
   <div class="side-bar right-bar">
      <div class="nicescroll">
         <ul class="nav nav-tabs text-xs-center">
            <li class="nav-item">
               <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
               Activity
               </a>
            </li>
            <li class="nav-item">
               <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
               Settings
               </a>
            </li>
         </ul>
         <div class="tab-content">
            <div class="tab-pane fade in active" id="home-2">
               <div class="timeline-2">
                  <div class="time-item">
                     <div class="item-info">
                        <small class="text-muted">5 minutes ago</small>
                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                     </div>
                  </div>
                  <div class="time-item">
                     <div class="item-info">
                        <small class="text-muted">30 minutes ago</small>
                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                     </div>
                  </div>
                  <div class="time-item">
                     <div class="item-info">
                        <small class="text-muted">59 minutes ago</small>
                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                     </div>
                  </div>
                  <div class="time-item">
                     <div class="item-info">
                        <small class="text-muted">1 hour ago</small>
                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                     </div>
                  </div>
                  <div class="time-item">
                     <div class="item-info">
                        <small class="text-muted">3 hours ago</small>
                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                     </div>
                  </div>
                  <div class="time-item">
                     <div class="item-info">
                        <small class="text-muted">5 hours ago</small>
                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="messages-2">
               <div class="row m-t-20">
                  <div class="col-xs-8">
                     <h5 class="m-0">Notifications</h5>
                     <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                  </div>
                  <div class="col-xs-4 text-right">
                     <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                  </div>
               </div>
               <div class="row m-t-20">
                  <div class="col-xs-8">
                     <h5 class="m-0">API Access</h5>
                     <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                  </div>
                  <div class="col-xs-4 text-right">
                     <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                  </div>
               </div>
               <div class="row m-t-20">
                  <div class="col-xs-8">
                     <h5 class="m-0">Auto Updates</h5>
                     <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                  </div>
                  <div class="col-xs-4 text-right">
                     <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                  </div>
               </div>
               <div class="row m-t-20">
                  <div class="col-xs-8">
                     <h5 class="m-0">Online Status</h5>
                     <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                  </div>
                  <div class="col-xs-4 text-right">
                     <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end nicescroll -->
    </div>
   <!-- /Right-bar -->
 </div>
<!-- End wrapper -->
<?php $this->load->view('back/footer') ?>
  <script>
      var resizefunc = [];
  </script>
<?php $this->load->view('back/js') ?>
<!-- Validation js (Parsleyjs) -->
<script type="text/javascript" src="<?php echo base_url('assets/backend') ?>/plugins/parsleyjs/parsley.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('form').parsley();
   });
</script>
  </body>
</html>
