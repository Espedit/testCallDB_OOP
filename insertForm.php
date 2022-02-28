<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/CSS/insertStyle.css">
    <title>registration</title>
  </head>
  <body>

  <?php

  include('function/function.php');
  usleep(1000000);
insertData();
   ?>
<form method="post">
  <div class="input-group mb-3">
  <label for="Name">Name</label>
<input type="text"  class="form-control" name="name"  required>
  </div>
  <div class="input-group mb-3" >
  <label for="Secname">Secname</label>
<input type="text" class="form-control" name="secname"  required>
  </div>
  <div class="input-group mb-3">
  <label for="Username">Username</label>
<input type="text" class="form-control" name="username"  required>
  </div>
  <div class="input-group mb-3">
  <label for="E-mail">E-mail</label>
<input type="text" class="form-control"  name="email"  required>
  </div>
  <div class="input-group mb-5">
  <label for="Password">Password</label>
<input type="password" class="form-control"  name="currpassword" required>
  </div>
  <div class="input-group mb-5">
<input type="submit" class="form-control"   name="reg" value="registration">
  </div>

</form>

  </body>
</html>
