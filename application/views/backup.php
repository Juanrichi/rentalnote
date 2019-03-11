<form action="#" data-parsley-validate novalidate>
 <div class="col-md-6">
   <div class="form-group">
      <label for="userName">Fist Name<span class="text-danger">*</span></label>
      <input type="text" name="nick" parsley-trigger="change" required
         placeholder="Enter user name" class="form-control" id="userName">
   </div>
   <div class="form-group">
      <label for="userName">Last Name<span class="text-danger">*</span></label>
      <input type="text" name="nick" parsley-trigger="change" required
         placeholder="Enter user name" class="form-control" id="userName">
   </div>
   <div class="form-group">
      <label for="userName">Company<span class="text-danger">*</span></label>
      <input type="text" name="nick" parsley-trigger="change" required
         placeholder="Enter user name" class="form-control" id="userName">
   </div>
   <div class="form-group">
      <label for="emailAddress">Email address<span class="text-danger">*</span></label>
      <input type="email" name="email" parsley-trigger="change" required
         placeholder="Enter email" class="form-control" id="emailAddress">
   </div>
   <div class="form-group">
      <label>Phone</label>
      <div>
         <input data-parsley-type="digits" type="text" class="form-control" required="" placeholder="Enter only digits" data-parsley-id="40">
      </div>
   </div>
   <div class="form-group">
      <label for="pass1">Password<span class="text-danger">*</span></label>
      <input id="pass1" type="password" placeholder="Password" required
         class="form-control">
   </div>
   <div class="form-group">
      <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
      <input data-parsley-equalto="#pass1" type="password" required
         placeholder="Password" class="form-control" id="passWord2">
   </div>
   <div class="form-group text-right m-b-0">
      <button class="btn btn-primary waves-effect waves-light" type="submit">
      Create
      </button>
      <button type="reset" class="btn btn-secondary waves-effect m-l-5">
      Reset All
      </button>
   </div>
 </div>
</form>



<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

      <p>
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>
      <p>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>
      <p>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </p>
      <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>
      <p>
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>
      <p>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>
      <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($password_confirm);?>
      </p>
      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>
<?php echo form_close();?>
