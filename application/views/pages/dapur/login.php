<?php
$this->load->helper("./components/inputs");
?>
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
	<div class="flex">
		<div class="flex flex-col w-1/2 pt-[84px] relative h-screen">
			<div class="mx-auto w-3/5">
				<div class="flex items-center justify-center">
					<img width="46" height="46" src="https://donaldmarbun.com/storage/RFrUvFzu88xGIflSMiUFU8e1Jf6Nf1Nd2czgVtbg.png" />
					<div class="tracking-widest text-2xl">Donald Marbun</div>
				</div>
				<div class="mt-8px flex justify-center">
					<div class="text-3xl font-normal tracking-wider text-dark-blue">Login</div>
				</div>

				<div class="wrapper-form-login flex flex-col mt-32px ">
					<?php
					Input([
						"label" 	  => 	"Username",
						"placeholder" => 	"Masukkan Username anda",
						"className"   =>    "mb-7"
					]);

					Input([
						"label" 	  => 	"Password",
						"placeholder" => 	"********",
					]);
					?>

					<button class="bg-purple text-white py-3 w-full rounded-full cursor-pointer">
						Login
					</button>
				</div>
			</div>
			<div class="copyright absolute bottom-10 text-gray mx-auto w-full">
				<div class="mx-auto w-3/5">

					&copy;2022 Marbun All Rights reserved;
				</div>
			</div>
		</div>
		<div class="w-1/2 bg-ghost-white flex  justify-center items-center relative">
			<img src="<?= base_url('assets/images/illustration/authentication.svg') ?>" class="w-11/12" />
		</div>
	</div>
</body>

</html>
