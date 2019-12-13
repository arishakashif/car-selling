<?php 

include "../db.php";
$a=$_REQUEST['lid'];

$query="DELETE FROM `latest cars` WHERE `id`= '$a' ";



$result = mysqli_query($connection,$query);
		
if($result == true)

{ 
echo"done";
 
}
 
?>
