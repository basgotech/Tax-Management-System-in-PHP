<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">BasgoTech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Blog Category</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="shop.html">Shop</a>
                            <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                            <a class="dropdown-item" href="product-single.html">Single Product</a>
                            <a class="dropdown-item" href="cart.html">Cart</a>
                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>

					<?php
  if($this->session->userdata('role')=='Admin'){

		?>

<li class="nav-item"><a href="<?php echo site_url();?>Admin" class="nav-link">Admin</a></li>
		<?php
	}
					?>
					
					
					<?php
if($this->session->userdata('id') !== null){
?>
 <li class="nav-item cta cta-colored"><a data-toggle="modal" data-target="#exampleModal" href="#" class="nav-link"><span
                                class="icon-contacts"></span>Sign Out</a></li>

<?php
}else{
?>
 <li class="nav-item cta cta-colored"><a href="<?php echo site_url('Auth/login');?>" class="nav-link"><span
                                class="icon-contacts"></span>Sign In</a></li>
<?php
}
					?>
                   

                </ul>
            </div>
        </div>
	</nav>


	
	<div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="staticBackdropLabel">Sign Out From the system</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body text-right">
			<a href="<?php echo site_url('Auth/signout');?>" class="btn btn-warning" > Sign Out</a>
		  </div>
		   
		</div>
	  </div>
	</div>
	
	
	