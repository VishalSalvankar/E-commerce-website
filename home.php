<?php
session_start();

?>


<html>
<head>
<title>DAPPER</title>
<style>
html, body {
	background-color:white;
    margin: 0;
    height: 100%;
}

a{color:#333}

#divbutton
{
height:50px;
width:130px;
color:#333;
background-color:white;
display:inline-block;
border-radius:8px;
padding:10px;
margin:-20 10 20 120;
vertical-align:middle;
text-align:center;
line-height: 50px;
font-family:lato;
font-weight:bold;
font-size:20px;
border: 2px solid green;
}

#divbutton:hover
{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

.mySlides {display:none;
height:100%;
}

#imageSlider
{width:100%;
height:420px;}

#bookstore{
font-family:delicious;
font-size:20px;
margin:30 150 60 145;
color:#333;
text-align:center;
}

ul {
    position:fixed;
	width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #333;
    font-size:20px;
    opacity:0.7;
}

li {
    float: left;
}

li a {
    display: block;
    font-family:Tahoma;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li:hover
{opacity:1.0;}

li a:hover {
    background-color: #271A18;
	transition: background 1000ms ease-out;
}

ul:hover {
transition: 1000ms ease-out;
opacity:1.0;
}

.footer{
  background-color: grey;
  
}
.column{
  float: left;
  background-color: #333;
  color:white;
  width: 32.5%;
  height: 250px;
  padding-left: 10px;
}

</style>

<script src="jquery-3.1.1.js"></script>

<script>
var myIndex = 0;
$(document).ready(
	function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";

		setTimeout(carousel, 3000);
}
);
</script>
</head>

<body>

<div id="imageSlider">

<ul>
  <li><a class="active" href="#home">DAPPER</a></li>
  <li><a href="tos.php">Terms Of Service</a></li>
  <li><a href="privac.php">Privacy</a></li>
  <li><a href="formpage.html">Feedback</a></li>

<?php
if(isset($_SESSION['fname']))
{
echo '<li style="float:right;font-family:tahoma;font-size:20;color:white;padding-top:15px;padding-right:10px">'.$_SESSION['fname']."</li>";
echo '<li style="float:right"><a href="logout.php" >Logout</a></li>';	
}
else 
{
echo '<li style="float:right"><a href="login.php" >Login</a></li>';	
echo '<li style="float:right"><a href="signup.php" >Signup</a></li>';	
}
?>
</li>
</ul>
  <img class="mySlides" src="new19.jpeg" style="width:100%">
  <img class="mySlides" src="new20.jpeg" style="width:100%">
  <img class="mySlides" src="new11.jpeg" style="width:100%">
  <img class="mySlides" src="new12.jpeg" style="width:100%">
  <img class="mySlides" src="new13.jpeg" style="width:100%">
  <img class="mySlides" src="new14.jpeg" style="width:100%">
  <img class="mySlides" src="new15.jpeg" style="width:100%">
  <img class="mySlides" src="new16.jpeg" style="width:100%">
  <img class="mySlides" src="new17.jpeg" style="width:100%">
  <img class="mySlides" src="new18.jpeg" style="width:100%">
 </div>
<br>
<br>
<div id="divbutton" style="background-color:white color:white; font-size: 14px"><a href="tourIndex.php" style="text-decoration:none;">ONLINE STORE</a></div>
<div id="divbutton" style="background-color:#333 color:white;font-size: 8px;"><a href="sellbook.php" style="text-decoration:none;font-size:15px;">SELL PRODUCTS </a></div>
<div id="divbutton" style="background-color:#333 color:#333;"> <a href="admin_login.php" style="text-decoration:none;font-size:14px;">ADMIN LOG IN</a></div>
<div id="divbutton" style="background-color:#333 color:#333;"> <a href="https://docs.google.com/forms/d/10UMLZ_KQBB6rTkF7Tewpvt0Ekv_7bNAn3lBufGI8QBU/viewform?edit_requested=true" style="text-decoration:none;font-size:14px;">MARKET SURVEY</a></div>
<div class="footer" style="background-color: #999">
      <div class="row ">
      <div class="column ">
    <h2>TECHNOLOGY PARTNERS</h2>
    <p>VIT UNIVERSITY<br>TIFAC</p>
  </div>
  <div class="column">
    <h2>CONNECTIONS MADE</h2>
    <p>11609 Customer Account<br>

138102 Deliveries Served Till Date<br>

500 Customers created their account in last 30 Days<br>
</p>
  </div>
  <div class="column ">
    <h2>CONTACT US</h2>
    <p>Address:<br>

DAPPER<br>
127, Katpadi,
Vellore - 632014,
Tamil Nadu (India).<br>

Email-id: dapperecommerce@gmail.com</p>
  </div>
</div>
</div>


</body>
<html>
