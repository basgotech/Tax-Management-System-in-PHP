
<style>
    table:hover{
        font-style: normal;
        color: #373737;
    }
</style>
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
				  <div class="row">
					  <div class="col-sm-12 col-md-12">
					  <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>Compnay Name</th>
                  <th>Company Type</th>
                  <th>Request Status</th>
                  <th>Company Document</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               	<?php

foreach ($get_req->result() as $key => $get_req) {
	?>
   <tr>
                  <td><?php echo $get_req->req_comp_name; ?></td>
                  <td><?php echo $get_req->req_comp_type; ?></td>
                  <td><?php echo $get_req->req_status; ?></td>
                  <td><a class="btn btn-info" href="<?php echo site_url();?>/uploads/<?php echo $get_req->req_document; ?>"><span class="ti-file"> Open File</span></a></td>
                  
                  <td>
                  <button id="<?php echo $get_req->req_by_id;?>" class="btn btn-success btn-out btn_appove">Approve</button>

                  <button id="<?php echo $get_req->req_by_id;?>" class="btn btn-danger btn-out btn_disappove">Dis Approve</button></td>

                  
              
                 
                </tr>
	<?php
}

?>
             
                </tbody>
                <tfoot>
                <tr>
                  <th>Compnay Name</th>
                  <th>Company Type</th>
                  <th>Request Status</th>
                  <th>Company Document</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
			</div>



			<!-- Modal for edit users -->
			
<div class="modal fade" id="btn_appove" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Approve Request</h5>
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
    $('.btn_appove').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>Employee/appove_request/"+id_emp,
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#btn_appove').modal("show");
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
