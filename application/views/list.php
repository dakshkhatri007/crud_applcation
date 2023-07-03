<!DOCTYPE html>
<html>
<head>
    <title>Crud Application - View Users</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assests/css/bootstrap.min.css';?>">
</head>
<body>
<div class = "navbar navbar-dark bg-dark">
    <div class="container">
        <a href = "a" class="navbar-brand">CRUD APPLICATION</a>
    </div>
</div>

<div class="container" style="padding-top: 10px;">
<div class="row">
    <div class="col-md-12">
        <?php
        $success = $this->session->userdata('success');
        if($success != ""){
        ?>
        <div class="alert alert-success"><?php echo $success;?></div>
        <?php 
        }
        ?>
        <?php
        $failure = $this->session->userdata('failure');
        if($failure != ""){
        ?>
        <div class="alert alert-success"><?php echo $failure;?></div>
        <?php 
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
    </div>
    <div class="col-md-6"><h3>View Users</h3></div>
    <div class="col-md-6" text-right >
        <a href="<?php echo base_url().'index.php/users/create';?>" class="btn btn-primary">Create</a>
    </div>
</div>
<hr>

    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th width = "70">edit</th>
                    <th width = "70">delete</th>
                </tr>

                <?php if(!empty($users)) { foreach($users as $users){?> 
                <tr>
                    <td><?php echo $users['user_id']?></td>
                    <td><?php echo $users['Name']?></td>
                    <td><?php echo $users['email']?></td>
                    <td>
                        <a href="<?php echo base_url().'index.php/users/edit/'.$users['user_id']?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url().'index.php/users/delete/'.$users['user_id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }} else { ?>
                    <tr>
                        <td colspan = '5'>Records not found </td>
                    </tr>
                 <?php } ?>
            </table>
        </div>
    </div>

</div>

</body>
</html>