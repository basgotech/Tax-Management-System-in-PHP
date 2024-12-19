
<style>
    table:hover{
        font-style: normal;
        color: #373737;
    }
</style>
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
				  <div class="row">
                      
                  <button class="btn btn-secondary btn_add">Add Item</button>
					  <div class="col-sm-12 col-md-12">
					  <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>Item Name</th>
                  <th>Item Category</th>
                  <th>Single Cost</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               	<?php

foreach ($item->result() as $key => $item) {
	?>
   <tr>
                  <td><?php echo $item->ilist_name; ?></td>
                  <td><?php echo $item->ilist_cate_id; ?></td>
                  <td><?php echo $item->ilist_single_amount; ?></td>
                  <td>
                  <button id="<?php echo $item->ilist_id;?>" class="btn btn-success btn-out btn_edit">Edit</button>

                  <button id="<?php echo $item->ilist_id;?>" class="btn btn-danger btn-out btn_delete">Delete</button></td>

                  
              
                 
                </tr>
	<?php
}

?>
             
                </tbody>
                <tfoot>
                <tr>
                  <th>Item Name</th>
                  <th>Item Category</th>
                  <th>Single Cost</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
			</div>



			<!-- Modal for edit users -->
			
<div class="modal fade" id="btn_add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Items</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				Body
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="btn_disappove" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Dis Approve Request</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				Body
			</div>
		</div>
	</div>
</div>

<
    
<script>
$(document).ready(function() {
    $('.btn_add').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>item/add_item/"+id_emp,
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#btn_add').modal("show");
    })
})
</script>

<script>
$(document).ready(function() {
    $('.btn_disappove').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>Employee/disappove_request/"+id_emp,
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#btn_disappove').modal("show");
    })
})
</script>



<script>
$(document).ready(function() {
    $('.btn_delete').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>Employee/delete_user/"+id_emp,
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#delete_user').modal("show");
    })
})
</script>
