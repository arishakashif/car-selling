<?php include "navbarb.php"; ?>
<!DOCTYPE html>
<html>
<head>


 <title>Edge of wheels</title>




  
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
 td
{border-left: 2px inset white; padding: 7px ;}


</style>








</head>
<body>
<h3><span id="Main" >View Contacts</span>
  <br><a id="logout"  href="logout.php">Logout</a></h3>
<br><br>
    <table width="90%" align="center" style="border: 2px solid white;">
      
      <tr style="margin: auto; border: 2px solid white; ">
        <th>  No. </th>
        <th style= "border-left: 2px inset white;text-align: center;font-size: 20px;"> First Name </th>
        <th style= "border-left: 2px inset white;text-align: center;font-size: 20px;">  Last Name </th>
        <th style= "border-left: 2px inset white;text-align: center;font-size: 20px;"> Email </th>
        <th style= "border-left: 2px inset white;text-align: center;font-size: 20px;"> Phone No </th>
        <th style= "border-left: 2px inset white;text-align: center;font-size: 20px;"> Message </th>
      
      </tr>

      <?php   


        include("../db.php");

        $qry = "SELECT * FROM `contact`";
        $result = mysqli_query($connection,$qry);


          $count = 0;
        while ($data = mysqli_fetch_assoc($result)) {
          $count++;
          ?>


            <tr align="center" style="border: 2px solid white; text-align: left;">  
                <td style="padding-left: 10px;"> <?php  echo $count; ?></td>
            


            
                <td> <?php  echo $data['fname'] ; ?></td>
           
                   <td> <?php  echo $data['lname'] ; ?></td>
    
                <td> <?php  echo $data['email']; ?></td>
       

             
                <td> <?php  echo $data['phone no']; ?></td>
            

         
                <td> <?php  echo $data['message']; ?></td>
            </tr>

          <?php

        }


       ?>

    </table>  

   

</body>
</html>

