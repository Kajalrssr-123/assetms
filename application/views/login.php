<?php include("inc/header.php");?>
    <?php echo form_open("welcome/signin",['class' => 'form-horizontal']);?>
    <?php if($msg = $this->session->flashdata('message')){?>
        <div class="row">
        <div class="col-md-3">
                <div class="alert alert-dismissible alert-danger">
    <?php echo $msg; ?>
    </div></div>
        </div>
        <?php }?>
        <br>
        <div class="c1">
        <h3><B>LOGIN</h3></B></div>
        <hr>
        <label><h5>Email:</h5></label>
            <?php echo form_input(['name'=> 'email','placeholder'=>'Email','value'=>set_value('email')]);?><br>
            <?php echo form_error('email','<div class="d1">','</div>'); ?>
        
            <label><h5><br>Password:</h5></label>
            <?php echo form_password(['name'=> 'password','type'=>'password','placeholder'=>'Password']);?><br>
            <?php echo form_error('password','<div class="d1">','</div>'); ?>
                    
            <br><div class="b1"><button type="submit" class="btn btn-primary">LOGIN</button>
        <?php echo anchor("welcome","BACK",['class'=>'btn btn-primary']);?></div>
        
<?php echo form_close();?>
<?php include("inc/footer.php");?>