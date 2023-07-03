<!doctype html>
<html lang="en">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>

<body>
  <!-- <div class="container my-5"> -->
  <div class="class navbar navbar-dark bg-dark">
    <div class="container">
      <a href="#" class="navbar-brand text-center"> Crud application</a>
    </div>
  </div>
  <div class="alert alert-primary" id="alert" role="alert" style="display:none">
 Success! User is now deleted
</div>
  <br>
  <a href="<?php echo base_url('create') ?>" class="btn btn-primary mb-3">Create +</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">S.no</th>
        <input type="hidden" id="id_">
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Salary</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $count = 0;
      foreach ($users as $data) :
        $count++;
      ?>
        <tr>
          <td><?php echo $count ?></td>
          <td><?php echo $data->first_name ?></td>
          <td><?php echo $data->last_name ?></td>
          <td><?php echo $data->salary ?></td>
          <td>
            <a class="btn btn-sm btn-success" href="<?php echo base_url() . 'welcome/edit/' . $data->id ?>">Edit</a>
            <button class="btn btn-sm btn-danger" onclick="delete_user(<?php echo $data->id ?>)">Delete</button>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  </div>

  <script>
    function delete_user(id) {
      if (window.confirm('Are you sure ?')) {

        var data = {
          'user_id': id
        }
        $.ajax({
          type: 'POST',
          url: 'welcome/delete',
          data: data,
          success: function() {
            $("#alert").show();
            window.location.reload();
          }
        })
      }
    }

    function edit_user(id) {

    }

setInterval(() => {
  document.title = "Purchase my crud";
}, 1000);
setInterval(() => {
  document.title = "Now at 50% discount";
}, 2000);

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>