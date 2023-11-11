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
<style>
        .b1 {
            gap: 100px;
            padding: 10px 20px;
            color: #fff;
            border: 2px;
            cursor: pointer;
            margin-left: 650px;
        }
        .c1{
            text-align:center;
        }
        label {
            width: 100px; 
            text-align: left;
            margin-left: 625px;
        }
        .d1 {
            color: red;
            font-size: 15px;
            margin-left: 1000px;
            margin-top:-30px;
        }
        .button {
			      display: flex;
            gap: 100px;
            padding: 10px 20px;
            color: #fff;
            border: 2px;
            cursor: pointer;
            margin-right: 20px;
			
		}
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
<div class="container-fluid">
<a class="navbar-brand" style="color:#fff;"href="#">ASSET MANAGEMENT SYSTEM</a></div>
      <div class="col-lg-2" style="margin-top:15px;" id="bs-example-navbar-collapse-2">   
<div class="btn-group">       
<a href="#" class="btn btn-default">Settings</a>        
<a href="#" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo anchor("Admin/dashboard","Dashboard",['class'=>'btn btn-primary']);?></li>
            <li><?php echo anchor("welcome/logout","Logout",['class'=>'btn btn-primary']);?></li>
          </ul>
        </div></div></nav>
