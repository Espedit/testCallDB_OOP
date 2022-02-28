<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>getViewDataForm</title>

    <style media="screen">
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #2222;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: # #2A6BA1;
  }
    </style>
  </head>

  <body>

    <?php

    include('function/function.php');

   getViewData();





              echo" <table>";
              echo "<tr>
                 <th>Name</th>
                 <th>Secname</th>
                 <th>username</th>
                 <th>email</th>
                 </tr>";

while($row=$fetch->fetch_assoc()){

  echo "<tr>
     <th>{$row['name']}</th>
     <th>{$row['secname']}</th>
     <th>{$row['username']}</th>
     <th>{$row['email']}</th>
     </tr>";


}

                 echo "</table>";
     ?>

  </body>
</html>
