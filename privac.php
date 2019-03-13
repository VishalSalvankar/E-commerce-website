<?php
session_start();

?>

<!DOCTYPE html>
<head>
<title>Privacy Policy</title>

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
	</ul></div>
	<br><br><br>
	<div id="privacy">
		<p style="font-family: moderna; color: black; font-size:20px; font-weight: bold">Privacy Policy:</p>
		<p>We value the trust you place in us. That's why we insist upon the highest standards for secure transactions and customer information privacy. Please read the following statement to learn about our information gathering and dissemination practices.</p>
		<br>
		<p style="font-family: moderna; color:black; font-size:17px; font-weight: bold">Note:</p>
		<p>Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically.</p>
		<p>By visiting this Website you agree to be bound by the terms and conditions of this Privacy Policy. If you do not agree please do not use or access our Website.</p>
		<p>By mere use of the Website, you expressly consent to our use and disclosure of your personal information in accordance with this Privacy Policy. This Privacy Policy is incorporated into and subject to the Terms of Use.</p>
		<br>
		<p style="font-family:moderna; color:black; font-size:17px; font-weight: bold">1. Collection of Personally Identifiable Information and other Information</p>
		<p>When you use our Website, we collect and store your personal information which is provided by you from time to time. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. More importantly, while doing so we collect personal information from you that we consider necessary for achieving this purpose.</p>
		<p>In general, you can browse the Website without telling us who you are or revealing any personal information about yourself. Once you give us your personal information, you are not anonymous to us. Where possible, we indicate which fields are required and which fields are optional. You always have the option to not provide information by choosing not to use a particular service or feature on the Website. We may automatically track certain information about you based upon your behaviour on our Website. We use this information to do internal research on our users' demographics, interests, and behaviour to better understand, protect and serve our users. This information is compiled and analysed on an aggregated basis. This information may include the URL that you just came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address.</p>
		<p>We use data collection devices such as "cookies" on certain pages of the Website to help analyse our web page flow, measure promotional effectiveness, and promote trust and safety. "Cookies" are small files placed on your hard drive that assist us in providing our services. We offer certain features that are only available through the use of a "cookie". We also use cookies to allow you to enter your password less frequently during a session. Cookies can also help us provide information that is targeted to your interests. Most cookies are "session cookies," meaning that they are automatically deleted from your hard drive at the end of a session. You are always free to decline our cookies if your browser permits, although in that case you may not be able to use certain features on the Website and you may be required to re-enter your password more frequently during a session.</p>
		<p>If you choose to buy on the Website, we collect information about your buying behaviour.</p>
		<p>If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect such information into a file specific to you.</p>
		<p>If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect such information into a file specific to you.</p>
		<br>
		<p style="font-family:moderna; color:black; font-size:17px; font-weight: bold">2. Grievance Officer</p>
		<p>In accordance with Information Technology Act 2000 and rules made there under, the name and contact details of the Grievance Officer are provided below:</p>
		<p>Mr. Aman Bhardwaj</p>
		<p>Easy Drop Shipping Pvt Ltd</p>
		<p>127, Katpadi,
		Vellore - 632014,
		Tamil Nadu (India).</p>
		<br><br><br>
	</div>
</body>
</html>