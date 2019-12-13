<?php  

include "db.php";

function ccontact()
{

global $connection;
    
if(isset($_POST['submit']))

{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$query = "INSERT INTO `contact`(`fname`, `lname`, `email`, `phone no`, `message`) VALUES ('$fname','$lname','$email','$phone','$message')";

$result= mysqli_query($connection,$query);

    
     if ($result) {
         echo "New record successfully"; } 
    else {
           echo "Error: "; }
}
}


function creview()

{

global $connection;
    
if(isset($_POST['submit']))

{

$review=$_POST['review'];
echo $review;

$query = "INSERT INTO `reviews`(`review`) VALUES ('$review')";

$result=mysqli_query($connection,$query);
 if ($result) {
         echo "New record successfully"; } 
    else {
           echo "Error: "; }
}

}



function cuser()
{
global $connection;

    
if(isset($_POST['submit']))
{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['contact'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['pwd'];


$query = "INSERT INTO `user`(`first name`, `last name`, `email`, `phone no`, `username`, `password`) VALUES ('$fname','$lname','$phone','$email','$username','password')";

$result= mysqli_query($connection,$query);
    
     if ($result) {
         echo "New record successfully"; } 
    else {
           echo "Error: "; }
   
}
}


function csell()
{

global $connection;
    
if(isset($_POST['submit']))

{

$car =$_POST['cname'];
$model=$_POST['model'];
$running =$_POST['running'];
$color =$_POST['color'];
$package =$_POST['package'];
$price =$_POST['price'];
$reg=$_POST['regno'];
$details=$_POST['details'];
$make =$_POST['make'];
$image1=$_FILES['image1']['name'];
$image2=$_FILES['image2']['name'];
$image3=$_FILES['image3']['name'];
$image4=$_FILES['image4']['name'];
$image5=$_FILES['image5']['name'];


$target = "images/".basename($_FILES['image1']['name']);

if(move_uploaded_file($_FILES['image1']['tmp_name'],$target));
{echo "uploaded";}

$target = "images/".basename($_FILES['image2']['name']);

if(move_uploaded_file($_FILES['image2']['tmp_name'],$target));
{echo "uploaded";}
$target = "images/".basename($_FILES['image3']['name']);

if(move_uploaded_file($_FILES['image3']['tmp_name'],$target));
{echo "uploaded";}

$target = "images/".basename($_FILES['image4']['name']);

if(move_uploaded_file($_FILES['image4']['tmp_name'],$target));
{echo "uploaded";}

$target = "images/".basename($_FILES['image5']['name']);

if(move_uploaded_file($_FILES['image5']['tmp_name'],$target));
{echo "uploaded";}

$query1= "INSERT INTO `cars`(`car name`, `model`, `running`, `color`, `Package`, `price`, `registration number`, `details`, `make`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES ('$car','$model','$running','$color','$package','$price','$reg','$details','$make','$image1','$image2','$image3','$image4','$image5')";





$result1= mysqli_query($connection,$query1);

     if ($result1) {
         echo "New record successfully"; } 
    else {
           echo "Error: "; }

      
}
   
}
function insertlatest()
{

global $connection;
    
if(isset($_POST['submit']))

{

$car =$_POST['cname'];
$model=$_POST['model'];
$running =$_POST['running'];
$color =$_POST['color'];
$package =$_POST['package'];
$price =$_POST['price'];
$reg=$_POST['regno'];
$make =$_POST['make'];
$details=$_POST['details'];
$image1=$_FILES['image1']['name'];
$image2=$_FILES['image2']['name'];
$image3=$_FILES['image3']['name'];
$image4=$_FILES['image4']['name'];
$image5=$_FILES['image5']['name'];


$target = "images/".basename($_FILES['image1']['name']);

if(move_uploaded_file($_FILES['image1']['tmp_name'],$target));
{echo "";}

$target = "images/".basename($_FILES['image2']['name']);

if(move_uploaded_file($_FILES['image2']['tmp_name'],$target));
{echo "";}
$target = "images/".basename($_FILES['image3']['name']);

if(move_uploaded_file($_FILES['image3']['tmp_name'],$target));
{echo "";}
$target = "images/".basename($_FILES['image4']['name']);

if(move_uploaded_file($_FILES['image4']['tmp_name'],$target));
{echo "";}
$target = "images/".basename($_FILES['image5']['name']);

if(move_uploaded_file($_FILES['image5']['tmp_name'],$target));
{echo "uploaded";}

$qry="INSERT INTO `latest cars`(`car name`, `registration number`, `model`, `color`, `price`, `running`, `Package`, `details`, `make`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES ('$car','$reg','$model','$color','$price','$running','$package','$details','$image1','$image2','$image3','$image4','$image5')";


$res= mysqli_query($connection,$qry);

     if ($res) {
         echo "New record successfully"; } 
    else {
           echo "Error: "; }

      
}
   
}