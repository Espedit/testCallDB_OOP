<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/CSS/indexstyle.css">


  </head>
  <body>

     <div class="header">
       <div class='loader'></div> <h2>test_CallDB_OOP</h2></div>


  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<div class="navbar">

  <script>



    function toggleLoader(){

      const loader=document.querySelector('.loader');
      const  button= document.querySelector('.btn');
     button.classList.toggle('active');
     loader.classList.toggle('active');




    }





  </script>

<?php usleep(1000000); ?>
<a href="insertForm.php" role="button" class="btn btn-primary btn-lg"
onclick="    let timerId = setInterval(() => toggleLoader(), 500);
setTimeout(() => { clearInterval(timerId); toggleLoader(); }, 2000); timerId;" >


Inserted</a>


<a href="loginForm.php" role="button" class="btn btn-primary btn-lg"
onclick="    let timerId = setInterval(() => toggleLoader(), 500);
setTimeout(() => { clearInterval(timerId); toggleLoader(); }, 2000); timerId;" >
Login</a>

<a href="updateForm.php" role="button" class="btn btn-primary btn-lg"
onclick="    let timerId = setInterval(() => toggleLoader(), 500);
setTimeout(() => { clearInterval(timerId); toggleLoader(); }, 2000); timerId;" >
Update</a>


<a href="deleteForm.php" role="button" class="btn btn-primary btn-lg"
onclick=" let timerId = setInterval(() => toggleLoader(), 500);
setTimeout(() => { clearInterval(timerId); toggleLoader(); }, 2000); timerId;" >
Delete</a>
</div>

  </body>
</html>
