<?php
session_start();

?>

<!DOCTYPE html>
<head>
<title>Terms Of Service</title>

<style>
#imageSlider
{width:100%;
height:35px;}

#bookstore{
font-family:delicious;
font-size:20px;
margin:30 150 60 145;
color:#333;
text-align:center;
}

#privacy
{
background-color: white;
width: 80%;
margin-left: 100px;
margin-right: 40px;
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

</style>

</head>

<body>
	<div id="imageSlider">

	<ul>
  		<li><a class="active" href="home.php">Home</a></li>
  		<li><a href="#news">Terms Of Service</a></li>
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
	</ul></div>
	<br><br><br>
	<div id="privacy">
		<p style="font-family: moderna; color: black; font-size:20px; font-weight: bold">Terms of Services:</p>
		<p>This document is published in accordance with the provisions of Rule 3 (1) of the Information Technology (Intermediaries guidelines) Rules, 2011 that require publishing the rules and regulations, privacy policy and Terms of Use for access or usage of www.flipkart.com website.</p>
		<p>Your use of the Website and services and tools are governed by the following terms and conditions ( "Terms of Use" ) as applicable to the Website including the applicable policies which are incorporated herein by way of reference. If You transact on the Website, You shall be subject to the policies that are applicable to the Website for such transaction. By mere use of the Website, You shall be contracting with Easy Drop Shipping Internet Private Limited and these terms and conditions including the policies constitute Your binding obligations, with us.</p>
		<p>For the purpose of these Terms of Use, wherever the context so requires "You" or "User" shall mean any natural or legal person who has agreed to become a buyer on the Website by providing Registration Data while registering on the Website as Registered User using the computer systems. Flipkart allows the User to surf the Website or making purchases without registering on the Website. The term "We" , "Us" , "Our" shall mean Easy Drop Shipping Internet Private Limited.</p>
		<p>When You use any of the services provided by Us through the Website, including but not limited to, (e.g. Product Reviews, Seller Reviews), You will be subject to the rules, guidelines, policies, terms, and conditions applicable to such service, and they shall be deemed to be incorporated into this Terms of Use and shall be considered as part and parcel of this Terms of Use. We reserve the right, at Our sole discretion, to change, modify, add or remove portions of these Terms of Use, at any time without any prior written notice to You. It is Your responsibility to review these Terms of Use periodically for updates / changes. Your continued use of the Website following the posting of changes will mean that You accept and agree to the revisions. As long as You comply with these Terms of Use, We grant You a personal, non-exclusive, non-transferable, limited privilege to enter and use the Website.</p>
		<p style="font-weight: bold">ACCESSING, BROWSING OR OTHERWISE USING THE SITE INDICATES YOUR AGREEMENT TO ALL THE TERMS AND CONDITIONS UNDER THESE TERMS OF USE, SO PLEASE READ THE TERMS OF USE CAREFULLY BEFORE PROCEEDING.</p>
		<p>By impliedly or expressly accepting these Terms of Use, You also accept and agree to be bound by Company Policies (including but not limited to Privacy Policy available at Privacy) as amended from time to time.</p>
		<br><br><br>
	</div>
</body>
</html>