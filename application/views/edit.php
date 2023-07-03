<!DOCTYPE html>
<html>
<head>
    <title>Crud Application - Update users</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assests/css/bootstrap.min.css';?>">
</head>
<body>
<div class = "navbar navbar-dark bg-dark">
    <div class="container">
        <a href = "a" class="navbar-brand">CRUD APPLICATION</a>
    </div>
</div>

<div class="container" style="padding-top: 10px;">
    <h3>Update users</h3>   
    <hr>
    <form method="post" name="CreateUser" action="<?php echo base_url().'index.php/users/edit/'.$user['user_id']?>">
    <div class="row"> 
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo set_value('name',$user['Name']);?>" class="form-control">
                <?php echo form_error('name');?>

            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo set_value('email',$user['email']);?>" class="form-control">
                <?php echo form_error('email');?>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">UPDATE</button>
                <a href="<?php echo base_url().'index.php/users/index';?>" class="btn-secondary btn">CANCEL</a>
            </div>
        </div>
    </div>
</form>
</div>



</body>
</html>