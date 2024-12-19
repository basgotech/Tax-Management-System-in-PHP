

<?php echo form_open('profile/update_email'); ?>


<div class="form-group">
  <label for=""> Address</label>
  <input type="text"
	class="form-control" name="address" value="<?php echo $this->session->userdata('address');?>" id="" aria-describedby="helpId" placeholder="">
	
</div>
<div class="form-group">
  <input type="submit"
	class="btn btn-primary btn-out btn-block" name="update_address" value="Update Address" id="" aria-describedby="helpId" placeholder="">
</div>

<?php echo form_close(); ?>
