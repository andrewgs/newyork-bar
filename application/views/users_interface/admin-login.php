<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('users_interface/head');?>
<body>
	<div class="container">
		<div class="row">
			<div style="width:650px; margin:50px 0 0 150px;">
				<?php $this->load->view('forms/autorization');?>
			</div>
		</div>
	</div>
	<?php $this->load->view('users_interface/scripts');?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#send").click(function(event){
				var err = false;
				$(".input-xlarge").each(function(i,element){if($(this).val()==''){err = true;}});
				if(err){event.preventDefault();}
			});
			$("#reset").click(function(){location.href='<?=$baseurl;?>';})
		});
	</script>
</body>
</html>
