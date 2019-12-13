<?php   


 include "../db.php";
 
  session_start();
  if (isset($_SESSION['uname'])) {
    echo "";
  }

  else{
        ?>

        <script >alert("Login First");</script>    
  
        <?php
        header('location:login.php');
  }


   ?>
<!DOCTYPE html>
<html>
<head>


  <title>AdminPanel</title>

  <link rel="shortcut icon" href="logoimagelink" type="image/x-icon">


  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Rouge+Script" rel="stylesheet">

<style type="text/css">

body{
    color:#efe6d2;
    background: url("admin.jpeg");
    background-size: cover;
    text-align: center;
    }

#Main{
      font-size: 95px;
      color: white;
      font-family: Rouge Script;

    }

#logout{

 margin-right: 50px;
  float: right;
}

a{
  font-family: Playfair Display;
  color: #aae5ff;
}

.option{
  font-family: Playfair Display;
}

.categ{
  font-size: 50px;
      font-family: Rouge Script;
}

</style>








</head>
<body>
<h3><span id="Main" >Admin Panel</span>
  <br><a id="logout"  href="logout.php">Logout</a></h3>
<br><br>
    <table width="100%" >
      <tr>
          <td width="50%">
  <hr style="margin-left: 80px; margin-right: 80px;  ">

  

              <h1 class="categ">Add Car Record:</h1>

     <h3><a href="addinall.php">Under All Cars Category</a></h3>
      <h3><a href="addinlatest.php">Under Latest Cars Category</a></h3>

<br><br>

     <h1 class="categ">Delete Car Record:</h1>

     <h3><a href="deletefromall.php">From All Cars Category</a></h3>
      <h3><a href="deletefromlatest.php">From Latest Cars Category</a></h3>
      
    <hr style="margin-left: 80px; margin-right: 80px;  ">




          </td>
          <td width="50%" style="text-align: left;">


 <hr style="margin-left: 20px; margin-right: 100px;  ">

      <h1 class="option"><a href="viewuser.php">Click here</a> to view all Users and their details.</h1>


            <hr style="margin-left: 20px; margin-right: 100px;  ">

      <h1 class="option"><a href="viewcontacts.php">Click here</a> to view contact details and messages from users.</h1>

      <hr style="margin-left: 20px; margin-right: 100px;  ">
  
      <h1 class="option"><a href="viewreview.php">Click here</a> to view all reviews from users.</h1>

          <hr style="margin-left: 20px; margin-right: 100px;  ">



          </td>

      </tr> 

    </table>  

   

</body>
</html>

