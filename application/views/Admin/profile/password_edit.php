

<?php echo form_open('profile/update_password'); ?>


<div class="form-group">
  <label for=""> Current Password</label>
  <input type="password"
	class="form-control" name="old_password" value="" id="" aria-describedby="helpId" placeholder="" required>
	
</div>
<div class="form-group">
  <label for=""> New Password</label>
  <input type="password"
	class="form-control" name="new_password" value="" id="" aria-describedby="helpId" placeholder="" required>
	
</div>
<div class="form-group">
  <label for=""> Confirm Password</label>
  <input type="password"
	class="form-control" name="con_password" value="" id="" aria-describedby="helpId" placeholder="" required>
	
</div>
<div class="form-group">
  <input type="submit"
	class="btn btn-primary btn-out btn-block" name="update_password" value="Update Password" id="" aria-describedby="helpId" placeholder="">
</div>

<?php echo form_close(); ?>
