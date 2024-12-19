<div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
				  <div class="row">
					  <div class="col-sm-12 col-md-12">
					  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th>sex</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
				<?php

foreach ($users->result() as $key => $user) {
	?>
   <tr>
                  <td><?php echo $user->fname." ".$user->lname;?></td>
                  <td><?php echo $user->email; ?></td>
                  <td><?php echo $user->phone; ?></td>
                  <td><?php echo $user->role; ?></td>
                  <td><?php echo $user->sex; ?></td>
                  <td><?php echo $user->address; ?></td>
                  <td><button id="<?php echo $user->id;?>" class="btn btn-success btn-out btn_edit">Edit</button>
				  
				  <button id="<?php echo $user->id;?>" class="btn btn-danger btn-out btn_delete">Delete</button></td>
                </tr>
	<?php
}

?>
             
                </tbody>
                <tfoot>
                <tr>
				          <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th>sex</th>
                  <th>Address</th>
                </tr>
                </tfoot>
              </table>
			</div>



			<!-- Modal for edit users -->
			
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit User</h5>
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

<div class="modal fade" id="reg_user" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Register User</h5>
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

<div class="modal fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Delete User</h5>
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
            url: "<?php echo base_url(); ?>Users/edit_user/"+id_emp,
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#edit_user').modal("show");
    })
})
</script>

<script>
$(document).ready(function() {
    $('.btn_reg_user').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>Users/reg_user/"+id_emp,
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#reg_user').modal("show");
    })
})
</script>



<script>
$(document).ready(function() {
    $('.btn_delete').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>Users/delete_user/"+id_emp,
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
