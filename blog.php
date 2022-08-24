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
							<h1 class="about-heading">BLOG</h1>
							<h3 class="about-heading3">Tips Mengamankan Password</h3>
							<img class="blog-image" src="./wp-content/themes/passwordgenerator/images/GbrBlog.jpg">
							<p>Setelah menggunakan password generator kami, kami akan memberikan anda tips untuk menjaga password anda tetap aman.</p>
							<ol>
								<li>Jangan menggunakan password yang sama untuk beberapa akun.</li>
								<li>Gunakan password setidaknya 10 karakter atau lebih, yang menggunakan huruf besar, huruf kecil, angka, dan simbol.</li>
								<li>Jangan menggunakan nama anda, nama keluarga anda, nama pacar anda, atau hewan peliharaan anda.</li>
								<li>Jangan menggunakan nomor hp, tanggal lahir, kode pos, plat nomor, dan lain sebagainya untuk password anda.</li>
								<li>Ganti secara berkala password anda, setidaknya 1 atau 3 bulan sekali.</li>
								<li>Jangan membagikan password akun penting anda kepada orang lain, bahkan orang terdekat sekalipun.</li>
								<li>Simpan password anda dengan benar dan aman. Jangan ditulis lalu ditaruh ditempat yang mudah dilihat orang lain.</li>
								<li>Pastikan untuk selalu Log Out setelah selesai mengakses akun anda, terlebih jika anda mengaksesnya di tempat atau menggunakan perangkat orang lain.</li>
							</ol>
							<br/>
							<p>Sebenarnya masih banyak hal yang perlu diperhatikan untuk mengamankan password. Begitu banyaknya sampai malas untuk mencantumkannya disini. Tapi dengan beberapa tips diatas, setidaknya anda bisa menjaga informasi pribadi anda tetap aman.</p>
							<p class="note-notice">Kejahatan tidak selalu terjadi hanya karena ada niat dari pelakunya, tapi juga karena ada kesempatan! Waspadalah!</p>
							<br/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
	</div> <!-- #main-content -->

<?php include('footer.php'); ?>