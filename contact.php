<?php 

   include "db.php";
   include "insert.php";
   include "navbarc.php";

   ccontact();
  
   
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>Edge of wheels</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    
    <link rel="stylesheet" type="text/css" href="css/contact.css">

    <link rel="stylesheet" type="text/css" href="footer.css">

</head>

<body>


  

<br><br>
    
	<div id="div1">
        
            <h1 style="font-family: 'Rouge Script', cursive;font-size: 90px;font-weight: bold;padding-left: 310px;">Contact</h1>
       

    	    <table>
    		   
               <tr>
        
                   <td>
                   <strong> Contact: </strong><br> 0333-3147737</br>
    		       <strong> Email:   </strong><br> umairkhan@gmail.com<br>
    		       <strong> Address: </strong><br> Nida Apartment, SB-5, Block-1 , Gulshan-e-Iqbal  Karachi
                   </td>
    		   
                  
                  <td>
    		      <div class="mapouter"><div class="gmap_canvas"><iframe width="505" height="333" id="gmap_canvas" src="https://maps.google.com/maps?q=edge%20of%20wheels%20nida%20appartments%20gulshan%20block%201%20karachi%20pakistan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:333px;width:505px;}.gmap_canvas {overflow:hidden;background:none!important;height:333px;width:505px;}</style><small><a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=28532&url=42158&tid1=google1" rel="nofollow"></a></small></div>
                  </td>
    		    
    	       </tr>
    	    </table>
      
   
     </div>



<div id="div2">

    <legend>feel free to drop us a message below</legend>
    
    <br><br>

   

<form id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                   
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                   
                </div>
                </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
            	<form method="POST" action="contact.php">
                <input type="submit" class="btn btn-success btn-send" value="Send message" name="submit">
            </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"> <br> * These fields are required. </p>
            </div>
        </div>
    </div>

</form>
  
</div>



 <div class="footer" >

<div class="row">

<div id="loc" class="col-xs-12">

<h1>  KARACHI . LAHORE .  JAPAN   </h1>

</div>  

</div>

<br><br>

<div class="row">
 
<div id="links" class="col-xs-12 col-md-4 col-lg-3">
  
<ol>
  <br>
  <li class="mainh"><span style="color:#043991;font-weight: bold">O</span>ur pages</li>
  <hr>
  <li><a href="home.php">Home</a></li>
  
  <li><a href="about.php" >About</a></li>
    
  <li><a href="allcar.php" >All Cars</a></li>

  <li><a href="sell.php" >Sell your own car</a></li>
  
  <li><a href="contact.php" >Contact</a></li>
  
  <li><a href="review.php" >Review</a></li>
    
  <li class="lastlink"><a href="login.php" >My Account</a></li>
    
</ol>

</div>

<div id="hours" class="col-xs-12 col-md-4 col-lg-4">

<ol>

<li class="mainh"><span class="ourhour" >O</span>ur hours</li>
<hr>
<li >Monday
<span >   10:00 - 19:00 </span>
</li>
<li>Tuesday
<span>    10:00 - 19:00 </span>
</li>
<li>Wednesday
<span>    10:00 - 19:00 </span>
</li>
<li>Thursday
<span >   10:00 - 19:00 </span>
</li>
<li>Friday
<span >   10:00 - 19:00 </span>
</li>
<li>Saturday
<span >   12:00 - 19:00 </span>
</li>
<li class="isclosed">Sunday
<span>    CLOSED  </span>
</li>
</ol>

</div>

<div id="add" class="col-xs-12 col-md-4 col-lg-4">
  
<div class="address"><span style="color:#043991;font-weight: bold">O</span>ur Contact</div>
<hr>  

      <p><span  class="glyphicon glyphicon-map-marker"></span>  Nida Apartment , SB-5  Block-1  Gulshan-e-Iqbal Karachi,Pakistan</p>
      <p><span  class="glyphicon glyphicon-phone"></span>  0333-3147737</p>
      <p><span  class="glyphicon glyphicon-envelope" ></span>  umairkhan@gmail.com</p>
  

</div>

</div>

<br>

<div id="follow">

<p> Follow us on </p>

<hr>

  
<!-- Add font awesome icons -->


<div id="followlinks">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-snapchat"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-google"></a>
</div>


</div>

<br>


</div>



</body>
</html>