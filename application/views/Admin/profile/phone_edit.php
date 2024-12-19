

<?php echo form_open('profile/update_phone'); ?>


<div class="form-group">
  <label for="">Phone</label>
  <input type="text"
	class="form-control" name="phone" value="<?php echo $this->session->userdata('phone');?>" id="" aria-describedby="helpId" placeholder="">
	
</div>
<div class="form-group">
  <input type="submit"
	class="btn btn-primary btn-out btn-block" name="update_phone" value="Update Phone" id="" aria-describedby="helpId" placeholder="">
</div>

<?php echo form_close(); ?>
