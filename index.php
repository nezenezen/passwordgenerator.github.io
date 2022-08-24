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

	<?php
		$length=25;//default password length
		$count=50;//default number of passwords
			$chk_upper=!empty($_GET['chk_upper']);
			$chk_lower=!empty($_GET['chk_lower']);
			$chk_digit=!empty($_GET['chk_digit']);
			$chk_special=!empty($_GET['chk_special']);
		// if no char sets selected: default
		if(!$chk_upper && !$chk_lower && !$chk_digit && !$chk_special){
			$chk_safe=true;
			$chk_upper=true;
			$chk_lower=true;
			$chk_digit=true;
			$chk_special=false;
			$chk_require=true;
			$chk_startdigit=true;
		}
		// use what was selected by user
		else{
			$chk_safe=!empty($_GET['chk_safe']);
			$chk_require=!empty($_GET['chk_require']);
			$length=(!empty($_GET['length'])?(int)$_GET['length']:$length);
				if($length>25)$length=25;// capped at 25 chars max length
				if($length<5)$length=5;// capped at 5 chars min length
			$count=(!empty($_GET['count'])?(int)$_GET['count']:$count);
				if($count>999)$count=999;// capped at 999 passwords max
				if($count<1)$count=1;// capped at 1 password min
		}	
			$str_upper='';
			$str_lower='';
			$str_digit='';
			$str_special='';
		// characters that will be used
		if($chk_upper==1){
			$str_upper="QAZXSWEDCVFRTGBNHYUJMKIOLP";
			if($chk_safe!=1) $str_upper.="IO";
		}
		if($chk_lower==1){
			$str_lower.="zxcvbnmlkjhgfdsaqwertyuiop";
			if($chk_safe!=1) $str_lower.="iol";
		}
		if($chk_digit==1){
			$str_digit.="86429753";
			if($chk_safe!=1) $str_digit.="01";
		}
		if($chk_special==1){
			$str_special.="~!@#$%^&*()>?_+[];',.~{}|:<";
			if($chk_safe!=1) $str_special.="\/!@";
		}
		$use=$str_upper.$str_lower.$str_digit.$str_special;
		$use_length=strlen($use)-1;
	?>

	<div id="main-content">
	<div class="container">
		<div id="content-area" class="with_sidebar with_sidebar_right clearfix">
			<div class="et_first_section">
				<div class="et_pb_section et_pb_section_0 et_section_regular">
					<div id="et_recent_tweets-2" class="et_pb_widget widget_et_recent_tweets">
						<div class="et_first_content">
							<div class="PGimages1"><img src="./wp-content/themes/passwordgenerator/images/PGimages.svg"></div>
							<div class="first_content">
							<span class="text-bold">PASSWORD GENERATOR</span> adalah sebuah website yang digunakan untuk membuat password secara acak. Dengan menggunakan bahasa pemrogaman php dan javascript yang simple, dijamin keamanannya dan susah untuk dibobol atau di'Brute Force'. Disamping itu, kami juga tidak akan pernah menyimpan hasil password yang sudah dibuat ke dalam server kami maupun membagikannya pada orang lain. Cukup atur pengaturan sesuai keinginan Anda, lalu tekan <span class="text-bold">"BUAT PASSWORD"</span>.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="content-area" class="with_sidebar with_sidebar_right clearfix">
			<!-- LEFT CONTENT -->
			<div class="et_pb_extra_column_main">
				<div class="et_pb_section  et_pb_section_0 et_section_regular">
					<div id="et_recent_tweets-2" class="et_pb_widget widget_et_recent_tweets">
						<h4 class="widgettitle">Pengaturan</h4>
						<div class="content-setting">
							<form action="index.php" method="get">
							<div class="control-group">
								<!--<label class="control control--checkbox tooltip">Hide confusing characters
									<span class="tooltiptext">Checked to hide this confusing characters "IOiol01/\!@"</span>
									<input type="checkbox" name="chk_safe" checked="checked">
									<div class="control__indicator"></div>
								</label>-->
								<label class="control control--checkbox tooltip">
									<span tooltip="Menggunakan huruf kapital besar (ABC)" flow="right">Perbolehkan memakai huruf besar</span>
									<input type="checkbox" name="chk_upper" checked="checked">
									<div class="control__indicator"></div>
								</label>
								<label class="control control--checkbox tooltip">
									<span tooltip="Menggunakan huruf kecil (abc)" flow="right">Perbolehkan memakai huruf kecil</span>
									<input type="checkbox" name="chk_lower" checked="checked">
									<div class="control__indicator"></div>
								</label>
								<label class="control control--checkbox tooltip">
									<span tooltip="Menggunakan angka numeric (123)" flow="right">Perbolehkan menggunakan angka</span>
									<input type="checkbox" name="chk_digit" checked="checked">
									<div class="control__indicator"></div>
								</label>
								<label class="control control--checkbox tooltip">
									<span tooltip="Menggunakan spesial karakter simbol (!@#)" flow="right">Perbolehkan menggunakan simbol</span>
									<input type="checkbox" name="chk_special">
									<div class="control__indicator"></div>
								</label>
								<!--<label class="control control--checkbox">Require at least one character of each chosen type
									<input type="checkbox" name="chk_require" checked="checked">
									<div class="control__indicator"></div>
								</label>-->
								<ul class="input-row">
									<li><input class="input-setting" type="text" name="length" value="25" size="3" maxlength="3">
									<label class="control_text"> Panjang password</label></li>
									<li><input class="input-setting" type="text" name="count" value="50" size="3" maxlength="3">
									<label class="control_text"> Jumlah password</label></li>
								</ul>
								<p class="note-notice">Centang semua pengaturan untuk membuat password lebih kuat.</p>
							</div>
							
							<br>
							<div class="widget_content">
								<input class="widget-button button-width" type="submit" value="BUAT PASSWORD">
							</div>
							</form>
						</div>
					</div> <!-- end .et_pb_widget twitter-->
			
				</div> <!-- .et_pb_section -->
			</div>
			
			<!-- RIGHT CONTENT -->
			<div class="et_pb_extra_column_sidebar">
				<div id="et_recent_tweets-2" class="et_pb_widget widget_et_recent_tweets">
					<h4 class="widgettitle">Hasil</h4>
					<div class="triangle"></div>
					<div class="result-pass">
						<script src="./wp-content/themes/passwordgenerator/js/clipboard.min.js"></script>
						<script>
							var clipboard = new Clipboard('.copy-button', {
								target: function() {
									return document.querySelector('#copy-target');
								}
							});
							clipboard.on('success', function(e) {
								console.log(e);
							});
							clipboard.on('error', function(e) {
								console.log(e);
							});
						</script>
						<?php
							echo '<pre id="copy-target">';
							for($x=0; $x<$count; ++$x){
								$password='';
								if($chk_require==1){
									if($chk_upper==1) $password.=$str_upper[rand(0,(strlen($str_upper)-1))];
									if($chk_lower==1) $password.=$str_lower[rand(0,(strlen($str_lower)-1))];
									if($chk_digit==1) $password.=$str_digit[rand(0,(strlen($str_digit)-1))];
									if($chk_special==1) $password.=$str_special[rand(0,(strlen($str_special)-1))];
							}
							for($i=strlen($password); $i<$length; ++$i){
								$password.=$use[rand(0,$use_length)];
							}
							echo htmlentities(str_shuffle($password))."\r";
							}
							echo '</pre>';
						?>
					</div>
					<div class="widget_content">
						<input type="submit" class="widget-button button-width copy-button" data-clipboard-action="copy" data-clipboard-target="#copy-target" value="SALIN HASIL">
					</div>
				</div> <!-- end .et_pb_widget twitter-->
			</div>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php include('footer.php'); ?>