

<?php echo form_open('profile/update_email'); ?>


<div class="form-group">
  <label for="">Email Address</label>
  <input type="text"
	class="form-control" name="email" value="<?php echo $this->session->userdata('email');?>" id="" aria-describedby="helpId" placeholder="">
	
</div>
<div class="form-group">
  <input type="submit"
	class="btn btn-primary btn-out btn-block" name="update_email" value="Update Email" id="" aria-describedby="helpId" placeholder="">
</div>

<?php echo form_close(); ?>
