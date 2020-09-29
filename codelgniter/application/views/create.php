<!DOCTYPE html>
<html>
<head>
        <title> Crud application - create user</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar.dark bg-dark">
    <div class="container">
    <a href="#" class="navbar-brand">CRUD APPLICATION</a>
</div>
</div>
<div class="container">
<h3>Create User</h3>
<hr>
<form method="post" name="create User" action ="<?php echo base_url().'index.php/User2/create';?>">
<div calss="row"> 
<div class="col-md-6">
       <div class="form-group">
           <lable>Name</lable>
           <input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
           <?php echo form_error('name');?>
       </div>
       <div class="form-group">
           <lable>Email</lable>
           <input type="email" name="email" value="<?php echo set_value('email');?>" class="form-control">
           <?php echo form_error('email');?>
       </div>
       <div class="form-group">
          <button class="btn btn-primary">Create</button>
          <a href="<?php echo base_url().'index.php/User2/index';?>" class="btn btn-secondary ">Cancel</a>
       </div>
       </div>
       </div>
       </form>
</body>
</html>