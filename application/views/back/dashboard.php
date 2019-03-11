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
            <h4 class="page-title">Dashboard</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
               <i class="icon-notebook pull-xs-right text-muted"></i>
               <h6 class="text-muted text-uppercase m-b-20">Cars Total</h6>
               <h2 class="m-b-20" data-plugin="counterup"><?php echo $this->m_rental->get_data('mobil')->num_rows(); ?></h2>
               <span class="label label-success"> +11% </span> <span class="text-muted">
                 From previous period -> <a href="<?php echo base_url().'admin/mobil' ?>">Details</a>
               </span>
            </div>
         </div>
         <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
               <i class="icon-people pull-xs-right text-muted"></i>
               <h6 class="text-muted text-uppercase m-b-20">Customers</h6>
               <h2 class="m-b-20" data-plugin="counterup"><?php echo $this->m_rental->get_data('kostumer')->num_rows(); ?></h2>
               <span class="label label-danger"> -29% </span> <span class="text-muted">
                 From previous period <a href="<?php echo base_url().'admin/kostumer' ?>">Details</a>
               </span>
            </div>
         </div>
         <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
               <i class="icon-chart pull-xs-right text-muted"></i>
               <h6 class="text-muted text-uppercase m-b-20">Transaction Amount</h6>
               <h2 class="m-b-20" data-plugin="counterup"><?php echo $this->m_rental->get_data('transaksi')->num_rows(); ?></h2>
               <span class="label label-pink"> 0% </span> <span class="text-muted">
                 From previous period <a href="<?php echo base_url().'admin/transaksi' ?>">Details</a>
               </span>
            </div>
         </div>
         <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card-box tilebox-one">
               <i class="icon-note pull-xs-right text-muted"></i>
               <h6 class="text-muted text-uppercase m-b-20">Rental Completed</h6>
               <h2 class="m-b-20" data-plugin="counterup"><?php echo $this->m_rental->edit_data(array('transaksi_status'=>1),'transaksi')->num_rows(); ?></h2>
               <span class="label label-warning"> +89% </span> <span class="text-muted">
                 Last year <a href="<?php echo base_url().'admin/transaksi' ?>">Details</a>
               </span>
            </div>
         </div>
      </div>
      <hr>
      <!-- end row -->
      <div class="row">
       <div class="col-xs-12 col-lg-12 col-xl-7">
          <div class="row">
             <div class="col-xs-12 col-md-6">
                <div class="card-box">
                   <h4 class="header-title m-t-0 m-b-20">Cars List</h4>
                   <div class="panel-body nicescroll" style="height: 320px; overflow: hidden; outline: none;" tabindex="5000">
                     <div class="list-group">
             					<?php foreach($mobil as $m){ ?>
             					<a href="#" class="list-group-item">
                        <button type="text" class="btn btn-secondary btn-rounded waves-effect">
                          <i class="ti-car" style="padding-right:6px"></i><?php echo $m->mobil_merek; ?> <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i>
                          <?php if($m->mobil_status == 1){echo "Tersedia";}else{echo "Dirental";} ?></button></span>
             					</a>
             					<?php } ?>
             				</div>
                   </div>
                   <hr>
                   <div class="panel-body">
                      <div class="text-right" align="right">
                        <a href="<?php echo base_url().'admin/mobil' ?>">
                         <button type="button" class="btn btn-sm btn-primary waves-effect waves-light">View More</button>
                       </a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xs-12 col-md-6">
                <div class="card-box">
                 <h4 class="header-title m-t-0 m-b-20">New Customers</h4>
                  <div class="inbox-widget nicescroll" style="height: 320px; overflow: hidden; outline: none;" tabindex="5000">
                    <div class="list-group">
                      <?php foreach($kostumer as $k){ ?>
                      <a href="#" class="list-group-item">
                        <button type="text" class="btn btn-secondary btn-rounded waves-effect">
                        <i class="ti-user"style="padding-right:6px"></i><?php echo $k->kostumer_nama; ?><span class="btn-label btn-label-right">
                        <b><?php echo $k->kostumer_jk ?></b></span></button>
                      </a>
                      <?php } ?>
                    </div>
                 </div>
                 <hr>
                 <div class="panel-body">
                    <div class="text-right" align="right">
                      <a href="<?php echo base_url().'admin/kostumer' ?>">
                       <button type="button" class="btn btn-sm btn-primary waves-effect waves-light">View More</button>
                     </a>
                    </div>
                 </div>
                </div>
             </div>
          </div>
       </div>
       <!-- end col-->
       <div class="col-xs-12 col-lg-12 col-xl-5">
          <div class="card-box">
             <h4 class="header-title m-t-0 m-b-30">Last Borrowing</h4>
             <div class="inbox-widget nicescroll" style="height: 310px; overflow: hidden; outline: none;" tabindex="5000">
             <div class="table-responsive">
                <table class="table table-bordered m-b-0">
                   <thead>
                      <tr>
                        <th>Tgl. Transaksi</th>
                        <th>Tgl. Pinjam</th>
                        <th>Tgl. Kembali</th>
                        <th>Total</th>
                      </tr>
                   </thead>
                   <tbody>
                     <?php
                     foreach($transaksi as $t){
                       ?>
                       <tr>
                         <td><?php echo date('d/m/Y',strtotime($t->transaksi_tgl)); ?></td>
                         <td><?php echo date('d/m/Y',strtotime($t->transaksi_tgl_pinjam)); ?></td>
                         <td><?php echo date('d/m/Y',strtotime($t->transaksi_tgl_kembali)); ?></td>
                         <td><?php echo "Rp. ".number_format($t->transaksi_harga)." ,-"; ?></td>
                       </tr>
                       <?php } ?>
                   </tbody>
                </table>
             </div>
          </div>
          <hr>
          <div class="panel-body">
             <div class="text-right" align="right">
               <a href="<?php echo base_url().'admin/kostumer' ?>">
                <button type="button" class="btn btn-sm btn-primary waves-effect waves-light">View More</button>
              </a>
             </div>
          </div>
        </div>
        <!-- end col-->
        </div>
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
  </body>
</html>
