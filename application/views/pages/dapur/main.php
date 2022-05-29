<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/styles/main.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
	<title>Document</title>
</head>

<body>
	<div class="wrapper-layout">
		<?php $this->load->view("./layouts/dapur/header"); ?>
		<?php $this->load->view("./layouts/dapur/sidebar"); ?>
		<?php $this->load->view("./layouts/dapur/content"); ?>
	</div>
</body>

</html>
