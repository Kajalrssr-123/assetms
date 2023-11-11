
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Asset Management System</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
 
crossorigin="anonymous">


  
<script
 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 
crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
<script src="<?php echo base_url('assets/js/jquery-3.1.0.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
<div class="container-fluid">
<a class="navbar-brand" style="color:#fff;"href="#">ASSET MANAGEMENT SYSTEM</a></div>
      <div class="col-lg-2" style="margin-top:15px;" id="bs-example-navbar-collapse-2">   
<div class="btn-group">
<div class="container-fluid">
<a class="navbar-brand" style="color:#fff;"href="#"></a></div>
					<?php echo anchor("welcome/adminRegister","REGISTER",['class'=>'btn btn-primary']);?>
					 		<?php echo anchor("welcome/login","LOGIN",['class'=>'btn btn-primary']);?></div>
		</div></nav>
		<br><br>
		<h2 style='color:red';><B> ABOUT US</h2>
		<P style='font-size:20px; font-family:Times New Roman; line-height:2;'>An Asset Management System for a college is a crucial tool to efficiently manage and maintain the physical assets owned by the institution.
			 It typically consists of two main user roles: administrators and users.It is the process of assigning, transferring,
			  and maintaining assets while providing users with a convenient means of requesting and reporting on assets they need. 
			  It helps the institution maintain a well-organized and efficient system for asset management, reducing losses and ensuring the 
			  availability of resources when needed.</p>
<?php include("inc/footer.php");?>