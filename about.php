<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage Password_Generator
 * @since Password Generator 1.0
 */

include('header.php'); ?>

	<div id="main-content">
	<div class="container">
		<div id="content-area" class="with_sidebar with_sidebar_right clearfix">
			<div class="et_first_section">
				<div class="et_pb_section et_pb_section_0 et_section_regular">
					<div id="et_recent_tweets-2" class="et_pb_widget widget_et_recent_tweets">
						<div class="et_about_content">
							<div class="about_content">
							<h1 class="about-heading">ABOUT</h1>
							<h3 class="about-heading3">Tentang Password Generator</h3>
							<p><span class="text-bold">PASSWORD GENERATOR</span> adalah website untuk membantu Anda dalam membuat password secara acak dan dalam jumlah yang banyak. Didesain oleh <span class="text-bold">Nezenezen</span> dengan berbasis source code Password Generator buatan <span class="text-bold">Ricocheting</span>. Dengan menggunakan bahasa pemrogaman php dan javascript yang sederhana, kami tidak akan menyimpan hasil generate password yang sudah anda buat ke dalam server kami. Kami juga tidak akan membagikannya ke orang lain.</p>
							<p>Alasan dibuatnya website Password Generator ini dikarenakan malasnya membuat password secara manual yang dapat membuat keyboard cepat rusak, terlebih kalau harus membuat banyak password sekaligus. Memakai password menggunakan nama seseorang, tanggal lahir, maupun benda kesayangan juga sudah terlalu mainstream. Terlalu rawan dan mudah diraba-raba oleh seseorang, terlebih orang terdekat (seperti misalnya pacar yang lagi patah hati karena diputusin, mencoba masuk ke akun sosial media Anda menggunakan password tanggal jadian Anda. Lalu melakukan hal yang mengganggu atau merusak nama baik menggunakan akun sosial media Anda). Untuk itulah dibuat website ini untuk mencegah terjadinya kebobolan akun karena password yang terlalu mudah dan lemah.</p>
							<p class="note-notice">Eling! Password Generator iki sek luwih apik ketimbang jeneng e ojobmu digawe password. Hahaha...</p>
							<br/><br/>
							<h3 class="about-heading3">Keunggulan Password Generator</h3>
							<div class="superiority">
								<div class="superiority-content">
									<div><img src="./wp-content/themes/passwordgenerator/images/PGimages2.svg"></div>
									<h5>AMAN</h5>
									<p>Dijamin aman 100%. Karena kami tidak akan menyimpan hasil generate password anda maupun membaginya kepada orang lain.</p>
								</div>
								<div class="superiority-content">
									<div><img src="./wp-content/themes/passwordgenerator/images/PGimages3.svg"></div>
									<h5>MUDAH</h5>
									<p>Cukup atur pengaturan sesuai keinginan anda, lalu tekan "Buat Password". Password akan muncul di kolom "Hasil".</p>
								</div>
								<div class="superiority-content">
									<div class="gbr4"><img src="./wp-content/themes/passwordgenerator/images/PGimages4.svg"></div>
									<h5>GRATIS</h5>
									<p>Anda bebas membuat password sebanyak-banyaknya tanpa mengeluarkan biaya apapun. It's totally free.</p>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
	</div> <!-- #main-content -->

<?php include('footer.php'); ?>