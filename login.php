<html>
<head>
<?php



?>
<style>

html, body {
    margin: 0;
    height: 100%;
}

#entirediv {
	top: 0;
	margin: 0;
    min-height:100%;
    min-width:100%;
    background-size: 100% 100%;
    background-image: url("shopper.jpeg");
    background-repeat: no-repeat;
    opacity:0.7;
}
p
{
font-family:moderna;
color:black;
font-size:17px;
}
a{text-decoration:none;}

#boxdiv
{
position:fixed;
height:0px;
width:350px;
bordr:3px solid #59656E;
position:absolute;
margin:150 300 200 510;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

#tlt
{
font-family:moderna;
color:black;
font-size:23px;
}

form
{
margin-top:80px;
font-family:Tahoma;
color:white
}

h3
{color:white;
font-size:30;}
</style>

</head>

<body>
<div id="entirediv"><div id="boxdiv">
<form align="center" action="login_submit.php" method="post">
<div id="tlt"><h1>WELCOME</h1></div>
<input type="email" placeholder=" Email"  name="email" style="height:30px;font-size:14pt;float:center;margin:5px"/>
<br><br>
<input type="password" placeholder=" Password" name="password" style="height:30px; font-size:14pt; float:center;margin:5px"/>

<a href="signup.php"><p><b>Not Registered? Create an account here!</b></p></a>
<input type="submit" src="Login Button.png" alt="Submit" width="115" height="48" >
</form>


 </div> </div>
</body>

</html>
