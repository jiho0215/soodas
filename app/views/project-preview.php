<div style="width:100%; height:100%; z-index:1;">
	<section class="bodyofbody" style="margin:5px;">
		<div id="project-title" style="font-size:22px; font-weight:500; margin:5px;">
			Buy New Macbook Pro Now
		</div>
		<div id="project-about-label" style="margin:5px; margin-top:15px;">About</div>
		<div id="project-about">
			<?php
				echo $projectabout;
			?>
			This is about buy new macbook pro now program.
		</div>
	</section>

	<section class="bodyofbody" style="margin:5px;">
		<div id="photo">
			<img id="main" src="/pics/11.jpg">
		</div>
		<div id="thumbnails">
			<a href="/pics/11.jpg" onclick="swap(this); return false;" onmouseover="swap(this); return false;"><img src="/pics/21.jpg"></a>
			<a href="/pics/12.jpg"  onclick="swap(this); return false;"  onmouseover="swap(this); return false;"><img src="/pics/22.jpg"></a>
			<a href="/pics/13.jpg"  onclick="swap(this); return false;"  onmouseover="swap(this); return false;"><img src="/pics/23.jpg"></a>
		</div>
	</section>
</div>
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
</script>