<?php
$this->load->helper("./components/badge");
$this->load->helper("./components/card");
?>
<div class="mt-48px w-1/2 mx-auto">
	<div class="flex">
		<?php Badge(["text" => "Blog"]); ?>
		<span class="text-bold text-dark-blue ml-16px">Apr 12, 2022</span>
		<span class="text-bold text-dark-blue ml-16px">Donald Marbun</span>
	</div>

	<div class="flex flex-col mt-16px mb-48px">
		<h1 class="text-dark-blue text-3xl font-bold">Apa Itu Blog? Pengertian Blog dan Contohnya Lengkap!</h1>
		<div class="mt-32px">
			<img class="rounded-[15px]" src="https://www.hostinger.co.id/tutorial/wp-content/uploads/sites/11/2019/03/apa-itu-blog-dan-pengertian-blog.webp" />
		</div>

		<div class="wrapper-content">
			<p class="my-32px">
				Masih bingung mengenai apa itu blog? Jadi, pengertian blog adalah “web log”, yang berarti website untuk menyimpan “log” atau catatan, yang dikelola oleh satu atau beberapa blogger.
			</p>
			<p class="mb-32px">
				Nah, dalam artikel ini, kami membahas berbagai informasi seputar blog, termasuk apa itu blogging dan blogger, sejarah blog, fungsi dan jenis blog, perbedaan blog dan website, dan lain sebagainya. Selamat membaca!
			</p>

			<iframe width="100%" height="374" src="https://www.youtube.com/embed/YRxDCO1BBEM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<h2 class="text-4xl text-dark-blue font-bold mt-32px">Apa Itu Blogging?</h2>
			<p class="my-32px">
				Blogging adalah aktivitas mengelola blog, seperti menulis, memperbarui, atau menambahkan elemen lainnya (misalnya video) pada konten blog. Aktivitas ini dilakukan oleh blogger dengan memanfaatkan tool digital yang ada di Internet.
			</p>
			<p class="mb-48px">
				Aktivitas blogging mulai populer pada awal tahun 2000-an ketika sejumlah blog berbau politik bermunculan. Beberapa saat setelahnya, tema how-to dan tutorial mulai muncul. Sejak saat itu, aktivitas ini pun menjadi sangat populer.
			</p>

			<h2 class="text-4xl text-dark-blue font-bold mb-32px">
				Apa Itu Blogger?
			</h2>

			<p>
				Blogger adalah orang yang membuat atau memiliki dan mengelola blog, membagikan pandangan serta perspektif kepada audiens untuk tujuan pribadi maupun bisnis.
			</p>

			<p class="my-32px">
				Blogger juga merupakan nama layanan blogging dari Google, dengan alamat Blogger.com atau yang sering kita jumpai sebagai Blogspot.
			</p>

			<p class="mb-48px">
				Nah, setelah membahas apa itu blogging dan blogger, di bawah ini kami akan menjelaskan sejarahnya.
			</p>

			<h2 class="text-4xl text-dark-blue font-bold mb-32px">
				Sejarah Blog dan Blogging
			</h2>

			<p>
				Blog pertama kali digagas oleh Blogger.com pada bulan Agustus tahun 1999, yang kemudian diakuisisi oleh Google pada tahun 2003. Sejarah blog dimulai dari istilah ‘Weblog’, yang diciptakan oleh Jorn Barger pada tanggal 17 Desember 1997.
			</p>

			<p class="my-32px">
				Awalnya, aktivitas mengelola blog banyak dilakukan untuk segmen berita dan informasi. Tujuannya mirip seperti koran yang sudah lebih dulu ada, tapi blogging berkembang lebih cepat secara komparatif.
			</p>
			<p>
				Update informasi yang terus-menerus dan kemudahan memilih topik yang sesuai dengan minat dan hobi menjadi dua dari sekian alasan mengapa orang-orang mulai melakukan blogging.
			</p>

			<p class="my-32px">
				Tahun berikutnya, yaitu pada tahun 2003, WordPress pun diluncurkan, menawarkan segala kemudahan bagi orang-orang yang tertarik untuk memulai blog dan menjadi blogger. Website blogging kemudian menjadi terkenal dan menarik perhatian warganet.
			</p>

			<p>
				Beberapa blogger, seperti ProBlogger.net dan JohnChow.com, menjadikan blog miliknya sebagai ‘mesin pencetak uang’ dengan bekerja sama dengan pihak ketiga (dalam hal beriklan).
			</p>

			<p class="my-32px">
				Keduanya bahkan menjadi contoh bagaimana Anda juga bisa mencoba cara mendapatkan uang dari internet dengan mengonlinekan blog.
			</p>
		</div>

		<div class="wrapper-writter">
			<div class="flex">
				<img src="<?= base_url('assets/images/donald.png') ?>" width="86" height="86" class="rounded-full" />
				<div class="flex flex-col ml-32px mt-2">
					<div class="tracking-widest font-semibold">PENULIS</div>
					<div class="text-3xl text-dark-blue font-bold mt-8px">Donald Marbun</div>
				</div>

			</div>
			<div class="mt-16px text-xl leading-8">
				Donald, yang lebih akrab disapa Bangdon, adalah SEO Content Analyst di Hostinger. Ia suka mengikuti tren seputar teknologi, digital marketing, dan bahasa. Melalui tutorial yang ditulisnya di blog Hostinger, Bangdon ingin berbagi informasi dan membantu pembaca menyelesaikan masalahnya
			</div>
		</div>

	</div>
</div>

<div class="bg-ghost-white w-full py-10 mb-48px">
	<div class="text-center text-4xl text-dark-blue font-bold tracking-">Tutorial Terkait</div>

	<div class="grid grid-cols-3 mt-32px gap-x-7 gap-y-8  w-9/12 mx-auto">
		<?php CardNews([
			"image" => "https://www.hostinger.co.id/tutorial/wp-content/uploads/sites/11/2018/09/Cara-mendapatkan-uang-dari-internet-untuk-pemula.jpg",
			"title" => "Cara Membuat Website Toko Online Sendiri",
			"date" => "22 Jun",
			"description" => "Zaman makin maju. Penjual dan pembeli tidak perlu harus terus bertatap muka setiap saat ketika melakukan transaksi jual beli. Kenapa? Karena sekarang"
		]); ?>

		<?php CardNews([
			"image" => "https://www.hostinger.co.id/tutorial/wp-content/uploads/sites/11/2018/09/Cara-mendapatkan-uang-dari-internet-untuk-pemula.jpg",
			"title" => "Cara Membuat Website Toko Online Sendiri",
			"date" => "22 Jun",
			"description" => "Zaman makin maju. Penjual dan pembeli tidak perlu harus terus bertatap muka setiap saat ketika melakukan transaksi jual beli. Kenapa? Karena sekarang"
		]); ?>

		<?php CardNews([
			"image" => "https://www.hostinger.co.id/tutorial/wp-content/uploads/sites/11/2018/09/Cara-mendapatkan-uang-dari-internet-untuk-pemula.jpg",
			"title" => "Cara Membuat Website Toko Online Sendiri",
			"date" => "22 Jun",
			"description" => "Zaman makin maju. Penjual dan pembeli tidak perlu harus terus bertatap muka setiap saat ketika melakukan transaksi jual beli. Kenapa? Karena sekarang"
		]); ?>

	</div>

</div>
