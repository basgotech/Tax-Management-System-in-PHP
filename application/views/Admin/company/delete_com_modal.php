



<?php
echo form_open('Company/delete_com_db/'.$get_id);
foreach ($company->result() as $key => $get_company) {
	
	echo "did you went to delete ". $get_company->com_type;
	?>

<div class="form-group">
	<input type="submit" value="Delete Compnay" class="btn btn-danger btn-out btn-block" name="delete">
</div>


<?php
	
}

echo form_close();
?>



