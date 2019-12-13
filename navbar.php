<html>
<head>

  <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="reviewscss.css">  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Rouge+Script" rel="stylesheet">



<!-- NAVBAR CSS -->
<style type="text/css">

nav{
    
}

.topnav {

    background-color: #2e3135;
    overflow: hidden;
    width: 100%;
}

.topnav a {
    float: left;
    display: block;
    background-color: #2e3135;
    color: white;
    
  

    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
   
}



#spc a{
    
    margin-left: 250px;
    margin-right: 350px;
    color: transparent;
}
#spc a:hover{
    color: transparent;
    background-color: transparent;

}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add an active class to highlight the current page */
.active {
    background-color: #4CAF50;
    color: white;
    font-family: Rouge Script;
  
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
}


/* account container - needed to position the dropdown content */
.account {
    
    float: left;
    overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.account .dropbtn {
    font-size: 17px; 
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ada9a9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
    float: none;
    color: #1e1d1d;
    background-color: #d1cfcf;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
    background-color: #555;
    color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.account:hover .dropdown-content {
    display: block;
}




</style>

</head>




<body >

<!-- NAVBAR CODE STARTS -->
<nav>
<div class="topnav" id="myTopnav">
  <span class="navbar-logo">
    <a href="allcar.php">
         <img src="logo.jpg" alt="Logo" style="height: 3.0rem; width: 6.0rem;">
    </a>
  </span>
  <a href="home.php" class="active" >Edge of Wheels</a>
  <span id="spc"><a href="">s</a></span>
  <a href="about.php" >        <i class="fas fa-info-circle"></i> About</a>
  <a href="contact.php" >      <i class="fas fa-map-marker-alt"></i> Contact</a>
  <a href="review.php" >       <i class="fas fa-star"></i> Review</a> 
  <div class="account">
    <button class="dropbtn" style="text-align: right;">     
                            <i class="fas fa-user"></i> My Account
                            <i class="fa fa-caret-down"></i>
    </button>
        <div class="dropdown-content">
          <a href="login.php">Sign In</a>
          <a href="sign.php">Sign Up</a>
         
        </div>
  
</div>
 </nav>
 <!-- NAVBAR CODE ENDS-->




 
</body>
</html>
