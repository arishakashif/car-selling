<?php 

   include "db.php";
    include ("navbarc.php");

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet">
    <title>Details</title>
    <style type="text/css">
      

.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}  

nav
{
  margin-left: -40px;
}


table{
    padding: 10px;
    }

#menu span
{
  font-weight: bold;
  font-size: 20px;
}

</style>

</head>
<body style="margin-left: 40px;color: white;background-color: black;">
 
<br>
<br> <br> 
<br>  

<?php 
  
   if ($_REQUEST['sid'])

    {
   		$a=$_REQUEST['sid'];

      $qry = " SELECT * FROM `latest cars` WHERE id='$a' ";
      $result = mysqli_query($connection,$qry);

if ($result) 

{
  		
      $data = mysqli_fetch_assoc($result);
      
      
?>


<table>
<tr>
<td width="800px">

     <!--SLIDER CODE-->
                                  

<div class="w3-content w3-display-container">
  <img class="mySlides" style="height:500px; width: 800px;" src="<?php echo $data['image1']?>" >
  <img class="mySlides" style="height:500px; width: 800px;" src="<?php echo $data['image2']?>">
  <img class="mySlides" style="height:500px; width: 800px;" src="<?php echo $data['image3']?>">
  <img class="mySlides" style="height:500px; width: 800px;" src="<?php echo $data['image4']?>">
  <img class="mySlides" style="height:500px; width: 800px;" src="<?php echo $data['image5']?>">
  
  
  <div class="w3-center w3-display-bottommiddle" style="width:100%">

    <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(4)"></span>
  </div>
</div>

<script>
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
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
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

       
      <!SLIDER ENDS->

</td>
<td width="390px" >

<!--SEARCHBOX-->
      <div id="menu">

            <p id="Main" style="font-size:55px;font-family: 'Rouge Script', cursive;font-weight:bold;">&emsp;&emsp;&emsp;Details</p>
                    <br>
              <p>&emsp;&emsp;&emsp;<span>Car Name: </span><?php echo $data['car name']; ?>
                    <br><br>
                &emsp;&emsp;&emsp;<span>Model: </span> <?php echo $data['model']; ?>
                    <br><br>
                &emsp;&emsp;&emsp;<span>Maker: </span> <?php echo $data['make']; ?>
                    <br><br>
                &emsp;&emsp;&emsp;<span>Running: </span><?php echo $data['running']; ?>
                    <br><br>
                &emsp;&emsp;&emsp;<span>Registration Number: </span><?php echo $data['registration number']; ?>
                    <br><br>
                &emsp;&emsp;&emsp;<span>Color: </span><?php echo $data['color']; ?>
                    <br><br>
                &emsp;&emsp;&emsp;<span>Package: </span><?php echo $data['Package']; ?>
                    <br><br>
                     &emsp;&emsp;&emsp;<span>Price: </span><?php echo $data['price']; ?>
                    <br><br>
                &emsp;&emsp;&emsp;<span>More: </span><?php echo $data['details']; ?>
                    <br><br>
              </p>

              <br><br>

                </div>



                <!--SEARCHBOX ENDS-->


</td>

</tr>
</table>
<br><br><br><br>  
<br><br>
 <?php

   			
   		}
   
  }

  include "footer.php";

?>       

</body>
</html>