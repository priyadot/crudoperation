<!DOCTYPE html>
<html>
<head>
        <title> Crud application - view users</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
<div class="navbar navbar.dark bg-dark">
    <div class="container">
    <a href="#" class="navbar-brand">CRUD APPLICATION</a>
</div>
</div>
<div class="container" style="padding-top: 10px;">
<div class="row">
  <div class="col-md-12">
       <?php $success = $this->session->userdata('success');
       if($success!='') {
       ?>
       <div class="alert alert-success"><?php echo $success; ?></div>
       <?php
       }
       ?>
       </div>
       <div class="col-md-12">
       <?php $failure = $this->session->userdata('failure');
       if($failure!='') {
         ?>
         <div class="alert alert-failure"><?php echo $failure; ?></div>
         <?php
       
       }
       ?>
       </div>
       </div>
     <div class="row">
        <div class="col-5"><h3>View User</h3></div>
             <div class="col-5 text-left">
             
                 <a href=<?php echo base_url().'index.php/User2/create';?> class="btn btn-primary">Create</a>
              </div>
              <hr>
           </div>
         
      </div> 
    </div>           

     <div class='row'>
        <div class="col-md-6">
           <table class="table table-striped">
             <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Edit</th>
               <th>Delete</th>
            </tr>
            <?php if (!empty($userdb)) {  foreach($userdb as $user2)  {?>
            <tr>
            <td><?php echo $user2['ID']?></td>
            <td><?php echo $user2['name']?></td>
            <td><?php echo $user2['email']?></td>
                  <td>
                     <a href="<?php echo base_url().'index.php/User2/edit/'.$user2['ID']?>" class="btn btn-primary">Edit</a>
                   </td>
                   <td>
                     <a href="<?php echo base_url().'index.php/User2/delete/'.$user2['ID']?>" class="btn btn-primary">Delete</a>
                   </td>
            </tr>
               <?php } } else {?>
                   <tr>
                     <td colspan="5"> Record Not Found</td>
                   </tr>
               <?php } ?>
             
           </table>
       </div>
       </div>
     </div>
</body>
</html>