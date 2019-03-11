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
            <h4 class="page-title">Transaction List</h4>
         </div>
      </div>
      <div class="row">
       <div class="col-sm-12">
          <div class="card-box table-responsive">
            <a href="<?php echo base_url().'admin/transaksi/transaksi_add'; ?>" class="btn btn-primary btn-sm"><i class="ion-plus-round" style="padding-right:6px"></i>Transaksi Baru</a>
            <br><br>
             <table id="datatable" class="table table-striped table-bordered">
               <thead>
                 <tr>
                   <th>No</th>
             			<th>Tanggal</th>
             			<th>Kostumer</th>
             			<th>Mobil</th>
             			<th>Pinjam</th>
             			<th>Kembali</th>
             			<th>Harga</th>
             			<th>Denda/Hari</th>
             			<th>Tgl.Dikembalikan</th>
             			<th>Denda</th>
             			<th>Status</th>
             			<th></th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                 $no = 1;
                 foreach($transaksi as $t){
                   ?>
                   <tr>
                     <td><?php echo $no++; ?></td>
                     <td><?php echo date('d/m/Y',strtotime($t->transaksi_tgl)); ?></td>
                     <td><?php echo $t->kostumer_nama; ?></td>
                     <td><?php echo $t->mobil_merek; ?></td>
                     <td><?php echo date('d/m/Y',strtotime($t->transaksi_tgl_pinjam)); ?></td>
                     <td><?php echo date('d/m/Y',strtotime($t->transaksi_tgl_kembali)); ?></td>
                     <td><?php echo "Rp.".number_format($t->transaksi_harga); ?></td>
                     <td><?php echo "Rp.".number_format($t->transaksi_denda); ?></td>
                     <td>
                       <?php
                       if($t->transaksi_tgldikembalikan =="0000-00-00"){
                         echo "-"; } else { echo date('d/m/Y',strtotime($t->transaksi_tgldikembalikan));}
                       ?>
                     </td>
                     <td><?php echo "Rp. ". number_format($t->transaksi_totaldenda)." ,-"; ?></td>
                     <td>
                       <?php
                       if($t->transaksi_status == "1"){
                         echo "Selesai"; } else { echo "-";}
                       ?>
                     </td>
                     <td>
                       <?php
                       if($t->transaksi_status == "1"){
                         echo "-"; } else {
                         ?>
                         <a class="btn btn-sm btn-success" href="<?php echo base_url().'admin/transaksi/transaksi_selesai/'.$t->transaksi_id; ?>"><span class="glyphicon glyphicon-ok"></span> Transaksi Selesai</a>
                         <br/>
                         <a class="btn btn-sm btn-danger" href="<?php echo base_url().'admin/transaksi/transaksi_hapus/'.$t->transaksi_id; ?>"><span class="glyphicon glyphicon-remove"></span> Batalkan Transaksi</a>
                         <?php } ?>
                     </td>
                   </tr>
                   <?php } ?>
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
