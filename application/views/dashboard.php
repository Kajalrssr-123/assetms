<?php include("inc/header.php");?>
        <br>
        <div class="container">
        <h3><B>ADMIN DASHBOARD</B></h3>
        <?php $username = $this->session->userdata('username');?>
        <?php $email = $this->session->userdata('email');?>
        <h5><B>Welcome <?php echo $username;?></h5></B><br>
        <?php echo anchor("Admin/adddept","ADD DEPARTMENT",['class'=>'btn btn-primary']);?>
        <?php echo anchor("Admin/addasset","ADD ASSET",['class'=>'btn btn-primary']);?>
        <hr>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Department</th>
                        <th scope="col">Class</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($admin)):?>
                        <?php foreach($admin as $adm):?>
                    <tr class="table-active">
                        <td><?php echo $adm->dept_id?></td>
                        <td><?php echo $adm->deptname?></td>
                        <td><?php echo $adm->classname?></td>
                        <td><?php echo anchor("Admin/viewasset","VIEW",['class'=>'btn btn-primary']);?></td>
                    </tr>
                    <?php endforeach;?>
                <?php else:?>
                    <tr>
                        <td>No record found!</td>
                </tr>
                <?php endif;?>
                </table>
        </div>
    </div>
<?php include("inc/footer.php");?>