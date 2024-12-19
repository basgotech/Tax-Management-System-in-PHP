



<?php
echo form_open('Company/edit_company/'.$get_id);
foreach ($company->result() as $key => $selected_com) {
	
	
	?>

<div class="form-group">
  <label for="">Company Name</label>
  <input type="text"
	class="form-control" value="<?php echo $selected_com->com_type;?>" name="com_name" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
	<input type="submit" value="Update" class="btn btn-success btn-out btn-block" name="update">
</div>


<?php
	
}

echo form_close();
?>



