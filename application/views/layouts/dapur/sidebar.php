<?php
$this->load->helper("./components/icons");
?>
<div class="wrapper-sidebar flex flex-col">
	<div class="flex items-center mt-7 justify-center">
		<div class="flex items-center">
			<img width="36" height="36" src="https://donaldmarbun.com/storage/RFrUvFzu88xGIflSMiUFU8e1Jf6Nf1Nd2czgVtbg.png" />
			<span class="font-semibold tracking-wider text-lg ml-2">
				DAPUR MARBUN
			</span>
		</div>
	</div>

	<div class=" flex flex-col mt-32px text-gray">
		<div class="px-7 mt-3 flex items-center hover:bg-purple w-[calc(100%-30px)] py-2 hover:text-white rounded-r-full transition hover:ease-in duration-300 cursor-pointer">
			<?php MenuOpen(); ?>
			<div class="ml-4 text-sm">Dashboard</div>
		</div>

		<div class="px-7 mt-3 flex items-center hover:bg-purple w-[calc(100%-30px)] py-2 hover:text-white rounded-r-full transition hover:ease-in duration-300 cursor-pointer">
			<?php MenuOpen(); ?>
			<div class="ml-4 text-sm">Blog</div>
		</div>

		<div class="px-7 mt-3 flex items-center hover:bg-purple w-[calc(100%-30px)] py-2 hover:text-white rounded-r-full transition hover:ease-in duration-300 cursor-pointer">
			<?php MenuOpen(); ?>
			<div class="ml-4 text-sm">Article</div>
		</div>


		<div class="mt-24px px-7">
			<button class="bg-purple text-white rounded-full w-full py-2 text-sm">Buat Artikel</button>
		</div>

	</div>
</div>
