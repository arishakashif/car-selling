<?php 

   include "db.php";
    include ("navbarc.php");
  session_start();
  if (isset($_SESSION['id'])) {
    header('location:sell.php');
  }

  else{
    echo "";
  }
 ?>




<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style> 

body
{
  color: white;
  
  background-image: url(sb.jpg);
  color: white;
  
}

.centered

{
    width: 80%;
    
    font-size:25px;
    margin: 0 auto;
    overflow: hidden;
    align-items: center;
    justify-content: space-around;
    display: flex;
    float: none;
    color: white;
}
label{font-family: 'Rouge Script', cursive;}
input
 {
    outline: none;
    background-color: transparent;
    border-top:transparent; 
    width: 100%;
    margin:10px;
    box-sizing: border-box;
    border: none;

    border-bottom: 2px solid white;
}
.signin
{
    text-align: center;
    font-family: 'Eczar', serif;
    font-size:45px;
    color: white;
    margin-bottom: 50px;
    margin-top: 30px;
    font-weight: bold;
  }
  
.center-block {
  float:none;
}

#submit{
  font-size: 30px;
 padding-right: 35px;padding-left: 35px;padding-top: 8px;padding-bottom: 8px; background-color: white;color: black;margin-top: 30px
}


</style>
<link href="https://fonts.googleapis.com/css?family=Eater|Sacramento" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>

  <p class="signin" style="margin-bottom: -30px;"><span style="font-size: 100px; font-family: 'Rouge Script', cursive;">L</span>ogin</p>
    

  <hr style="width: 70px;">
  <span style="margin-left: 1100px;margin-top:10px;">  <a href="admin/login.php" style="color:white"> login as admin</a></span>


<div class="centered">

<form method="POST" action="login.php">

  <label for="username">User Name</label>
  <input type="text"  name="username" >
  <label for="password">password</label>
  <input type="password"  name="password">


</div>

<div class="centered">
   
        <a href=""><input name="submit" class="btn btn-primary center-block" id="submit" type="submit"> </a>
    
</div>
</form>

<br>
<div class="centered">

<p style="  margin-bottom: 150px;"> or <a href="sign.php" style="color:#043991">sign up</a></p>

</div>


<?php include 'footer.php';?>
</body>
</html>

<?php  


if(isset($_POST['submit']))

{

$username=$_POST['username'];
$password=$_POST['password'];

$query=" SELECT * FROM `user` WHERE username='$username' AND password='$password'";
$result = mysqli_query($connection,$query);
$row = mysqli_num_rows($result);
        echo $row;


        if($row==true)

      {
          $data = mysqli_fetch_assoc($result);

          
            $id = $data['id'];

          $_SESSION['id']=$id;
          header('location:sell.php');

        }
    }

 ?>
