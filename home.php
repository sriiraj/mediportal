<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title>Home - MediPortal</title>
</head>
<body>
	<table>
		<div>
		<div>
            <table align="center" width="100%">
					<tr align="right">
						<td width="10%">
							<a href="Home.php"><img src="images/logo.png" align="left"></a>
						</td>
						<td width="30%">&nbsp;</td>
						<td align="center" width="10%">
							<fieldset><a href="Home.php" >Home <img src="images/home.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="Registration.php">Registration<img src="images/registration.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="service.php">Our Service<img src="images/service.png"></a></fieldset>
						</td>
						<td width="10%" align="center">
							<fieldset><a href="Login.php">Login<img src="images/login.png"></a></fieldset>
						</td>
					</tr>
				</table>
		</div>
        </div>
    </table>
<div align="center">
	<script>
	var i=0;
	var images=[];
	var time=3000;
	images[0]="images/1.jpg";
	images[1]="images/2.jpg";
	images[2]="images/3.jpg";
	images[3]="images/4.jpg";
	function changeImage()
	{
	   document.slide.src=images[i];

	   if(i<images.length-1)
	   {
	      i++;
	   }
	   else
	   {
	     i=0;
	   }
	   setTimeout("changeImage()",time);
	}
	window.onload=changeImage;
	</script>
	<img name="slide" width="100%" height="70%">
</div>
<div>
	<h1 align="center"><i>Welcome to MediPortal</i></h1>
</div>

<div>
	<table>
		<tr>
			<td width="100%">
	<fieldset>
		<h1 align="center">About us</h1>
		<p>
			Mediportal.com is the first online doctor appointment service platform in Bangladesh, providing real time doctor information and appointments through a fully integrated system. Mediportal is missioned to bring convenience in the healthcare service delivery for the general people in Bangladesh.
					<br>
					
					Helping peoples accross the world by providing commiunication between doctor and patient.We try to provide the best facilities to patient and doctor so that they can now easily be connected with each other. Patient can easily take treatment from doctor and doctor also can freely give consultation to patient
		</p>
		<div align="center"><a href="About_Us.php">Read More</a></div>
	</fieldset>
</td>		
    </tr>
	</table>
</div>	
//
<br>
<fieldset>                  
    <div>
            <h1 align="center"><b>Our Service</b></h1>
    </div>
        //
		<div>
            <table align="left" width="35%">
				<tr>
				<td align="center">
				<fieldset>
                    <a href="service.php"><img src="images/appointment.png" align="center" width="30%"></a>
				        <h1>Get Appointment From Home</h1>
									</fieldset>
							</td>
						</tr>
					</table>
					<table align="right" width="30%">
						<tr>
							<td align="center">
								<fieldset>
									<a href="service.php"><img src="images/donar.png" width="30%" align="center"></a>
									<h1>Search for a blood donors</h1>
									
								</fieldset>
							</td>
						</tr>
					</table>
				</div>
                   <div>
				<table align="right" width="35%">
						<tr>
							<td align="center">
								<fieldset>
									<a href="service.php"><img src="images/contact.png" width="30%" align="center"></a>
									<h1>Contact with your doctor</h1>
								</fieldset>
							</td>
						</tr>
					</table>
				</div>
			</fieldset>
<br><br>
<br><br><br>	
<br><br>
<div align="center">
		<table align="center">
			<tr>
				<td align="center" colspan="3">
				<a href="About_Us.php">About Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="Contact_Us.php">Contact Us   </a>
			</td>
			<td align="center" colspan="3">
				<a href="privacyPolicy.php">Privacy Policy   </a>
			</td>
			</tr>
		</table>
	</div>
    <div>
<table align="center" width="100%" border="1">
<tr>
<td align="center" colspan="3">
<b>&copy;2018 MediPortal @ All rights reserved</b>
</td>
</tr>
</table>
</div>
</body>
</html>
       
