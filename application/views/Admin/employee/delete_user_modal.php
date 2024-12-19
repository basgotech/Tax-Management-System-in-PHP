



<?php
echo form_open('Users/delete_user_db');
foreach ($user->result() as $key => $selected_user) {
	
	echo "did you went to delete ". $selected_user->fname." ".$selected_user->lname;
	?>
<input type="text" name="user_id" value="<?php echo $selected_user->id; ?>" hidden>

<div class="form-group">
	<input type="submit" value="Delete user" class="btn btn-danger btn-out btn-block" name="delete">
</div>


<?php
	
}

echo form_close();
?>



