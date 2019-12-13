<?php 

   include "db.php";
   include "insert.php";
    include ("navbar.php");
   
   creview();
   
?>


<html>
<head>

  <title>Reviews</title>

  <link rel="shortcut icon" href="logoimagelink" type="image/x-icon">


<link rel="stylesheet" type="text/css" href="css/review.css">  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Rouge+Script" rel="stylesheet">


</head>




<body style="background-image: url('images/rev.jpg')">



 <div class="container" >

   <div >
      <span id="Welcome" > Your Review Improves   </span>
      <span id="Main">Edge of Wheels</span>
   </div>

        <br>
    <div id="rating" >
      <div id="maintext">Rate us</div>
    
    
  <div class="row">

  
  <div class="col-md-3 col-sm-6">


    <input name="rating[]" type="checkbox" id="st1" value="1" class="fa fa-star-o" aria-hidden="true"/>
    <label for="st1"></label>
   
    <input name="rating[]" type="checkbox" id="st2" value="2" class="fa fa-star-o" aria-hidden="true"/>
    <label for="st2"></label>
   
    <input name="rating[]" type="checkbox" id="st3" value="3" class="fa fa-star-o" aria-hidden="true"/>
    <label for="st3"></label>
   
    <input name="rating[]" type="checkbox" id="st4" value="4" class="fa fa-star-o" aria-hidden="true"/>
    <label for="st4"></label>
   
    <input name="rating[]" type="checkbox" id="st5" value="5" class="fa fa-star-o" aria-hidden="true"/>
    <label for="st5"></label>

    </div> 
 
      <br><br><br>


      <p>


 <form action="review.php" method="POST">
   
    <textarea name="review" id="text"
   rows="8" cols="45" placeholder="Write something to us..." style="color: black"></textarea>
    <br>
        <button name="submit" class="btn btn-primary btn-lg">Enter</button>
        </form>

      </p>

    </form>

   </div>



 

<script src="\assets\bootstrap\bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/55ff732598.js"></script>
<script
  src="http://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

</body>
</html>
