<?php 

   include "db.php";
   include "insert.php";
    include ("navbarc.php");
    


    session_start();
  
    if (isset($_SESSION['id'])) {
        
        header('location:sell.php');
  }

  else
  {
cuser();

  }


  

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Eater|Sacramento" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" type="text/css" href="footer.css"> 


	<title>Sign In</title>
	<style type="text/css">
	
body
{
  background-image: url(sb.jpg);
  color: white;
  
}

.main
{
   margin: 40px;
   margin-left: 230px;
}	

.row input
{
	margin: 10px;
	outline: none;
    background-color: transparent;
    border-top:transparent; 
    box-sizing: border-box;
    border: none;
    color: white;
    font-size: 20px;
    border-bottom: 2px solid white;
}
		
label
{
	font-size:30px;
    font-family: 'Rouge Script', cursive;

}
	
.signin
{
    text-align: center;
    font-family: 'Rouge Script', cursive;
    font-size:45px;
    color: white;
    margin-bottom: 50px;
    margin-top: 30px;
    font-weight: bold;
}

#submit
{
  font-size: 20px;
  padding-right: 35px;
  padding-left: 35px;
  padding-top: 8px;
  padding-bottom: 8px;
  background-color: 
  white;color: black;margin-top: 30px;
  float: right;
  border-radius: 20px;
  width: 200px;
}

.col-md-4
{
    padding-right: 40px;
    width: 500px;
    margin-bottom: 100px;

}
	</style>


</head>
<body style=" color:white"  >


<p class="signin" style="margin-bottom: -30px;"><span style="font-size: 100px; font-family: 'Eczar', serif;">S</span>ign Up</p>

<div class="main">
	

<br><br>

  <form  method="post" action="sign.php" role="form"  class="centered"  >

   

    
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_name">First Name: </label>
                    <input id="form_name" type="text" class="form-control"  required="required" name="fname" placeholder="Enter your first name">
                    
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_lastname">Last Name: </label>
                    <input type="text" id="form_lastname" name="lname" class="form-control"  required="required" placeholder="Enter your last name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_email">Contact Number: </label> 
                    <input id="form_email" type="text" class="form-control"  required="required" name="contact" placeholder="Enter your contact number">
                </div>
                </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_phone">Email Address: </label> 
                    <input type="email" id="form_phone" class="form-control" name="email" required="required" placeholder="Enter your email address">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_email">Username: </label>
                    <input type="text" id="form_email" name="username" class="form-control"  required="required" placeholder="Suggest your username">
                    
                </div>
                </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_phone">Password: </label>
                    <input type="password" id="form_phone" class="form-control" required="required" name="pwd" placeholder="Enter your password">
                </div>
            </div>
            <input type="submit" name="submit" id="submit" class="btn btn-success btn-send" value="Submit">
        </div>
        
</div>
 
</form>
  

<?php include 'footer.php';?>

</body>
</html>