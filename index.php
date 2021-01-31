<?php
get_header();
?>

<main role="main">
	<div class="banner-bg">
		<div class="container banner">
			<div class="row">
				<div class="col-sm">
					<div class="col-sm-11">
						<h1>We respect your beliefs</h1>
						<img src="<?php bloginfo('template_url');?>/assets/images/ico.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu
							risus quis lectus efficitur efficitur vel id neque. Morbi aliquam erat
							tincidunt mi pulvinar auctor.<br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu
							tincidunt mi pulvinar auctor. Pellentesque lacinia ut libero vitae
							porta. Nullam at lorem risus. Orci varius natoque penatibus et
						magnis dis parturient montes, nascetur ridiculus mus.</p>
					</div>
				</div>
				<div class="col-sm">
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="cadastro">
		<div class="row">
			<div class="col-sm-7">
				<div class="row">
					<div class="col-sm-5 formulario">
						<?php echo do_shortcode('[form_memorial_shortcode]'); ?>
					</div>
					<div class="col-sm-1 "></div>
					<div class="col-sm-5 memorial_msg">
						<?php echo do_shortcode('[memorial_shortcode]'); ?>
					</div>
				</div>
			</div>
			<div class="col-sm-5 cadastro-descricao">
				<h1>Our digital memorial application</h1>
				<p>An account for your family members, friends and loved ones</p>
				<ul>
					<li>A space for the mourners</li>
					<li>Send messages, tributes and flowers</li>
					<li>Keep memories</li>
					<li>Create a memory book from the app</li>
				</ul>
			</div>
		</div>
	</main>
	<?php
	get_footer();
	?>
