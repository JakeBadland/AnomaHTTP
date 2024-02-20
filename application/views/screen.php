<?php $this->load->view('layouts/header'); ?>

<div class="container outer">
	<div class="inner">

		<div style="margin-top: 100px">
			<div class="tac" >Hello!</div><br/>
			<div class="tac"><b>Your screen size : <label id="screenSize"></label></b></div><br/>
			<div class="tac" >Thanks for statistics!</div>
		</div>

	</div>
</div>

<script type="text/javascript">
	$(document).ready(function (){

		let data = {
			width : $(window).width(),
			height : $(window).height(),
		};

		$('#screenSize').text('W:' + data.width +  ' * H:' + data.height);

		$.post('/screen', data, function (resp){

		})
	})
</script>

<?php $this->load->view('layouts/footer'); ?>
