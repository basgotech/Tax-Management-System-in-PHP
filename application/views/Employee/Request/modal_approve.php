

<?php
echo form_open('Employee/approve_req/'.$req_id.'');
	?>
    
<div class="form-group">
    Do you went to approve this request ?<br>
  <input type="submit"
	class="btn btn-primary" value="Approve Request">
</div>


<?php

echo form_close();


?>