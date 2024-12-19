

<?php
echo form_open('Employee/disapprove_req/'.$req_id.'');
	?>
    
<div class="form-group">
    Do you went to Dis approve this request ?<br>
  <input type="submit"
	class="btn btn-danger" value="Dis Approve Request">
</div>


<?php

echo form_close();


?>