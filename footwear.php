<?php
session_start();

?>
<html>
<head>
<title>DAPPER</title>
<link href="Tour/style.css" rel="stylesheet" type="text/css" />
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
<div id="wrapper">
  <div id="inner">
    <div id="eader">

<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="privac.php">Privacy</a></li>
  <li><a href="#about">Contact Us</a></li>
<form action="result.php" method="post"  style="padding:10px 0px 0px 0px">  
<li>
        <select name="opt" required autofocus>
          <option value="">Select an Option:</option>
          <option value="id">Product-Id</option>
          <option value="title">Product-Name</option>
          <option value="author">Company-Name</option>
        </select>
<input type="search" name="bsearch" > <input type="submit"></li></form>

<?php
if(isset($_SESSION['fname']))
{
echo '<li style="float:right"><a href="cart.php">Cart</a></li>';
echo '<li style="float:right"><a href="logout.php" >Logout</a></li>'; 
}
else 
{
echo '<li style="float:right"><a href="login.php" >Login</a></li>'; 
echo '<li style="float:right"><a href="signup.php" >Signup</a></li>'; 
}
?>  
</ul>

<div id="imageSlider">
<img class="mySlides" src="Tour/1.1.jpg" style="width:100%">
  <img class="mySlides" src="Tour/1.2.jpg" style="width:100%">
  <img class="mySlides" src="Tour/1.4.jpg" style="width:100%">
  <img class="mySlides" src="Tour/1.3.jpg" style="width:100%">
 </div>


<dl id="browse">
    <dt>Full Category Lists</dt>
    <dd class="first"><a href="tourIndex.php">MOBILE PHONES</a></dd>
    <dd class="first"><a href="DS.php">WATCHES</a></dd>
    <dd ><a href="OS.php">CAMERA</a></dd>
    <dd style="height:30"><a href="DBMS.php">BOOKS</a></dd>
    <dd><a href="WT.php">MEN'S CLOTHES</a></dd>
    <dd><a href="CAO.php">WOMEN'S CLOTHES</a></dd>
    <dd><a href="toys.php">TOYS</a></dd>
    <dd><a href="han.php">HEALTH AND NUTRITION</a></dd>
    <dd><a href="footwear.php">FOOTWEAR</a></dd>
    <dd><a href="laptop.php">LAPTOPS</a></dd>
    <dd><a href="pen.php">COMPUTER ACCESSORIES</a></dd>
    <dd><a href="pad.php">PERFUMES AND DEODERANTS</a></dd>
    <dd><a href="sp.php">STATIONARY PRODUCTS</a></dd>
    <dd><a href="ag.php">AUDIO GADGETS</a></dd>
  </dl>
<div id="body">

<div class="inner">
<div class="leftbox">
  <h3>Earton Hiking Shoes</h3>
  <img src="Tour/foot/f1.jpeg" width="63" height="95" alt="photo 1" class="left" style="margin-left: 10px" />
  <p><b>Price:</b> <b>Rs.348</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.50</b>.</p>
  <p><b>Availability:</b> Usually ships within 48 hours</p>
  <a class="readmore" href='footwear.php?bookName=Earton Hiking Shoes&cost=348&submit=submit'>ADD TO CART</a>

<div class="clear"></div>
</div>


<div class="rightbox">
<h3>Asian Running Shoes</h3>
<img src="Tour/foot/f2.jpeg" width="63" height="91" alt="photo 4" class="left" style="margin-left: 10px" />
<p><b>Price:</b> <b>Rs.584</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.99</b>.</p>
<p><b>Availability:</b> Usually ships within 48 hours</p>
<a class="readmore" href='footwear.php?bookName=Asian Running Shoes&cost=584&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>


<div class="clear br"></div>
<div class="leftbox">
<h3>Puma Mens Sandals</h3>
<img src="Tour/foot/f3.jpeg" width="63" height="101" alt="photo 2" class="left" style="margin-left: 10px" />
<p><b>Price:</b> <b>Rs.1,199</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.225</b>.</p>
<p><b>Availability:</b> Usually ships within 48 hours</p>
<a class="readmore" href='footwear.php?bookName=Puma Mens Sandals&cost=1199&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>

<div class="rightbox">
<h3>Lee Cooper Sandals</h3>
<img src="Tour/foot/f4.jpeg" width="63" height="103" alt="photo 5" class="left" style="margin-left: 10px" />
<p><b>Price:</b> <b>Rs.1,539</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.225</b>.</p>
<p><b>Availability:</b> Usually ships within 48 hours</p>
<a class="readmore" href='footwear.php?bookName=Lee Cooper Sandals&cost=1539&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>

<div class="clear br"></div>
<div class="leftbox">
<h3>Jade Women Black Heels</h3>
<img src="Tour/foot/f5.jpeg" width="63" height="100" alt="photo 3" class="left" style="margin-left: 10px" />
<p><b>Price:</b> <b>Rs.449</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.75</b>.</p>
<p><b>Availability:</b> Usually ships within 48 hours</p>
<a class="readmore" href='footwear.php?bookName=Jade Women Black Heels&cost=449&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>

<div class="rightbox">
<h3>ABJ Fashion Wedges</h3>
<img src="Tour/foot/f6.jpeg" width="63" height="99" alt="photo 6" class="left" style="margin-left: 10px" />
<p><b>Price:</b> <b>Rs.445</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.105</b>.</p>
<p><b>Availability:</b> Usually ships within 48 hours</p>
<a class="readmore" href='footwear.php?bookName=ABJ Fashion Wedges&cost=445&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>

<div class="clear"></div>
</div>

</div>

<div class="clear"></div>
</div>

</div>


</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shipping";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_GET['submit']))
{
$book=$_GET['bookName'];
$cost=$_GET['cost'];
$sql = "SELECT id FROM products where title='$book'";


$result1 = $conn->query($sql);
$f=$_SESSION['fname'];
$sql = "SELECT id FROM customer where firstname='$f'";


$result2 = $conn->query($sql);

$row1=$result1->fetch_assoc();
$row2=$result2->fetch_assoc();
$book=$row1['id'];
$f=$row2['id'];
$sql = "insert into history(bid,cid,status) values('$book','$f','cart')";

$result2 = $conn->query($sql);
}
?>
