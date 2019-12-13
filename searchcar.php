
<?php 

   include ("db.php");
include ("navbarc.php");

   session_start();



?>
<!DOCTYPE html>
<html>
<head>
  <title>Edge of Wheels</title>

  <link rel="shortcut icon" href="logoimagelink" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="welcome.css">  
<link rel="stylesheet" type="text/css" href="footer.css">  

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <style type="text/css">


* {
    box-sizing: border-box;
   /* background-image: url("car14.jpg");
    color: white;*/
}
nav{
margin-right: -20px;
margin-top: -20px;
  margin-left: -20px;
}

body {
    background-color: rgb(65,59,59);
    padding: 20px;
    font-family: Arial;
}

/* Center website */
#Main{
          font-size: 70px;
          color: white;
          text-align: center;
        font-family: Rouge Script;
      }



h1 {
    font-size: 50px;
    word-break: break-all;
}




/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}

/*    border: 0;
    height: 3px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}*/
body hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid ;
    margin: 1em 0;
    padding: 0; 
}

  </style>

  </head>
<body style="background-color:black;  ">




<hr>
<h1 id="Main" >Searched Cars</h1>
<hr>
<br><br><br>
<div class="main" style="margin-left: -10px;margin-top: 40px;" >



<!-- Portfolio Gallery Grid -->

<?php 

   

   $color = $_SESSION['color'];
   $brand = $_SESSION['brand'];
   $cname =  $_SESSION['cname'];



   $qry = " SELECT * FROM `latest cars` WHERE  `color`='$color' AND `make`='$brand' AND `car name`='$cname' ";
  
   $result = mysqli_query($connection,$qry);



   while($data= mysqli_fetch_assoc($result))

{

 ?>

  <div class="column" style="margin-left:90px;margin-bottom: 35px;">
   
    <div class="content" >
        <div class="box" >
        <img alt="Car" style="width:100%; height: 150px;" src="<?php echo $data['image1']; ?>" ><br>
        <div class="inner">
         <table>
             <tr>
                  <td>Car Name:<?php echo $data['car name']; ?> </td>
                  <td rowspan="3"><b>Price:<?php echo $data['price'];?> </b></td>
             </tr>
            <tr>
                  <td>Model:<?php echo $data['model']; ?> </td>
            </tr>
            <tr>
                  <td>Color:<?php echo $data['color']; ?></td>
            </tr>

         </table>
     
    

    <a href="latestdetails.php?sid=<?php echo $data['id']; ?>"> <button style="width:100%; background-color: black; color: white;">View Details</button></a>
    
     

  </div>
  </div>
  </div>

</div>

<?php
        
      }
   

   $qry = " SELECT * FROM `cars` WHERE   `color`='$color' AND `make`='$brand' AND `car name`='$cname' ";
   
   $result = mysqli_query($connection,$qry);

   
   while($data= mysqli_fetch_assoc($result))

  {
 

 ?>

  <div class="column" style="margin-left:90px;margin-bottom: 35px;">
   
    <div class="content" >
        <div class="box" >
        <img alt="Car" style="width:100%; height: 150px;" src="<?php echo $data['image1']; ?>" ><br>
        <div class="inner">
         <table>
             <tr>
                  <td>Car Name:<?php echo $data['car name']; ?> </td>
                  <td rowspan="3"><b>Price:<?php echo $data['price'];?> </b></td>
             </tr>
            <tr>
                  <td>Model:<?php echo $data['model']; ?> </td>
            </tr>
            <tr>
                  <td>Color:<?php echo $data['color']; ?></td>
            </tr>

         </table>

<a href="allcarsdetails.php?allid=<?php echo $data['id']; ?>">
<button style="width:100%; background-color: black; color: white;">View details</button>
</a>
 
  </div>
  </div>
  </div>
<br><br><br><br><br><br>
</div>






<?php
        
 
  } 
  
  

?>       
 </div> 

 
</body>


<?php include 'footer.php';?>
</html>
