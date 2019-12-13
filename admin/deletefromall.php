<?php  

include "../db.php";
include "navbarb.php";
?>

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
<h3><span id="Main" >Cars Record</span>
  <br><a id="logout"  href="logout.php">Logout</a></h3>
<br><br>
    <table width="90%" align="center" style="border: 2px solid white;">
      
      <tr style="margin: auto; border: 2px solid white; ">
        <th>  No. </th>
        <th style= "border-left: 2px inset white;text-align: center;font-size: 20px;"> Car Name </th>
        <th style="	border-left: 2px inset white;text-align: center;font-size: 20px;"> Registration Number </th>
        <th style="	border-left: 2px inset white;text-align: center;font-size: 20px;"> Model </th>
        <th style="	border-left: 2px inset white;text-align: center;font-size: 20px;"> Make </th>
        <th style="	border-left: 2px inset white;text-align: center;font-size: 20px;"> Price </th>
        <th style="	border-left: 2px inset white;text-align: center;font-size: 20px;"> Color </th>
        <th style="	border-left: 2px inset white;text-align: center;font-size: 20px;"> Package </th>
        <th style="	border-left: 2px inset white;text-align: center;font-size: 20px;"> Delete Option </th>
      </tr>
 
      <?php   


        include("../db.php");

        $qry = "SELECT * FROM `cars`";
        $result = mysqli_query($connection,$qry);


          $count = 0;
        while ($data = mysqli_fetch_assoc($result)) {
          $count++;
          ?>


            <tr align="center" style="border: 2px solid white; text-align: left;">  
              
               <td style="padding-left: 10px;"> <?php  echo $count; ?></td>
            
                <td > <?php  echo $data['car name'] ; ?></td>
           
                <td > <?php echo $data['registration number'] ; ?></td>
    
                <td > <?php  echo $data['model']; ?></td>

                <td> <?php  echo $data['make']; ?></td>
            
                <td> <?php  echo $data['price']; ?></td>

                <td> <?php  echo $data['color']; ?></td>

                <td> <?php  echo $data['Package']; ?></td>
            
            <td style="	border-left: 2px inset white;"><a href="alldlt.php?sid=<?php echo $data['id']; ?>"> <button style="width:90%; background-color: black; color: white;margin-left: 12px;">DELETE</button></a></td>
    
               </tr>

          <?php

        }


       ?>

    </table>  

   

</body>
</html>

