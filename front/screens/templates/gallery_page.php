<!doctype html>
<html lang="en">


<head>
	<?php $this->load->view($head); ?>
</head>

<body>


	<!--====== OFFCANVAS MENU PART START ======-->

	<div class="off_canvars_overlay"></div>
	<?php $this->load->view($mobile_nav); ?>
	<header class="header-area">
		<?php $this->load->view($topbar); ?>
		<?php $this->load->view($navbar); ?>
	</header>
	<?php $this->load->view($banner); ?>
	<?php $this->load->view($view_path); ?>
	<?php $this->load->view($footer); ?>

	<!--====== GO TO TOP PART START ======-->

	<div class="go-top-area">
		<div class="go-top-wrap">
			<div class="go-top-btn-wrap">
				<div class="go-top go-top-btn">
					<i class="fa fa-angle-double-up"></i>
					<i class="fa fa-angle-double-up"></i>
				</div>
			</div>
		</div>
	</div>

	<!--====== GO TO TOP PART ENDS ======-->

	<?php $this->load->view($javascripts); ?>
	<?php if (!empty($scripts) && count($scripts) > 0) : ?>
		<?php foreach ($scripts as $script) : ?>
			<script src="<?php echo $script; ?>"></script>
		<?php endforeach ?>
	<?php endif ?>

</body>

</html>



