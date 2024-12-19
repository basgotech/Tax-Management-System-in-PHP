



<?php
echo form_open('company/register_com');

	
	?>
	
<div class="form-group">
  <label for="">Company Name</label>
  <input type="text"
	class="form-control"  name="com_name" id="" aria-describedby="helpId" placeholder="" required>
</div>
<div class="form-group">
	<input type="submit" value="Register" class="btn btn-success btn-out btn-block" name="register">
</div>


<?php

echo form_close();
?>



