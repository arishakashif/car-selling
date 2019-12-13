<?php   


 include "db.php";
  session_start();
  if (isset($_SESSION['id'])) {
    echo "";
  }

  else{
        
        header('location:login.php');
  }


   ?>


<?php 

   include "db.php";
   include "insert.php";

   
   csell();

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Eater|Sacramento" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" type="text/css" href="css/footer.css"> 


    <title>Sell your Own Car</title>
    <style type="text/css">
    .main{
        margin: 40px;
         margin-left: 230px;
    }
    body
{
  background-image: url(images/sb.jpg);
  color: white;
  
}
        .row input{
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
         
        label{
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
  #submit{
  font-size: 20px;
 padding-right: 35px;padding-left: 35px;padding-top: 8px;padding-bottom: 8px; background-color: white;color: black;margin-top: 30px;
 float: right;
border-radius: 20px;
width: 200px;
}

.col-md-4{
    padding-right: 100px;
    width: 500px;
    margin-bottom: 100px;

}




    </style>
</head>

<body style="   color:white">



<p class="signin" style="margin-bottom: -30px;"><span style="font-size: 100px; font-family: 'Eczar', serif;">S</span>ell your Own Car</p>
<span id="logout" style="margin-left:1200px; "><a href="logout.php" style="color:white ; font-size: 30px;">logout</a><span>
<div class="main">
    

<br><br>

  <form  method="post" action="sell.php" role="form" enctype="multipart/form-data" class="centered"  >

   

    
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_name">Car Name: </label>
                    <input id="form_name" type="text" class="form-control"  required="required" name="cname" >
                    
                   
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_lastname">Model</label>
                    <input id="form_lastname" type="text" name="model" class="form-control"  required="required">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_email">Running</label>
                    <input id="form_email" type=text name="running" class="form-control"  required="required">
                   
                </div>
                </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_phone">Color</label>
                    <input id="form_phone" type="text" name="color" class="form-control" >
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_email">Package</label>
                    <input id="form_email" type="text" name="package" class="form-control"  required="required" >
                   
                </div>
                </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_phone">Price</label>
                    <input id="form_phone" type="text" name="price" class="form-control" >
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_email">Registration number</label>
                    <input id="form_email" type="text" name="regno" class="form-control"  required="required" >
                   
                </div>
                </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_phone">maker</label>
                    <input id="form_phone" type="text" name="make" class="form-control" >
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group" >
                    <label for="form_email">Images</label>
                    <input  id="form_email" type="file" name="image1" class="form-control" required="required" value="Image 1">
                    <input id="form_email" type="file" name="image2" class="form-control" required="required" value="Image 2">
                    <input id="form_email" type="file" name="image3" class="form-control" required="required" value="Image 3">
                    <input id="form_email" type="file" name="image4" class="form-control" required="required" value="Image 4">
                    <input id="form_email" type="file" name="image5" class="form-control" required="required" value="Image 5">
                   
                </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="form_message">Details</label>
                            <textarea id="form_message" name="details" class="form-control"  rows="4" required="required" ></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-send" value="Submit">
            </div>
</div>
 
 </div>       
 

</form>
  

<?php include 'footer.php';?>

</body>
</html>