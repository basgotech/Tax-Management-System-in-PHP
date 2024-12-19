<nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                           
						
                        <?php
if($this->session->userdata('role')=='Service_Provider'){
?>
 <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Items</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="<?php echo site_url('item'); ?>">
                                        <span class="pcoded-micon"><i class="ti-list"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Items</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>	
                            </ul>

<?php
}else{
?>
 <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Status</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="<?php echo site_url('Service_Provider/not_active'); ?>">
                                        <span class="pcoded-micon"><i class="ti-dashboard"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Status</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>	
                            </ul>

<?php
}

?>
                           

						
                           
			
							

                            
                        </div>
                    </nav>
