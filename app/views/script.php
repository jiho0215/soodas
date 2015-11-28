
<script>

$( document ).ready(function() {

	$("#contact").click(function(){
		if($('#contactdiv').is(":hidden")) {
			$("#contactdiv").slideDown('slow');
			$('#ideadiv').slideUp('slow');
		}else{
			$('#contactdiv').slideUp('slow');
		}
	});

	$("#idea").click(function(){
		if($('#ideadiv').is(":hidden")) {
			$("#ideadiv").slideDown('slow');
			$('#contactdiv').slideUp('slow');
		}else{
			$('#ideadiv').slideUp('slow');
		}
	});

	$("#close").click(function(){
			$('#portfolioinfodiv').slideUp('slow');
	});

});

function portfolioinfo(ProjectName){
	$.post('/portfolioinfo.php', {ProjectName: ProjectName}, function(data){
		$('div#infohere').html(data);
	});
};
</script>


</body>
</html>