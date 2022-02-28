<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/CSS/loginstyle.css">
    <title>login</title>
  </head>
  <body>

    <?php
include('function/function.php');
usleep(1000000);
loginData();
     ?>

    <form method="post" >
      <div class="input-group mb-3">
      <label for="Name">Username</label>
    <input type="text"  class="form-control" name="username"required>
    <input type="hidden" name="catchuser">
      </div>
      <div class="input-group mb-3" >
      <label for="Secname">Password</label>
    <input type="password" class="form-control" name="password"  required>
      </div>
      <div class="input-group mb-8">
    <input type="submit" class="form-control"   name="login" value="login">
      </div>
    </form>


  </body>
</html>
