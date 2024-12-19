

<?php
echo form_open('item/add_item_model/');
	?>
   <div class="form-group">
       <label for="">Item Name</label>
  <input type="text"
	class="form-control" name="item_name" required>
</div> 
<div class="form-group">
    <label for="">Item Category</label>
  <input type="text"
	class="form-control" name="item_category" required>
</div> 
<div class="form-group">
    <label for="">Item Single Amount</label>
  <input type="text"
	class="form-control" name="item_single_amount" required>
</div> 
<div class="form-group">
  <input type="submit"
	class="btn btn-primary" value="Add Item">
</div>


<?php

echo form_close();


?>