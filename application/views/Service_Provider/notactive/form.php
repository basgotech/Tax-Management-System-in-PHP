

<?php echo form_open_multipart('Service_Provider/send_request'); ?>


<div class="form-group">
    <label for="">Compnay Name</label>
    <input type="text" class="form-control" name="comp_name" id="" required>
</div>
<div class="form-group">
    <label for="">Compnay Type</label>
    <select class="form-control" name="comp_type" id="">
        <?php
           
foreach ($comp_type->result() as $key => $get_com) {
    ?>
<option value="<?php echo $get_com->com_type;?>"><?php echo $get_com->com_type;?></option>
    <?php
}

        ?>
        <option value=""></option>
    </select>
    <div class="form-group">
        <label for="">Liecence File</label>
        <input type="file" name="userfile" class="form-control" id="">
    </div>
    <div class="form-group text-center">
        <input type="submit" value="Send Request" class="btn btn-primary">
    </div>
</div>

<?php echo form_close(); ?>