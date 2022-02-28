
<?php



function insertData ()

{
   include('callDB.php');

if(isset($_REQUEST['reg'])){

$name=strip_tags($_REQUEST['name']);
$secname=strip_tags($_REQUEST['secname']);
$username=strip_tags($_REQUEST['username']);
$email=strip_tags($_REQUEST['email']);
$password=strip_tags($_REQUEST['currpassword']);




if (preg_match("/@/",$_REQUEST['email']) == '') {
  echo "<script>alert('Insert @ in address e-mail')</script>";

  $page = $_SERVER['PHP_SELF'];
$sec = "1";
 header("Refresh: $sec; url=$page");

exit();
}


if(strlen($_REQUEST['currpassword']) >= 8)

  {

echo 'OK';

}else{
  echo" <script>alert('minimum password length 8' )</script>";
  $page = $_SERVER['PHP_SELF'];
$sec = "1";
 header("Refresh: $sec; url=$page");
exit();
}



$sqlcheck="SELECT username FROM usertwo WHERE username='$username'  ";

$outcheck=$conn->query($sqlcheck);



while($row=$outcheck->fetch_assoc())
{

  if(in_array($username,$row))
  {

    echo "<script>alert('Warning: username was present in DB')</script>";
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
     header("Refresh: $sec; url=$page");
       exit();

  }
  }





    $sql="INSERT INTO usertwo (name,secname,username,email,password)
    VALUES('$name','$secname','$username','$email','$password')";

    if($conn->query($sql)){

      echo "<script>alert('OK: New Row inserted')</script>";
      $page = $_SERVER['PHP_SELF'];
      $sec = "2";
       header("Refresh: $sec; url=$page");
         exit();





}







  //   echo "<script>alert('Warning: new row eas not inserted..retry !')</script>";
  //   $page = $_SERVER['PHP_SELF'];
  // $sec = "1";
  //  header("Refresh: $sec; url=$page");
  // exit();
  //









$conn->close();
}

}






function updateForm()

{
  include('callDB.php');



if(isset($_REQUEST['update'])){

$id=$_REQUEST['id'];
  $name=$_REQUEST['name'];
  $secname=$_REQUEST['secname'];
  $username=$_REQUEST['username'];
  $email=$_REQUEST['email'];
  $password=$_REQUEST['password'];


  if (preg_match("/@/",$_REQUEST['email']) == '') {
    echo "<script>alert('Insert @ in address e-mail')</script>";

    $page = $_SERVER['PHP_SELF'];
  $sec = "1";
   header("Refresh: $sec; url=$page");

  exit();
  }


  if(strlen($_REQUEST['password']) >= 8)

    {
    true;
  }else{
    echo" <script>alert('minimum password length 8' )</script>";
    $page = $_SERVER['PHP_SELF'];
  $sec = "1";
   header("Refresh: $sec; url=$page");
  exit();
  }


$sqlcheck="SELECT id FROM usertwo WHERE id='$id'  ";

$outcheck=$conn->query($sqlcheck);

if($outcheck->num_rows >  0)
{

while($row=$outcheck->fetch_assoc())
{

  if(in_array($id,$row))
  {

    $query="UPDATE usertwo SET  id='$id',
     name='$name',
    secname='$secname',
    username='$username',
    email='$email',
    password='$password'
    WHERE id='$id'";


if($conn->query($query))

{
   echo "<script>alert('Ok: Current row is update')</script>";
     $page = $_SERVER['PHP_SELF'];
   $sec = "2";
    header("Refresh: $sec; url=$page");
   exit();

 }

   else{

       echo "Error updating record: " . $conn->error;
   }





 }

}


}else{


  echo "<script>alert('Not Found')</script>";
  $page = $_SERVER['PHP_SELF'];
$sec = "1";
 header("Refresh: $sec; url=$page");
exit();
}

}

$conn->close();

}


function deleteData()
{


    include('callDB.php');
if(isset($_REQUEST['remove'])){

$id=$_REQUEST['id'];
$username=$_REQUEST['username'];


$sql = "SELECT id,username  FROM usertwo  WHERE id='$id'
AND username='$username'";


$check=$conn->query($sql);

if($check->num_rows > 0)
{

  while($row=$check->fetch_assoc())
{
if(in_array($id,$row) && in_array($username,$row))
{

$sqlremove= "DELETE FROM usertwo WHERE id='$id' AND username='$username' ";

if($conn->query($sqlremove))

{echo "<script>alert('Current row in now delete..OK')</script>";
$page = $_SERVER['PHP_SELF'];
   $sec = "1";
    header("Refresh: $sec; url=$page");
      exit();
}
else{

   echo "Error Remove record: " . $conn->error;

}

}
}

}else{


echo "<script>alert('Warning: Id or username not found')</script>";
$page = $_SERVER['PHP_SELF'];
   $sec = "1";
    header("Refresh: $sec; url=$page");
      exit();

}

$conn->close();

}
}









function getViewData()

{
global $sql;
global $fetch;

   include('callDB.php');
$sql='SELECT * FROM usertwo ';



$fetch=$conn->query($sql);



}


function getViewSingleData($user)

{


global $sql;
global $fetch;
   include('callDB.php');

$sql="SELECT *  FROM usertwo  WHERE username='$user' ";


  $fetch=$conn->query($sql);

}


function  loginData ()

{

include('callDB.php');

if(isset($_REQUEST['login'])){



    session_start();

    $_SESSION['usernamesess'] =$username=$_REQUEST['username'];
$password=$_REQUEST['password'];



if(strlen($_REQUEST['password']) >= 8)

  {
  true;
}else{
  echo" <script>alert('minimum password length 8' )</script>";
  $page = $_SERVER['PHP_SELF'];
$sec = "1";
 header("Refresh: $sec; url=$page");
exit();
}

  $sqlogin= "SELECT username,password FROM usertwo
  WHERE username='$username' AND
  password='$password' ";



  $check=$conn->query($sqlogin);


  if($check->num_rows > 0){

  while($result=$check->fetch_assoc()){



      if(in_array($username,$result) && in_array($password,$result)){


setcookie('user',$username);


   // $sqlview="SELECT *  FROM usertwo  WHERE username='$username' ";



$link='getViewSingleDataForm.php';
$sec='2';
header("Location:$link");
exit();






      }

  }}else{

echo "<script>alert('Warning: username or password not found..please retry')</script>";
    $page = $_SERVER['PHP_SELF'];
  $sec = "1";
   header("Refresh: $sec; url=$page");
  exit();

  }
}

}









?>
