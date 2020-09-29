<!DOCTYPE html>
<html>
<head>
        <title> Crud application - Update User</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar.dark bg-dark">
    <div class="container">
    <a href="#" class="navbar-brand">CRUD APPLICATION</a>
</div>
</div>
<div class="container">
<h3>Update User</h3>
<form method="post" name="createUser" action ="<?php echo base_url().'index.php/User2/edit/'.$user['ID'];?>">
<div class="row">
<div class="col-md-6">
       <div class="form-group">
           <lable>Name</lable>
           <input type="text" name="name" value="<?php echo set_value('name',$user['name']);?>" class="form-control">
           <?php echo form_error('name');?>
       </div>
       <div class="form-group">
           <lable>Email</lable>
           <input type="text" name="email" value="<?php echo set_value('email',$user['email']);?>" class="form-control">
           <?php echo form_error('email');?>
       </div>
       <div class="form-group">
          <button class="btn btn-primary">Update</button>
          <a href="" class="btn btn-secondary ">Cancel</a>
       </div>
       </div>
       </div>
       </form>
</body>
</html>