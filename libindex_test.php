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
  
  <li><a href="#about">Contact Us</a></li>
<form action="result.php" method="post"  style="padding:10px 0px 0px 0px">  
<li>
        <select name="opt" required autofocus>
          <option value="">Select an Option:</option>
          <option value="id">Book-Id</option>
          <option value="title">Book-Name</option>
          <option value="author">Author-Name</option>
          <option value="">Genre</option>
        </select>
<input type="search" name="bsearch" > <input type="submit"></li></form>

<?php
if(isset($_SESSION['fname']))
{
echo '<li style="float:right"><a href="issue_3.php">Issued List</a></li>';
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
<img class="mySlides" src="1.1.jpg" style="width:100%">
  <img class="mySlides" src="1.2.jpg" style="width:100%">
  <img class="mySlides" src="1.4.jpg" style="width:100%">
  <img class="mySlides" src="1.3.jpg" style="width:100%">
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
  <div class="leftbox" >
    <h3>Realme 2</h3>
    <img src="Index/photo_7.jpeg" width="63" height="95" alt="photo 1" class="left" style="margin-left: 10px" />
    <p><b>Price:</b> <b>Rs.8,990</b> &amp;
    eligible for FREE Super Saver Shipping on orders over <b>Rs.250</b>.
    </p>

    <p><b>Availability:</b> Usually ships within 48 hours</p>
    <a class="readmore" href='tourIndex.php?bookName=Realme 2&cost=8990&submit=submit'>ADD TO CART</a>

  <div class="clear"></div>
  </div>


  <div class="rightbox">
  <h3>Lenovo K9 </h3>
  <img src="Index/photo_8.jpeg" width="63" height="91" alt="photo 4" class="left" style="margin-left: 10px" />
  <p><b>Price:</b> <b>Rs.8,999</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.250</b>.</p>
  <p><b>Availability:</b> Usually ships within 48 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=Lenovo K9&cost=8999&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>

          <!-- end .rightbox -->
  <div class="clear br"></div>

  <div class="leftbox">
  <h3>Honor 9N</h3>
  <img src="Index/photo_9.jpeg" width="63" height="101" alt="photo 2" class="left" style="margin-left: 10px" />
  <p><b>Price:</b> <b>Rs.11,999</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.499</b>.</p>
  <p><b>Availability:</b> Usually ships within 48 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=Honor 9N&cost=11999&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>

         <!-- end .leftbox -->
  <div class="rightbox">
  <h3>Vivo V11 Pro</h3>
  <img src="Index/photo_10.jpeg" width="63" height="103" alt="photo 5" class="left" style="margin-left: 10px" />
  <p><b>Price:</b> <b>Rs.25,999</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.600</b>.</p>
  <p><b>Availability:</b> Usually ships within 48 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=Vivo V11 Pro&cost=25999&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>
          <!-- end .rightbox -->
  <div class="clear br"></div>

  <div class="leftbox">
  <h3>Asus Zenfone Lite L1</h3>
  <img src="Index/photo_11.jpeg" width="63" height="100" alt="photo 3" class="left" style="margin-left: 10px" />
  <p><b>Price:</b> <b>Rs.5,999</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.150</b>.</p>
  <p><b>Availability:</b> Usually ships within 48 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=Asus Zenfone Lite L1&cost=5999&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>
           <!-- end .leftbox -->

  <div class="rightbox">
  <h3>Panasonic P95</h3>
  <img src="Index/photo_12.jpeg" width="63" height="99" alt="photo 6" class="left" style="margin-left: 10px" />
  <p><b>Price:</b> <b>Rs.4,999</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.130</b>.</p>
  <p><b>Availability:</b> Usually ships within 48 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=Panasonic P95&cost=4999&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>
        <!-- end .rightbox -->
<div class="clear"></div>
</div>
      <!-- end .inner -->
</div>
<!-- end body -->
<div class="clear"></div>
</div>
<!-- end inner -->
</div>
<!-- end wrapper -->

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
$book=$_GET['bookname'];
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
$sql = "insert into history_2(bid,cid,status) values('$book','$f','cart')";

$result2 = $conn->query($sql);
}
?>
