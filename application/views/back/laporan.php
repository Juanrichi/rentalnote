<?php $this->load->view('back/meta') ?>
<link href="<?php echo base_url('assets/backend'); ?>/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/backend'); ?>/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/backend'); ?>/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/backend'); ?>/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/backend'); ?>/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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
            <h4 class="page-title">Reporting</h4>
         </div>
      </div>
      <br><br>
      <div class="row">
         <div class="col-xs-12">
            <div class="card-box">
               <div class="row">
                    <div class="col-md-11">
                      <div id="infoMessage"><?php echo form_error('nama'); ?></div>
                      <?php echo form_open("admin/laporan", $form_open);?>
                      <div class="col-md-6">
                        <div class="form-group">
                           <label>Date Rental</label>
                           <br> <br>
                           <div>
                                 <div class="input-daterange input-group" id="date-range">
                                 <input type="text" class="form-control" name="dari">
                                 <span class="input-group-addon bg-custom b-0">to</span>
                                 <input type="text" class="form-control" name="sampai">
                              </div>
                           </div>
                           	<?php echo form_error('dari'); ?>
                            <?php echo form_error('sampai'); ?>
                        </div>
                      </div>
                      <hr>
                       <div class="form-group text-right m-b-0">
                          <button class="btn btn-primary waves-effect waves-light" name="cari" type="submit">
                          Search
                          </button>
                          <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                          Clear
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
<script src="<?php echo base_url('assets/backend'); ?>/plugins/moment/moment.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/clockpicker/bootstrap-clockpicker.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/pages/jquery.form-pickers.init.js"></script>
<!-- Validation js (Parsleyjs) -->
<script type="text/javascript" src="<?php echo base_url('assets/backend') ?>/plugins/parsleyjs/parsley.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('form').parsley();
   });
</script>
  </body>
</html>
