<?php 

   include "db.php";
    include "navbarc.php";

   
   
?>

<!DOCTYPE html>
<html>
<head>

  

  <title>Edge of Wheels</title>

<link rel="stylesheet" type="text/css" href="css/home.css">  
<link rel="stylesheet" type="text/css" href="footer.css"> 
<link rel="shortcut icon" href="logoimagelink" type="image/x-icon">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Rouge+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">


 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">


<style type="text/css">
nav
{
 padding-top: -700px;
}

.row {
    margin: 8px -16px;
}


/* Create four equal columns that floats next to each other */
.col {
    float: left;
    padding: 50px;
    
    width: 30%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}



/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}


* {
    box-sizing: border-box;
}

.c{
    float: left;
    width: 33.33%;
    padding: 50px;
}

/* Clearfix (clear floats) */
.r::after {
    content: "";
    clear: both;
    display: table;
}






</style>
</head>




<body >


<!--mainslider-->



<div id="mainslider">

<div class="w3-content w3-section" style="margin-top:10px;max-width:1350px;">
  
 
  
  <img class="mySlide" src="1.jpg" >
  <img class="mySlide" src="2.jpeg">
  <img class="mySlide" src="car4.jpg">
  <img class="mySlide" src="car6.jpg">
  <img class="mySlide" src="2.jpeg">
  
</div>

</div>
<br>  
<br>  

<script>

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlide");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds 
}
</script>


<br><br>
<h1 class="mainedge">Edge Of Wheels</h1>
<img class="center" data-ix="load-2" src="logo.jpg" style="height: 120px; display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;">



<!--mainsliderends-->




<!--latestcar-->



<div id="latestcars" style="margin-top: 100px;margin-left: 80px;margin-right: 80px;">
  
<h1>Latest Cars</h1>
<hr>
<div class="r" >
<?php 

   

   $qry = " SELECT * FROM `latest cars`";
   $result = mysqli_query($connection,$qry);

      while($data= mysqli_fetch_assoc($result)) {



        ?>


        
  <div class="c">
    <img  style="width:100%" src="<?php echo $data['image1'] ?>" >
     <a href="latestdetails.php?sid=<?php echo $data['id']; ?>"> <button style="width:100%; background-color: black; color: white;">View Details</button></a>
    
  </div>
  





<?php
}
?>
</div>
</div>

  
    
<!--latestcarsdivend-->



<!--reviewslider-->


<div  id="reviewslide" style="background-image: url(sb.jpg);">
   
    <h1>What customer says about us</h1>

<?php 

   include "db.php";

   $qry = " SELECT * FROM `reviews`";
   $result = mysqli_query($connection,$qry);
   
   while($data= mysqli_fetch_assoc($result))

  {

 ?>
    <div class="w3-display-container mySlides" id="s1">
    <p > <?php echo $data['review']; ?></p>
    </div>
  

   <?php
    }

    ?> 
    
     <!-- Slideshow next/previous buttons -->

    <div class="w3-container w3-black w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
      
        
        
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
      


      </div>
    </div>
  </div>

<!--reviewsliderend-->




<!--bluediv-->


<div  class="w3-container w3-row w3-center w3-white w3-padding-64">

<img style="height: 350px; width: 100%;padding-bottom: 0px;margin-bottom: 0px;" src="vr.svg">



  <div class="w3-quarter">
    <span class="w3-xxlarge">100+</span>
    <br>cars available right now
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Makers and Models
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">200k+</span>
    <br>Happy Customers
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Meetings
  </div>
</div>


<!--bluedivend-->





<script src="\assets\bootstrap\bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/55ff732598.js"></script>
<script
  src="http://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>



<script>


// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

<?php include 'footer.php';?>



</body>
</html>
