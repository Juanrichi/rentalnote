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
            <h4 class="page-title">Data Pengguna</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card-box table-responsive">
               <h4 class="m-t-0 header-title"><b>Pengguna</b></h4>
               <p class="text-muted font-13 m-b-30">
                  Daftar nama-nama Pengguna yang dapat dicontrol penuh.
               </p>
							 <div id="infoMessage"><?php echo $message;?></div>
               <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                     <tr>
											 	<th><?php echo lang('index_fname_th');?></th>
										 		<th><?php echo lang('index_lname_th');?></th>
										 		<th><?php echo lang('index_email_th');?></th>
										 		<th><?php echo lang('index_groups_th');?></th>
										 		<th><?php echo lang('index_status_th');?></th>
										 		<th><?php echo lang('index_action_th');?></th>
                     </tr>
                  </thead>
                  <tbody>
										<?php foreach ($users as $user):?>
                     <tr>
											 <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
											 <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
											 <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
											 <td>
											 <?php foreach ($user->groups as $group):?>
											 <?php echo anchor("admin/notelog/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
											 		<?php endforeach?>
											 </td>
											 <td><?php echo ($user->active) ? anchor("admin/notelog/deactivate/".$user->id, lang('index_active_link')) : anchor("admin/notelog/activate/". $user->id, lang('index_inactive_link'));?></td>
											 <td><?php echo anchor("admin/notelog/edit_user/".$user->id, 'Edit') ;?></td>
                     </tr>
										 <?php endforeach;?>
                  </tbody>
               </table>
							 <p><?php echo anchor('admin/notelog/create_user', lang('index_create_user_link'))?> | <?php echo anchor('admin/notelog/create_group', lang('index_create_group_link'))?></p>
            </div>
         </div>
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
  <!-- End wrapper -->
<?php $this->load->view('back/footer') ?>
  <script>
      var resizefunc = [];
  </script>
<?php $this->load->view('back/js') ?>
<!-- DataTables CSS -->
<link href="<?php echo base_url('assets/backend')?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend')?>/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Required datatable js -->
<script src="<?php echo base_url('assets/backend')?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/backend')?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable').DataTable();
      //Buttons examples
      var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
      });
      table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );
  </script>
  </body>
</html>
