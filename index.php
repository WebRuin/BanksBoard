<?php get_header(); ?>

			<!-- Banner -->
				<section class="main-header">
					<div class="main-header-image"></div>
				</section>
				<!-- <section class="video-container" id="video-container">
					<div class="filter"></div>
					<video id="header-video" autoplay loop class="fillWidth">
						<source src="<?php// bloginfo('template_directory'); ?>/library/videos/Coverr-beach2.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
						<source src="<?php// bloginfo('template_directory'); ?>/library/videos/Coverr-beach2.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
					</video>
					<div class="poster hidden">
						<img src="assets/videos/Coverr-beach2.jpg" alt="">
					</div>
				</section> -->

			<!-- One -->
				<section id="one" class="no-spotlight style1 bottom">
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2>Banks Board II Features:</h2>
									</header>
									<ul class="actions vertical">
										<li><a href="#" class="button special fit">Buy One</a></li>
										<li><a href="#" class="button fit">Contact Us</a></li>
									</ul>
								</div>
								<div class="4u 12u$(medium)">
									<ul>
									 	<li>108 (+/-) lbs. of buoyancy
									 	<li>Weighs in at about 13 pounds fully outfitted</li>
									 	<li>Flag mount and vent plug</li>
									 	<li>Detachable backpack strap</li>
									 	<li>Molded-in handle for easy towing and maneuverability</li>
									 	<li>Upper accessory meshing with eye-nut</li>
									 	<li>Lower meshing to store the ocean's bounty</li>
									</ul>
								</div>
								<div class="4u$ 12u$(medium)">
									<ul>
										<li>Dual molded-in gun bays with simple and secure tie downs</li>
										<li>Eyebolt for a floatline and/or kelp clip</li>
										<li>44" long x 24" wide and it only stands 5" (+/-) off the water</li>
										<li>Numerous pad eyes around the board for convenient and custom securing with supplied bungees</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

		 <!-- The Featured Post Loop -->
		 <?php $i = 0; ?>
		 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php
					$class = array('style2 right', 'style3 left');
					$id = array('two', 'three');
					// reset post class styles
					if ($i > 1) {
						$i = 0;
					}
					$post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
				?>
				<section id="<?php echo $id[$i] ?>" class="spotlight <?php echo $class[$i] ?>">
					<span class="image fit main"><img width="100%" src="<?php echo $post_thumbnail_url ?>" alt="<?php the_title(); ?>" /></span>
					<div class="content">
						<header>
							<h2><?php the_title(); ?></h2>
							<p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
						</header>
						<p><?php the_excerpt() ?></p>
						<ul class="actions">
							<li><a href="<?php get_permalink() ?>" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#<?php echo $id[$i + 1] ?>" class="goto-next scrolly">Next</a>
				</section>
				<?php $i++ ?>
			<?php endwhile; endif; ?>

			<!-- Five -->
				<!-- <section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Magna faucibus lorem diam</h2>
							<p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
						</header>
						<form method="post" action="#" class="container 50%">
							<div class="row uniform 50%">
								<div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
								<div class="4u$ 12u$(xsmall)"><input type="submit" value="Get Started" class="fit special" /></div>
							</div>
						</form>
					</div>
				</section> -->

<?php get_footer(); ?>
