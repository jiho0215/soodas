<?php
if(isset($_POST['submit'])){
	// contact subject
	$subject = $_POST['subject'];

	//details
	$message = $_POST["message"]."\r\n".$_POST["name"]."\r\n".$_POST["tel"];

	//mail of sender
	$mail_from = $_POST["customer-mail"];
		
	//from
	$header = "from: ".$_POST["name"]."<".$mail_from.">";

	//Enter your email address
	$to = "ianjiholee@gmail.com";

	ini_set ('SMTP', 'smtp.gmail.com');
	ini_set ('smtp_port', 25);

	$send_contact = mail($to,$subject,$message,$header);

	// check, if message sent to your email
	// display message "we've received your information"
	if($send_contact){
		echo '<script language="javascript">';
		echo 'alert("Successfully sent your message. \r\nWe will reply to you as soon as possible. \r\nThank you.\r\n")';
		echo '</script>';
	}
	else {
		echo '<script language="javascript">';
		echo 'alert("Failed to send your message. \r\nPlease try again. \r\n")';
		echo '</script>';
	}
}
?>

<div style="position:relative; max-height:230px; overflow:hidden;"> 
	<img src="../../pics/p1.jpg" alt="Sky-Flight" width="100%">
	<h1 class="background-title">About</h1>
</div>

<div style="position:relative;">
	<section class="bodyofbody" style="margin-top:10px; margin-bottom:10px;">
		<section id="about-soodas">
			<br/>
			<h2 class="title1">Soodas.com</h2>
			<br/>
			<p class="text1">
				<b>Soodas</b> is non-profit personal web page.<br/>
				It is established in 2015 for personal purpose; <i>study, share and communicate</i>.<br/>
			</p>
			<p class="text2">
				All rights reserved.
			<br/>
			</p>
		</section>
	</section>
	<hr>
</div>


<div style="position:relative;">
	<section class="bodyofbody">
		<section id="about-author">
			<h2 class="title1">Author</h2>
			<br/>
			<h3 class="title2">Academic</h3>
			<p class="text1">
				<label class="l1">University :</label> <label class="l2">Brigham Young University, Provo UT</label><br/>
				<label class="l1">Degree :</label> <label class="l2">BS Information Systems</label><br/>
				<label class="l1">Year :</label> <label class="l2">2014 Dec</label><br/>
			</p>

			<h3 class="title2">Work Experience</h3>
			<p class="text1">
				<label class="l1">Period :</label> <label class="l2">2015 April - Present</label><br/>
				<label class="l1">Position :</label> <label class="l2">MES Management Team</label><br/>
				<label class="l1">Primary Tech :</label> <label class="l2">C#.NET, SQL Server</label><br/>
			</p>

			<h3 class="title2">Skills</h3>
			<p class="text1">
				<label class="l1">Experienced :</label> <label class="l2"> HTML | CSS | JavaScript | jQuery | PHP | Bootstrap | MySQL | SQL Server | .NET(C#) | Java | Captivate</label><br/>
				<label class="l1">Interested in :</label> <label class="l2">Any Programming Language</label><br/>
			</p>

			<h3 class="title2">Others</h3>
			<p class="text1">
				<label class="l1">Languages :</label> <label class="l2">Korean and English</label><br/>
				<label class="l1">Love to :</label> <label class="l2">Ski | Snowboard | Rockclimbing | Golf | Fish</label><br/>
				<label class="l1">My word :</label> <label class="l2">Watch, listen, think, ask, and  do your best.</label>
				<br/>
				<br/>	
			</p>
		</section>
	</section>
</div>

<div style="position:relative;"> 
	<img src="../../pics/seasky.jpg" alt="seasky" height="370px" width="100%">
	<div class="background">
		<section class="bodyofbody">
			<section id="contact" name="contact">
				<h2 class="title1">Contact Soodas</h2>
				<p class="text2" style="margin-bottom:10px;">Call: +1 323)979-3197 | Email: info@soodas.com</p>

				<form action="" method="post">

					<input class="contact-container" type="text" name="name" id="name" placeholder="Name*" required title="Name: This field is required.">

					<input class="contact-container" type="email" name="customer-mail" id="customer-mail" placeholder="Email*" required title="Email: This field is required.">

					<input class="contact-container" type="tel" name="tel" id="tel" placeholder="Phone Number" title="Phone Number">

					<input class="contact-container-subject" type="text" name="subject" id="subject" placeholder="Subject*" required title="Subject: This field is required.">

					<textarea class="contact-container-message" name="message" id="message" placeholder="Message*" rows="1" required title="Message: This field is required."></textarea>
					<p style="color:#434343; font-size:11px;padding:5px;">
						<a style="color:red">*</a> required
					</p>
					<div align="center">
						<input id="contact-send" type="submit" name="submit" value="Send">
					</div>
				</form>
			</section>
		</section>
	</div>
</div>

