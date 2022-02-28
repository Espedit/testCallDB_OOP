<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/CSS/loginStyle.css">
    <title>Delete</title>

    <style media="screen">

    </style>
  </head>


  <body>

  <?php
  include('function/function.php');
deleteData();
usleep(1000000);



   ?>
<form method="post">
  <div class="input-group mb-3">
  <label for="id">id</label>
<input type="text"  class="form-control" name="id"  required>
  </div>
  <div class="input-group mb-3">
  <label for="Username">Username</label>
<input type="text" class="form-control" name="username"  required>
  </div>
  </div>
  <div class="input-group mb-5" style="margin-top:10px;">
<input type="submit" class="form-control"   name="remove" value="remove">
  </div>
</form>

  </body>
</html>
