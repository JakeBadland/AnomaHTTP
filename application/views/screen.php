<?php $this->load->view('layouts/header'); ?>

<div style="margin-top: 100px">
	<div class="tac">Hello!</div>
	<br/>
	<div class="tac"><b>Your screen size : <label id="screenSize"></label></b></div>
	<br/>
	<div class="tac" id="system"></div>
	<div class="tac">Thanks for statistics!</div>
</div>

<br/>
<br/>
<br/>
<br/>

<div class="tac">
	Most popular screen sizes:
	<?php foreach ($data['sizes'] as $size) : ?>
		<div> Width : <?= $size->width ?> * Height : <?= $size->height ?></div>
	<?php endforeach; ?>
</div>


<script type="text/javascript">
	$(document).ready(function () {

		let data = {
			width: $(window).width(),
			height: $(window).height(),
			system: navigator.platform
		};

		$('#screenSize').text('W:' + data.width + ' * H:' + data.height);

		$.post('/index.php/main/screen', data, function (resp) {

		})
	})
</script>

<?php $this->load->view('layouts/footer'); ?>
