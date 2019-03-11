<?php $this->load->view('back/meta') ?>
<link href="<?php echo base_url('assets/backend'); ?>/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/backend'); ?>/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/backend'); ?>/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/backend'); ?>/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/backend'); ?>/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<!-- DataTables -->
<link href="<?php echo base_url('assets/backend'); ?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend'); ?>/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="<?php echo base_url('assets/backend'); ?>/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
      <div class="row">
         <div class="col-xs-12">
            <div class="card-box table-responsiv">
               <div class="row">
                    <div class="col-md-11">
                      <div id="infoMessage"><?php echo form_error('nama'); ?></div>
                      <?php echo form_open("admin/laporan", $form_open);?>
                      <div class="col-md-6">
                        <div class="form-group">
                           <label>Date Rental</label>
                           <div>
                              <div class="input-daterange input-group" id="date-range">
                                 <input type="text" class="form-control" name="dari" value="<?php echo set_value('dari'); ?>">
                                 <span class="input-group-addon bg-custom b-0">to</span>
                                 <input type="text" class="form-control" name="sampai" value="<?php echo set_value('sampai'); ?>">
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
                <hr>
                <div class="btn-group">
                	<a class="btn btn-warning btn-sm" href="<?php echo base_url().'laporan/laporan_pdf/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><span class="glyphicon glyphicon-print"></span> Cetak PDF</a>
                	<a class="btn btn-primary waves-effect waves-light btn-sm" href="<?php echo base_url().'laporan/laporan_print/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><span class="glyphicon glyphicon-print"></span> Print</a>
                </div>
                <br><br>
                <p class="text-muted font-13 m-b-30">
                <b>Perhatian :</b> Untuk sementara fitur cetak PDF dan Print sengaja dinonaktifkan, jika Anda ingin melihat tampilan dari hasil cetak
                perlu diketahui bahwa hasil cetakkannya sebetulnya tidak jauh berbedah dengan tampilan reporting ini saja dan tidak ada tampilan atribut khusus, Terima Kasih.
                </p>
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
                 			<th>Denda / Hari</th>
                 			<th>Dikembalikan</th>
                 			<th>Denda</th>
                 			<th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach($laporan as $l){
                			?>
                			<tr>
                				<td><?php echo $no++; ?></td>
                				<td><?php echo date('d/m/Y',strtotime($l->transaksi_tgl)); ?></td>
                				<td><?php echo $l->kostumer_nama; ?></td>
                        <td><?php echo $l->mobil_merek; ?></td>
                        <td><?php echo date('d/m/Y',strtotime($l->transaksi_tgl_pinjam)); ?></td>
                        <td><?php echo date('d/m/Y',strtotime($l->transaksi_tgl_kembali)); ?></td>
                        <td><?php echo "Rp. ".number_format($l->transaksi_harga); ?></td>
                        <td><?php echo "Rp. ".number_format($l->transaksi_denda); ?></td>
                        <td>
                          <?php
                          if($l->transaksi_tgldikembalikan =="0000-00-00"){
                            echo "-";
                          } else { echo date('d/m/Y',strtotime($l->transaksi_tgldikembalikan));
                          }
                          ?>
                        </td>
                        <td><?php echo "Rp. ". number_format($l->transaksi_totaldenda)." ,-"; ?></td>
                        <td>
                          <?php
                          if($l->transaksi_status == "1"){
                            echo "Selesai";
                          } else { echo "-"; }
                          ?>
                        </td>
                      </tr>
                      <?php } ?>
                 </tbody>
               </table>
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
<!-- Required datatable js -->
<script src="<?php echo base_url('assets/backend'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script type="text/javascript">
  $(document).ready(function() {
  $('#datatable').DataTable();
  //Buttons examples
  var table = $('#datatable-buttons').DataTable({
   lengthChange: false,
   buttons: ['copy', 'excel', 'pdf', 'colvis']
  });
  //table.buttons().container()
  //.appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
   } );
</script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets/backend'); ?>/plugins/datatables/responsive.bootstrap4.min.js"></script>
<!-- Validation js (Parsleyjs) -->
<script type="text/javascript" src="<?php echo base_url('assets/backend') ?>/plugins/parsleyjs/parsley.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('form').parsley();
   });
</script>
  </body>
</html>
