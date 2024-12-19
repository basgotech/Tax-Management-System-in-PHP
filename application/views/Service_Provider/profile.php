<body>
    <!-- Pre-loader start -->
 <?php include "include/loader.php"; ?>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

           <?php include "include/top_nav.php"; ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                   
				<?php include "include/left_nav.php"; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
											
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4><?php echo $this->session->userdata('fname')." ".$this->session->userdata('lname');?></h4>
                                                        <span><?php echo $this->session->userdata('role'); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item"><a href=""><?php echo $this->session->userdata('phone');?></php></a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href=""><?php echo $this->session->userdata('address');?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
											<div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="2">Profile</th>
                                                                        <th>Change</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">F</h6>
                                                                                <p class="d-inline-block m-l-20">First Name</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $this->session->userdata('fname');?></p>
																		</td>
																		<td>
						<button id="1" class="btn btn-primary btn-outline-primary btn-sm btn-icon edit_profile"><i class="ti-pencil-alt"></i></button>     
																			
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">Last Name</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $this->session->userdata('lname');?></p>
																		</td>
																		<td>
						<button id="2" class="btn btn-primary btn-outline-primary btn-sm btn-icon edit_profile"><i class="ti-pencil-alt"></i></button>     
																			
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">P</h6>
                                                                                <p class="d-inline-block m-l-20">Phone</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $this->session->userdata('phone');?></p>
																		</td>
																		<td>
						<button id="3" class="btn btn-primary btn-outline-primary btn-sm btn-icon edit_profile"><i class="ti-pencil-alt"></i></button>     
																			
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">E</h6>
                                                                                <p class="d-inline-block m-l-20">Email</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $this->session->userdata('email');?></p>
																		</td>
																		<td>
						<button id="4" class="btn btn-primary btn-outline-primary btn-sm btn-icon edit_profile"><i class="ti-pencil-alt"></i></button>     
																			
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">A</h6>
                                                                                <p class="d-inline-block m-l-20">Address</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"><?php echo $this->session->userdata('address');?></p>
																		</td>
																		<td>
						<button id="5" class="btn btn-primary btn-outline-primary btn-sm btn-icon edit_profile"><i class="ti-pencil-alt"></i></button>     
																			
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">P</h6>
                                                                                <p class="d-inline-block m-l-20">Password</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20"> **********</p>
																		</td>
																		<td>
						<button id="6" class="btn btn-primary btn-outline-primary btn-sm btn-icon edit_profile"><i class="ti-pencil-alt"></i></button>     
																			
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

											
														
											</div>
				
											

                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <!-- Page-body start -->
                        

								
									
<!-- Page-body end -->
</div>
</div>


<!-- Modal -->




<!-- Modal -->
<div class="modal fade" id="fname" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
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
    $('.edit_profile').click(function() {
        id_emp = $(this).attr('id')
        $.ajax({
            url: "<?php echo base_url(); ?>profile/edit_profile/"+id_emp,
            method: 'post',
            data: {
                emp_id: id_emp
            },
            success: function(result) {
                $(".modal-body").html(result);
            }
        });


        $('#fname').modal("show");
    })
})
</script>
