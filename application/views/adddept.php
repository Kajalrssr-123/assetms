<?php include("inc/header.php");?>
    <?php echo form_open("Admin/createdept",['class' => 'form-horizontal']);?>
    <?php if($msg = $this->session->flashdata('message')){?>
        <div class="row">
        <div class="col-md-3">
                <div class="alert alert-dismissible alert-success">
    <?php echo $msg; ?>
    </div></div>
        </div>
        <?php }?>
        <br>
        <div class="c1">
        <h3><B>Add Department</h3></B></div>
        <hr><br>
            
            <label><h5>College:</h5></label>
            <?php echo form_input(['name'=> 'collegename','placeholder'=>'Collegename','value'=>set_value('collegename')]);?><br>
            <?php echo form_error('collegename','<div class="d1">','</div>'); ?><br>

        <label><h5>Dept.Name:</h5></label>
        <?php echo form_input(['name'=> 'deptname','placeholder'=>'Deptname','value'=>set_value('deptname')]);?><br>
        <?php echo form_error('deptname', '<div class="d1">', '</div>'); ?><br>

            <label><h5>Class:</h5></label>
            <?php echo form_input(['name'=> 'classname','placeholder'=>'Classname','value'=>set_value('classname')]);?><br>
            <?php echo form_error('classname','<div class="d1">','</div>'); ?>
                    
            <br><div class="b1"><button type="submit" class="btn btn-primary">ADD</button>
        <?php echo anchor("Admin/dashboard","BACK",['class'=>'btn btn-primary']);?></div>
        
<?php echo form_close();?>
<?php include("inc/footer.php");?>