<div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
				  <div class="row">
					  <div class="col-sm-12 col-md-12">
					  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
				<?php

foreach ($company->result() as $key => $company) {
	?>
   <tr>
       
                  <td><?php echo $company->com_type; ?></td>
                  <td><button id="<?php echo $company->com_type_id;?>" class="btn btn-success btn-out btn_edit">Edit</button>
				  
				  <button id="<?php echo $company->com_type_id;?>" class="btn btn-danger btn-out btn_delete">Delete</button></td>
                </tr>
	<?php
}

?>
             
                </tbody>
                <tfoot>
                <tr>
				          <th>Name</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
			</div>



			<!-- Modal for edit users -->
			
<div class="modal fade" id="edit_com" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Compnay Name</h5>
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

<div class="modal fade" id="reg_com" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Register Company</h5>
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

<div class="modal fade" id="delete_com" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Delete Company</h5>
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

<script>
$(document).ready(function() {
    $('.btn_edit').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>Company/edit_com/"+id_emp,
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#edit_com').modal("show");
    })
})
</script>

<script>
$(document).ready(function() {
    $('.btn_reg_com').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>Company/reg_company/",
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#reg_com').modal("show");
    })
})
</script>



<script>
$(document).ready(function() {
    $('.btn_delete').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>Company/delete_com/"+id_emp,
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#delete_com').modal("show");
    })
})
</script>
