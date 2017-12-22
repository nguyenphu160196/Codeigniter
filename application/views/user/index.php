<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('user/head',$page_title)?>
</head>
<body>
	<header id="header">
		<?php $this->load->view('user/header') ?>
	</header>
		<?php $this->load->view($temp)?>
	<footer id="footer">
		<?php $this->load->view('user/footer') ?>
	</footer>
</body>
</html>