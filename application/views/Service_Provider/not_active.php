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
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                        
                                        <div class="col-md-3"></div>

                                        <div class="col-md-6">
                                            <div class="card">
                                               
                                                <?php
                                            if($check_req_status==0){
         ?>
          <div class="card-header bg-info">
                                                    Send Request
                                                </div>
                                                <div class="card-body">

         <?php include "notactive/form.php"; ?>
         <?php
                                            }else{
?>
 <div class="card-header bg-info">
                   Request Pending...
                                                </div>
                                                <div class="card-body">

<span class="bg-info">You request pending for accepted , please wait a moment</span>
<?php
                                            }
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                        	
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

          
			
</div>
</div>



