<?php $this->load->view('back/meta') ?>
<!-- Responsive datatable examples -->
<link href="<?php echo base_url('assets/backend'); ?>/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- DataTables -->
<link href="<?php echo base_url('assets/backend'); ?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend'); ?>/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
            <h4 class="page-title">Cars List</h4>
         </div>
      </div>
      <div class="row">
       <div class="col-sm-12">
          <div class="card-box table-responsive">
            <a href="<?php echo base_url().'admin/mobil/mobil_add'; ?>" class="btn btn-primary btn-sm"><i class="ion-plus-round" style="padding-right:6px"></i> Mobil Baru</a>
            <br><br>
             <table id="datatable" class="table table-striped table-bordered">
               <thead>
                 <tr>
                   <th>No</th>
                   <th>Merk Mobil</th>
                   <th>Plat</th>
                   <th>Warna</th>
                   <th>Tahun Pembuatan</th>
                   <th>Status</th>
                   <th></th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                 $no = 1;
                 foreach($mobil as $m){
                   ?>
                   <tr>
                     <td><?php echo $no++; ?></td>
                     <td><?php echo $m->mobil_merek ?></td>
                     <td><?php echo $m->mobil_plat ?></td>
                     <td><?php echo $m->mobil_warna ?></td>
                     <td><?php echo $m->mobil_tahun ?></td>
                     <td>
                       <?php
                       if($m->mobil_status == "1"){
                         echo "Tersedia";
                       }else if($m->mobil_status == "2"){
                         echo "Sedang Di Rental";
                       }
                       ?>
                     </td>
                     <td>
                       <a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/mobil/mobil_edit/'.$m->mobil_id; ?>"><span class="glyphicon glyphicon-plus"></span> Edit</a>
                       <a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/mobil/mobil_hapus/'.$m->mobil_id; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                     </td>
                   </tr>
                   <?php
                 }
                 ?>
               </tbody>
             </table>
          </div>
       </div>
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
<!-- Required datatable js -->
<script src="<?php echo base_url('assets/backend'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="<?php echo base_url('assets/backend'); ?>/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('#datatable').DataTable();
     //Buttons examples
     var table = $('#datatable-buttons').DataTable({
     lengthChange: false,
     buttons: ['copy', 'excel', 'pdf', 'colvis']
     });
  //   table.buttons().container()
  //    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
   } );

</script>
  </body>
</html>
