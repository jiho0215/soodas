<section class="project-menu">
		<button  id="back" class="project-menu-button" type="button" onclick="goBack()">Go Back</button>		
</section>
<section class="project">
	<section class="bodyofbody">
		<div id="project-title" style="font-size:20px;">
			<?php 
				echo $projectname; 
			?>
			DB Watcher
		</div>
		<div id="project-about-label">About</div>
		<div id="project-about">
			<?php
				echo $projectabout;
			?>
		</div>
	</section>
	

	
	
<section class="bodyofbody">
	<div id="photo">
		<img id="main" src="/pics/11.jpg">
	</div>
	<div id="thumbnails">
		<a href="/pics/11.jpg" onclick="swap(this); return false;" onmouseover="swap(this); return false;"><img src="/pics/21.jpg"></a>
		<a href="/pics/12.jpg"  onclick="swap(this); return false;"  onmouseover="swap(this); return false;"><img src="/pics/22.jpg"></a>
		<a href="/pics/13.jpg"  onclick="swap(this); return false;"  onmouseover="swap(this); return false;"><img src="/pics/23.jpg"></a>
	</div>
</section>




	<section class="bodyofbody">
	<div style="position:relative;">
		C# Java html css 
	</div>
	<div style="position:relative; height:50%;">
		<textarea autocomplete="off" id="textareaCode" wrap="logical" spellcheck="false">
			<?php
				$code;
			?>
		</textarea>
		</div>
	</section>
	
	
	
	
	
	
	
	<section class="bodyofbody">
		<div class="comment-new">
			<form action="" method="post">
				<div>
					<input class="comment-name" type="text" name="name" id="name" placeholder="Name*" required title="Name is required field.">
					<input class="comment-password" type="password" name="password" id="password" placeholder="Password*" required title="Password is required field.">
				</div>
				<textarea class="comment-message" name="message" id="message" placeholder="Message*" required title="Message is required field."></textarea>
				<p style="color:#434343; font-size:11px;padding:5px;">
					<a style="color:red">*</a> required
				</p>
				<div align="right">
					<input id="contact-send" type="submit" name="submit" value="Send" style="height:25px; width:70px;">
				</div>
			</form>
		</div>
		<div class="comment-old">
			<div class="comment">
				<div class="comment-author">
					Jiho Lee
				</div>
				<div class="comment-time">
					2015-05-05 12:21 pm
				</div>
				<div class="comment-text">
					Do your best for the better future!
				</div>
			</div>
		</div>
	</section>
</section>	


<?php
if(isset($_POST['submit'])){
	// name and password
	$name = $_POST['name'];
	$password = $_POST['password'];
	//message
	$message = $_POST["message"];
//and do something
}
?>
<script type="text/javascript">
	function swap(image){
		document.getElementById("main").src = image.href;
	}
	function goBack() {
		window.history.back();
	}

</script>