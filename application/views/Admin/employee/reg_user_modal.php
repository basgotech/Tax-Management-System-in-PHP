



<?php
echo form_open('Users/register_user');

	
	?>
	
<div class="form-group">
  <label for="">First Name</label>
  <input type="text"
	class="form-control"  name="fname" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
  <label for="">Last Name</label>
  <input type="text"
	class="form-control"  name="lname" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
  <label for="">Email</label>
  <input type="email"
	class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
  <label for="">Phone</label>
  <input type="tel"
	class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
  <label for="">Address</label>
  <input type="text"
	class="form-control" name="address"  id="" aria-describedby="helpId" placeholder="" required>
</div>

<div class="form-group">
  <label for="">Role</label>
  <select class="form-control" name="role">
	  <option value="">Select Role</option>
	  <option value="Manager">Manager</option>
	  <option value="Admin">Administrator</option>
	  <option value="Employee">Employee</option>
	  <option value="Service_Provider">Service Provider</option>
	 
  </select>
</div>

<div class="form-group">
  <label for="">Sex</label>
  <select class="form-control" name="sex">
	  <option value="">Select Sex</option>
	  <option value="male">Male</option>
	  <option value="female">Female</option>
	 
  </select>
</div>
<div class="form-group">
  <label for="">Password</label>
  <input type="password"
	class="form-control" name="password"  id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
	<input type="submit" value="Register" class="btn btn-success btn-out btn-block" name="register">
</div>


<?php

echo form_close();
?>



