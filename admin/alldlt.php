<?php 

include "../db.php";
$a=$_REQUEST['sid'];

$query="DELETE FROM `cars` WHERE `id`= '$a' ";



$result = mysqli_query($connection,$query);
		
if($result == true)

{ 
?>

<script type=""> window.open("deletefromall.php"); </script>

<?php  
 
}
 
?>
