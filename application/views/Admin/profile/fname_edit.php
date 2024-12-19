

<?php echo form_open('profile/update_fname'); ?>


<div class="form-group">
  <label for="">First Name</label>
  <input type="text"
	class="form-control" name="fname" value="<?php echo $this->session->userdata('fname');?>" id="" aria-describedby="helpId" placeholder="">
	
</div>
<div class="form-group">
  <input type="submit"
	class="btn btn-primary btn-out btn-block" name="update_fname" value="Update Fname" id="" aria-describedby="helpId" placeholder="">
</div>

<?php echo form_close(); ?>
