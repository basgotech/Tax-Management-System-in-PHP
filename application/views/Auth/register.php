

<style>
    .common-img-bgg{
		background-color: wheat;
    }
	#txt {
		color: black;
	}
	.btn{
		border-radius: 20px;
	}
	
	
</style>

<body class="fix-menu">
   

    <section class="logsin d-flex text-center bg-primary common-img-bgg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">

					
					<?php echo form_open('Register/register_form');?>

                           
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
									<div class="text-center">
                                         </div>
                                        <h3 class="text-center txt-primary">Sign UP MeU Job Portal</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
									<h6 id="txt" class="text-left">First Name</h6>
                                    <input type="text" class="form-control" name="fname" placeholder="First Name">
                                    <span class="md-line"></span>
                                </div>
								 <div class="form-group">
									<h6 id="txt" class="text-left">Last Name</h6>
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
									<h6 id="txt" class="text-left">Username</h6>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
									<h6 id="txt" class="text-left">Phone</h6>
                                    <input type="number" class="form-control" name="phone" placeholder="Username">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
									<h6 id="txt" class="text-left">Gender</h6>
                                    <select class="form-control" name="sex">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <span class="md-line"></span>
                                </div>
								<div class="form-group">
									<h6 id="txt" class="text-left">Email ID</h6>
                                    <input type="email" class="form-control" name="email" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
								<div class="form-group">
									<h6 id="txt" class="text-left">Password</h6>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
								<h6 id="txt" class="text-left">Confirm Password</h6>
                                    <input type="password" name="con_password" class="form-control" placeholder="Confirm Password">
                                    <span class="md-line"></span>
                                </div>
                               
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign Up</button>
                                    </div>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-12 col-xs-12 forgot-phone text-center">
										<a href="Auth/login"> <span style="color:coral; font-style:bold">Go to Login</span></a><br>
                                    </div>
                                </div>
                               
                                <hr/>
                                

							</div>
							<?php echo form_close();?>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
</body>
