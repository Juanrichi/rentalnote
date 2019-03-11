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
            <h4 class="page-title">Car Add</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12">
            <div class="card-box">
               <div class="row">
                    <div class="col-md-11">
                      <?php foreach($kostumer as $k){ ?>
                      <div id="infoMessage"><?php echo form_error('nama'); ?></div>
                      <?php echo form_open("admin/kostumer/kostumer_update", $form_open);?>
                     <div class="col-md-6">
                       <input type="hidden" name="id" value="<?php echo $k->kostumer_id; ?>">
                       <div class="form-group">
                          <label for="userName">Name<span class="text-danger">*</span></label>
                          <?php echo form_input($nama, $k->kostumer_nama);?>
                       </div>
                       <div class="form-group">
                          <label for="userName">Address<span class="text-danger">*</span></label>
                          <?php echo form_textarea($alamat, $k->kostumer_alamat);?>
                       </div>
                       <div class="form-group">
                          <label for="userName">Gender<span class="text-danger">*</span></label>
                          <?php echo form_dropdown('jk',$jk,'', $opsional);?>
                       </div>
                       <div class="form-group">
                          <label for="userName">Phone Number<span class="text-danger">*</span></label>
                          <?php echo form_input($hp, $k->kostumer_hp);?>
                       </div>
                       <fieldset class="form-group">
                        <label for="exampleSelect1">No Identity</label>
                        <?php echo form_input($ktp, $k->kostumer_ktp);?>
                        </fieldset>
                        <hr>
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
                  <?php } ?>
                </div>
               </div>
               <!-- end row -->
            </div>
         </div>
         <!-- end col-->
      </div>
    <!-- end row -->
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
                        <small class="text-muted">5 hours ago</small>
                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end nicescroll -->
   </div>
    <!-- /Right-bar -->
    </div>
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
