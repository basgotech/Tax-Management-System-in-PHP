

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




    <section class="login p-fixed d-flex text-center bg-primary common-img-bgg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">

					
					<?php echo form_open('Auth/login_form');?>

                           
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
									<div class="text-center">
                            </div>
                                        <h3 class="text-center txt-primary">Sign In Tax Managment</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
									<h6 id="txt" class="text-left">Username</h6>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
								<h6 id="txt" class="text-left">Password</h6>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-12 col-xs-12 forgot-phone text-center">
										<h6 id="txt">Don’t have an account? </h6>
										<a href="<?php echo base_url('Register'); ?>"> <span style="color:coral; font-style:bold">SIGN UP NOW</span></a><br>
                                        <a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
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
 