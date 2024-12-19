



<?php
echo form_open('Users/edit_form');
foreach ($user->result() as $key => $selected_user) {
	
	
	?>
<input type="text" name="user_id" value="<?php echo $selected_user->id; ?>" hidden>
<div class="form-group">
  <label for="">First Name</label>
  <input type="text"
	class="form-control" value="<?php echo $selected_user->fname; ?>" name="fname" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
  <label for="">Last Name</label>
  <input type="text"
	class="form-control" value="<?php echo $selected_user->lname; ?>" name="lname" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
  <label for="">Email</label>
  <input type="email"
	class="form-control" value="<?php echo $selected_user->email; ?>" name="email" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
  <label for="">Phone</label>
  <input type="tel"
	class="form-control" value="<?php echo $selected_user->phone; ?>" name="phone" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
  <label for="">Address</label>
  <input type="text"
	class="form-control" value="<?php echo $selected_user->address; ?>" name="address"  id="" aria-describedby="helpId" placeholder="" required>
</div>

<div class="form-group">
  <label for="">Role</label>
  <select class="form-control" name="role">
	  <option value="<?php echo $selected_user->role; ?>"><?php echo $selected_user->role; ?></option>
	  <option value="Manager">Manager</option>
	  <option value="Admin">Administrator</option>
	  <option value="Employee">Employee</option>
	  <option value="Service_Provider">Service Provider</option>
	   </select>
</div>
<div class="form-group">
  <label for="">Status</label>
  <select class="form-control" name="status">
	  <option value="<?php echo $selected_user->status; ?>"><?php echo $selected_user->status; ?></option>
	  <option value="Active">Active</option>
	  <option value="Deactivate">Deactivate</option>
	   </select>
</div>
<div class="form-group">
  <label for="">Password</label>
  <input type="password"
	class="form-control" value="<?php echo $selected_user->password; ?>" name="password"  id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
	<input type="submit" value="Update" class="btn btn-success btn-out btn-block" name="update">
</div>


<?php
	
}

echo form_close();
?>



