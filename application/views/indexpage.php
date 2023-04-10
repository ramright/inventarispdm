<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title><?= $title ?></title>
	<!-- CSS files -->
	<link href="<?= base_url('assets/') ?>css/tabler.min.css?1674944402" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>css/tabler-flags.min.css?1674944402" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>css/tabler-payments.min.css?1674944402" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>css/tabler-vendors.min.css?1674944402" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>css/demo.min.css?1674944402" rel="stylesheet" />
	<link href="<?= base_url('assets/plugins/sweetalert/') ?>sweetalert2.min.css" rel="stylesheet" />
</head>

<body>
	<script src="<?= base_url('assets/') ?>js/demo-theme.min.js?1674944402"></script>
	<div class="page">
		<!-- Navbar -->
		<?php $this->load->view('partials/header') ?>
		<?php $this->load->view('partials/menu') ?>
		<div class="page-wrapper">
			<?php $this->load->view($content) ?>
			<?php $this->load->view('partials/footer') ?>
		</div>
	</div>
	<!-- Libs JS -->
	<!-- Tabler Core -->
	<script src="<?= base_url('assets/') ?>js/tabler.min.js?1674944402" defer></script>
	<script src="<?= base_url('assets/') ?>js/demo.min.js?1674944402" defer></script>
</body>

</html>