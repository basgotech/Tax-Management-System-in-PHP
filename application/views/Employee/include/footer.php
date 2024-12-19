<script type="text/javascript">


<?php if($this->session->flashdata('suc')){ ?>
    toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
<?php }else if($this->session->flashdata('worng')){  ?>
    toastr.error("<?php echo $this->session->flashdata('worng'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>
<?php
	$this->session->unset_userdata ( 'suc' ); ?>
	
	<?php
    $this->session->unset_userdata ( 'worng' ); ?>

</script>


 
<script type="text/javascript" src="<?php echo site_url();?>assets/admin/assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>assets/admin/assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>assets/admin/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>assets/admin/assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo site_url();?>assets/admin/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo site_url();?>assets/admin/assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>assets/admin/assets/js/modernizr/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="<?php echo site_url();?>assets/admin/assets/js/classie/classie.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo site_url();?>assets/admin/assets/js/script.js"></script>
<script src="<?php echo site_url();?>assets/admin/assets/js/pcoded.min.js"></script>
<script src="<?php echo site_url();?>assets/admin/assets/js/demo-12.js"></script>
<script src="<?php echo site_url();?>assets/admin/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo site_url();?>assets/admin/assets/datatables/jquery.dataTables.js"></script>
<script src="<?php echo site_url();?>assets/admin/assets/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- Custom js -->
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover({
            html: true,
            content: function() {
                return $('#primary-popover-content').html();
            }
        });
    });
</script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
    });
  });
</script>
</body>

