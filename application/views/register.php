<?php include("inc/header.php"); ?>
    <?php echo form_open("welcome/adminSignup", ['class' => 'form-horizontal']); ?>
    <?php if ($msg = $this->session->flashdata('message')) {?>
    <div class="row">
        <div class="col-md-3">
                <div class="alert alert-dismissible alert-success">
        <?php echo $msg; ?>
                </div>
        </div>
        </div>
        <?php }?>
    <div class="c1">
    <br><h3><B>USER REGISTRATION</B></h3></div><hr>
    
        <label><h5>Username:</h5></label>
                <?php echo form_input(['name' => 'username', 'placeholder' => 'Username', 'value' => set_value('username')]); ?>
                <?php echo form_error('username', '<div class="d1">', '</div>'); ?>
    
                <br><br><label><h5>Email:   </h5></label>
                <?php echo form_input(['name'=> 'email','placeholder'=>'Email','value'=>set_value('email')]);?>
                <?php echo form_error('email','<div class="d1">','</div>'); ?>
                
                <br><br><label><h5>Gender:</h5></label>
                <select name="gender">
                <option value="">Select</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                <option value="others">Others</option>
                </select>
                <?php echo form_error('gender','<div class="d1">','</div>'); ?>
<br>
        <label><h5><br>Password:</h5></label>
                <?php echo form_password(['name'=> 'password','type'=>'password','placeholder'=>'Password']);?>
                <?php echo form_error('password','<div class="d1">','</div>'); ?>
                                    
                <br><br><div class="b1"><button type="submit" class="btn btn-primary">REGISTER</button>
        <?php echo anchor("welcome","BACK",['class'=>'btn btn-primary']);?></div>

<?php echo form_close(); ?>
<?php include("inc/footer.php"); ?>
