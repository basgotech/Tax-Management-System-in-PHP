

<?php echo form_open('profile/update_lname'); ?>


<div class="form-group">
  <label for="">Last Name</label>
  <input type="text"
	class="form-control" name="lname" value="<?php echo $this->session->userdata('lname');?>" id="" aria-describedby="helpId" placeholder="">
	
</div>
<div class="form-group">
  <input type="submit"
	class="btn btn-primary btn-out btn-block" name="update_lname" value="Update Lname" id="" aria-describedby="helpId" placeholder="">
</div>

<?php echo form_close(); ?>
