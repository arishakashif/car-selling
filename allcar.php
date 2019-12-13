<?php 

   include ("db.php");
    include ("navbarc.php");
 
   session_start();


?>
<!DOCTYPE html>
<html>
<head>
  <title>All Cars</title>
  <link rel="shortcut icon" href="logoimagelink" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="welcome.css">  
<link rel="stylesheet" type="text/css" href="footer.css">  

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <style type="text/css">
nav
{
  margin-left: -20px;
  margin-right: -20px;
}


  html{
    margin-top: -20px;

  }

  /*SLIDER*/


.slider {
  max-width: 950px;
  height: 400px;
  margin: 5px auto;
  
  position: relative;

}
.slide1,.slide2,.slide3,.slide4,.slide5 {
  position: absolute;
  width: 100%;
  height: 100%;
}
.slide1 {
  background: url(car19.jpg)no-repeat center;
      background-size: cover;
    animation:fade 8s infinite;
-webkit-animation:fade 8s infinite;

} 
.slide2 {
  background: url(car18.jpg)no-repeat center;
      background-size: cover;
    animation:fade2 8s infinite;
-webkit-animation:fade2 8s infinite;
}
.slide3 {
    background: url(car17.jpg)no-repeat center;
      background-size: cover;
    animation:fade3 8s infinite;
-webkit-animation:fade3 8s infinite;
}
.slide4 {
    background: url(car16.jpg)no-repeat center;
      background-size: cover;
    animation:fade4 8s infinite;
-webkit-animation:fade4 8s infinite;
}
.slide5 {
    background: url(car15.jpg)no-repeat center;
      background-size: cover;
    animation:fade5 8s infinite;
-webkit-animation:fade5 8s infinite;
}

@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 0}
  66.666% { opacity: 0}
  100% { opacity: 1}
}
@keyframes fade2
{
  0%   {opacity:0}
  33.333% { opacity: 1}
  66.666% { opacity: 0 }
  100% { opacity: 0}
}
@keyframes fade3
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}
@keyframes fade4
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}
@keyframes fade5
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}

    /

    * {
    box-sizing: border-box;
   /* background-image: url("car14.jpg");
    color: white;*/
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

  </style>
</head>
<body style="background-color: black">

<span id="Welcome">Welcome to </span>
<span id="Main" style="font-size:95px">Edge of Wheels</span>






<table>
<tr>
<td width="400px" >

<!--SEARCHBOX-->
      <div id="menu">

            <p id="Main" style="font-size:40px">Find your Car</p>
            <hr>

              <form method="POST" action="allcar.php">
              

              <br><br>

                <div class="custom-select" style="width:200px;">
                <select name="brand">
                  <option>Brand:</option>
                  <option value="TOYOTA">TOYOTA</option>
                  <option value="DAIHATSU">DAIHATSU</option>
                  <option value="Honda">Honda</option>
                  <option value="suzuki">suzuki</option>
                  <option value="Land Rover">Land Rover</option>
                  <option value="Mercedes">Mercedes</option>
                  <option value="Mini">Mini</option>
                  <option value="Nissan">Nissan</option>
                  <option value="Toyota">Toyota</option>
                  <option value="Volvo">Volvo</option>
                </select>
              </div>


                <br><br>


              <div class="custom-select" style="width:200px;">
                <select name="color">
                  <option>Color:</option>
                  <option value="white">White</option>
                  <option value="WINE RED">WINE RED</option>
                  <option value="black">Black</option>
                  <option value="grey">Grey</option>
                  <option value="blue">Blue</option>
                  <option value="red">Red</option>
                  <option value="gold">Gold</option>
                  <option value="maroon">Maroon</option>
                  <option value="PEARL WHITE">PEARL WHITE</option>
                  <option value="green">Green</option>
                  <option value="RED METALLIC">RED METALLIC</option>
                  
                </select>
              </div>

                  <br><br>


              <div class="custom-select" style="width:200px;">
                <select name="cname">
                  <option>Car name</option>
                  <option value="Subaro">Subaro</option>
                  <option value="Aqua">Aqua</option>
                  <option value="cast">cast</option>
                  <option value="Passo">Passo</option>
                  <option value="Vitz">Vitz</option>
                  <option value="Vezel">Vezel</option>
                </select>
              </div>


              <br><br>

              


             

              

              <input type="submit"  class="btn btn-primary" name="submit" value="Search">

                </form>
                </div>

                <?php

                    if (isset($_POST['submit'])) 

                    {
          
                    $_SESSION['color'] = $_POST['color'];
                    $_SESSION['brand'] = $_POST['brand'];
                    $_SESSION['cname'] = $_POST['cname'];
                    
                    ?>


                    <script>

    window.open("searchcar.php");

</script>
                 <?php     
                    }

                    ?>
                            

          
                <!--SEARCHBOX ENDS-->


</td>
<td width="1000px">


                  <!--SLIDER CODE-->
                  <div class='slider' align="right">
                    <div class='slide1'></div>
                    <div class='slide2'></div>
                    <div class='slide3'></div>
                    <div class='slide4'></div>
                    <div class='slide5'></div>
                  </div>


      <!SLIDER ENDS->





</td>
</tr>
</table>
<br><br><br>
<!-- MAIN (Center website) -->
<h1 id="Main">All Cars</h1>
<hr>
<div class="main" style="margin-left: -10px;"  >



<!-- Portfolio Gallery Grid -->

<?php 

   include "db.php";

   $qry = " SELECT * FROM `latest cars`";
   $result = mysqli_query($connection,$qry);
   
   while($data= mysqli_fetch_assoc($result)) {

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
   
  

?>       


<?php 

   include "db.php";

   $qry = " SELECT * FROM `cars`";
   $result = mysqli_query($connection,$qry);
   
   while($data= mysqli_fetch_assoc($result)) {
 ?>

  <div class="column" style="margin-left:90px;margin-bottom: 45px;">
   
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

</div>

<?php
        
      }
   
  

?>       

</div>

<?php include 'footer.php';?>

</body>
</html>
