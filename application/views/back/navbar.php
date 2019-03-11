<div class="navbar-custom">
   <div class="container">
      <div id="navigation">
         <!-- Navigation Menu-->
         <ul class="navigation-menu">
            <li>
              <a href="<?php echo base_url('admin/dashboard') ?>"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
            </li>
            <li class="has-submenu">
               <a href="<?php echo base_url('admin/mobil'); ?>"><i class="zmdi zmdi-car"></i> <span> Cars Data </span> </a>
            </li>
            <li class="has-submenu">
               <a href="<?php echo base_url('admin/kostumer'); ?>"><i class="zmdi zmdi-account-box"></i> <span> Customers Data </span> </a>
            </li>
            <li class="has-submenu">
               <a href="<?php echo base_url('admin/transaksi'); ?>"><i class="zmdi zmdi-collection-text"></i><span> Rental Transaction </span> </a>
            </li>
            <li class="has-submenu">
               <a href="<?php echo base_url('admin/laporan'); ?>"><i class="zmdi zmdi-chart"></i><span> Reporting </span> </a>
            </li>
            <li class="has-submenu">
               <a href="#"><i class="zmdi ion-android-friends"></i><span> Users </span> </a>
               <ul class="submenu megamenu">
                  <li>
                     <ul>
                        <li><a href="<?php echo base_url('admin/notelog'); ?>"><i class="ion-android-contact"></i> Data User </a></li>
                        <li><a href="<?php echo base_url('admin/notelog/create_user') ?>"><i class="ion-android-add-contact"></i> Tambah User</a></li>
                        <li><a href="<?php echo base_url('admin/notelog/create_group') ?>"><i class="ion-android-contacts"></i> User Type</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
         </ul>
         <!-- End navigation menu  -->
      </div>
   </div>
</div>
</header>
<!-- End Navigation Bar-->
