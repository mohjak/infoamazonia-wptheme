<?php
/*
 * Template Name: Institutional
 */
?>

<?php get_header(); ?>

<?php
// Slider
$slider_query = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => 4));
if($slider_query->have_posts()) :
	$first_img = wp_get_attachment_image_src(get_post_thumbnail_id($slider_query->post->ID), 'full');
	?>
	<section id="slider">
		<div class="slider-content" style="background-image: url(<?php echo $first_img[0]; ?>);">
			<?php while($slider_query->have_posts()) :
				$slider_query->the_post();
				$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-image="<?php echo $image[0]; ?>">
					<div class="container">
						<div class="five columns">
							<header class="post-header">
								<h2><?php the_title(); ?></h2>
							</header>
							<section class="post-content">
								<?php the_content(); ?>
							</section>
						</div>
					</div>
					<a class="selector" href="#" data-item="post-<?php the_ID(); ?>">&nbsp;</a>
				</article>
			<?php endwhile; ?>
		</div>
		<nav id="slider-nav">
			<div class="container">
				<div class="five columns">
					<div class="slider-nav-content">
					</div>
				</div>
			</div>
		</nav>
		<aside id="participate">
			<div class="container">
				<div class="twelve columns">
					<div class="participate-content">
						<h2>Citizen participation</h2>
						<h3>Take action on amazon water issues!</h3>
						<a class="button" href="http://agua.infoamazonia.org/">Submit a report</a>
					</div>
				</div>
			</div>
		</aside>
	</section>
	<?php
endif;
?>

<section id="about">
	<div id="data_block" class="about-block right clearfix">
		<div class="container">
			<div class="four columns">
				<svg id="svg_data" version="1.1" viewBox="0 0 100 100">
					<g>
						<rect class="h-bar-1" fill-opacity=".7" width="37.807999" height="4" x="44.882" y="47.958" />
						<rect class="h-bar-2" fill-opacity=".7" width="37.807999" height="4" x="44.882" y="54.528999" />
						<rect class="h-bar-3" fill-opacity=".7" width="37.807999" height="4" x="44.882" y="61.805" />
						<rect class="v-bar v-bar-1" fill-opacity=".7" width="3.546" height="22.013" x="79.144997" y="15.918" />
						<rect class="v-bar v-bar-2" fill-opacity=".7" width="3.546" height="13.493" x="71.156998" y="24.438" />
						<rect class="v-bar v-bar-3" fill-opacity=".7" width="3.546" height="5.5050001" x="63.168999" y="32.425999" />
						<path class="chart part-1" fill="#84bff6" d="M46.806,16.112v10.01h10.008C56.309,20.812,52.115,16.624,46.806,16.112z"/>
						<path class="chart part-2" fill="#f68484" d="M56.814,28.253H46.271l-7.566,7.564c1.926,1.572,4.354,2.555,7.036,2.555C51.553,38.372,56.273,33.924,56.814,28.253z"/>
						<path class="chart part-3" fill="#eff684" d="M44.675,16.112c-5.671,0.544-10.117,5.265-10.117,11.075c0,2.728,1.013,5.193,2.634,7.134l7.483-7.486V16.112z"/>
						<path class="data-container" fill="#fff" d="M85.586,5H31.63c-4.502,0-8.169,3.667-8.169,8.169v37.813c0.031,0,0.059-0.004,0.09-0.004c0.495,0,0.982,0.031,1.466,0.074   c-0.484-0.04-0.971-0.074-1.466-0.074c-9.558,0-17.308,7.748-17.308,17.307c0,9.559,7.75,17.308,17.308,17.308   c0.494,0,0.979-0.033,1.462-0.074c-0.482,0.044-0.968,0.074-1.462,0.074c-0.031,0-0.059-0.004-0.09-0.004v1.242   c0,4.503,3.667,8.169,8.169,8.169h38.339c1.777,0,3.45-0.662,5.275-2.194c1.826-1.533,14.866-14.862,16.198-16.509   c1.961-2.421,2.314-3.841,2.314-6.148V13.169C93.757,8.667,90.093,5,85.586,5z M26.362,51.227   c-0.259-0.043-0.517-0.089-0.779-0.119C25.845,51.14,26.104,51.183,26.362,51.227z M19.95,77.19l-7.446-7.446l4.518-4.518   l3.024,3.024l10.431-9.997l4.424,4.614L19.95,77.19z M25.587,85.463c0.246-0.029,0.488-0.072,0.731-0.111   C26.076,85.392,25.833,85.432,25.587,85.463z M31.63,90.74c-2.155,0-3.909-1.754-3.909-3.909v-1.765   c-0.006,0.001-0.012,0.002-0.017,0.004c7.549-1.863,13.154-8.661,13.154-16.785c0-8.129-5.61-14.929-13.165-16.787   c0.009,0.002,0.019,0.004,0.028,0.006V13.169c0-2.155,1.753-3.909,3.909-3.909h53.956c2.157,0,3.909,1.753,3.909,3.909   l0.018,58.235c-0.097,0.406-0.431,1.016-0.938,1.766h-10.08c-3.333,0-6.04,2.704-6.04,6.038v10.538   c-0.722,0.521-1.312,0.87-1.721,0.994H31.63z"/>
					</g>
				</svg>
			</div>
			<div class="eight columns">
				<div class="block-text">
					<h2><?php _e('Data and analysis', 'infoamazonia'); ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget congue nunc. Donec dapibus erat eu eros vulputate mollis eget sit amet ipsum.</p>
				</div>
			</div>
		</div>
	</div>
	<div id="map_block" class="about-block bigger-block left clearfix">
		<div class="container">
			<div class="five columns">
				<div class="block-text">
					<h2><?php _e('Map design', 'infoamazonia'); ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget congue nunc. Donec dapibus erat eu eros vulputate mollis eget sit amet ipsum.</p>
				</div>
			</div>
			<div class="seven columns">
				<svg id="svg_map_data_design" version="1.1" viewBox="0 0 100 100">
					<g transform="matrix(1.25,0,0,-1.25,0,87)">
						<g transform="matrix(0.01335571,0,0,0.01338163,-0.0072496,-0.09131801)">
							<path class="amazon" fill="#fff" d="m 2244.23,940.469 -85.77,36.941 -40.42,95.92 10.15,48.83 -41.78,147.49 -160.12,-1.18 -44.8,48.09 -91.44,-37.94 -28.63,-43.8 0,-168.16 -111,31.91 -5.13,-53.86 -62.18,-25.24 -42.06,84.13 -112.75,72.33 -136.24,-13.44 -53.86,48.83 -28.62,-32.01 -166.52,72.33 -33.65,94.28 -58.879,18.47 -48.832,169.89 -53.769,13.45 -43.801,151.42 -99.219,38.68 -38.68,82.48 20.122,52.12 75.707,8.42 -1.637,57.24 -72.332,58.89 -65.66,-37.04 -52.121,143.02 -85.77,57.15 -99.301,286.03 8.41,58.88 -105.976,33.65 -21.863,121.16 -50.469,31.92 -3.379,92.53 L 55.5,2891.91 10.0508,2972.74 32,3009.69 l 8.4102,178.4 60.5388,45.35 -20.2107,126.19 62.2737,121.16 -77.3636,42.06 52.1216,95.83 47.089,-13.44 45.45,62.27 -58.887,183.34 52.117,159.84 65.66,-8.41 77.36,171.63 67.3,111.01 75.711,38.68 65.559,72.33 60.633,131.22 85.769,-79 57.239,6.67 198.519,273.04 69.771,-36.02 17.56,-110.74 31.09,-32 121.43,-13.63 229.34,45.54 95.09,-86.32 86.78,-2.01 104.25,-41.15 139.63,28.53 89.15,38.68 77.73,119.7 139.35,-13.63 119.42,102.6 168.26,30.26 53.85,-65.65 58.8,-5.03 35.39,45.45 77.08,6.12 87.97,-31.18 100.49,-169.16 15.82,-76.54 133.69,65.2 99.03,22.58 98.3,-8.78 94.18,40.33 -13.44,48.83 -79.09,-20.21 -73.98,26.89 -6.77,228.78 23.59,89.25 112.66,-6.77 111.1,-75.71 97.57,111.01 73.97,-16.83 117.78,32.01 67.3,60.53 97.57,42.06 20.21,85.77 158.1,20.21 3.38,-95.83 68.95,-8.41 21.94,-60.63 -21.94,-119.42 5.12,-116.04 -26.98,-15.18 -1.64,-144.65 23.5,-87.51 82.48,-25.24 -30.27,-117.78 89.16,-33.65 87.51,72.33 156.45,25.24 40.33,53.86 216.99,-5.03 45.44,42.06 6.77,77.36 79,-20.21 129.58,32.01 168.25,-89.16 97.57,42.06 77.36,0 47.18,-53.85 50.38,-149.69 -35.29,-82.48 102.59,-70.69 102.51,-19.02 197.6,56.15 113.76,-67.39 -18.48,-43.71 68.95,-65.66 37.04,-149.69 -77.36,-85.77 -80.75,-47.18 -111.28,2.38 -105.07,-52.31 -5.85,-116.22 87.6,-208.94 39.96,-9.42 -13.07,-123.54 75.71,-58.89 15.18,-111.01 45.35,-60.53 -68.94,-114.39 -50.48,-35.39 16.83,-111.01 47.09,-87.51 55.5,15.18 20.21,-72.33 47.09,-11.8 -5.03,-90.89 -38.68,-5.03 3.39,-94.18 -99.31,-84.13 3.39,-174.92 -62.27,-42.07 -20.12,-159.84 -137.99,-28.62 21.86,-161.48 119.42,-105.98 -79.01,-166.61 6.68,-84.12 -72.33,-168.16 -131.22,-47.1 -5.03,-64 -107.71,-36.95 -33.66,-43.8 -233.81,0 -25.24,57.24 -70.68,-1.73 13.53,87.51 -190.1,-47.1 -84.13,15.18 -80.74,48.74 -154.81,-1.64 -30.27,-33.65 -206.93,-45.45 -33.65,-168.25 -37.03,-15.09 -38.68,-104.328 -87.51,-55.512 -126.19,-28.621 -28.53,-60.528 82.39,-58.89 15.18,-48.832 100.95,-45.449 -28.62,-31.911 -82.48,13.442 -43.71,-42.063 6.76,-77.359 -82.48,-141.367 -144.66,-40.321 -149.78,-20.211 -38.68,-90.8 -274.23,-175.01984 -89.15,0 -85.77,74.05864 -38.68,158.1092 -90.9,18.473 -16.82,38.769 -99.22,52.121 -97.56,-74.07 -57.24,50.481 -60.54,126.187 6.68,90.891 -100.86,107.629 -112.75,16.82 -72.33,122.812 16.83,50.469 -95.93,99.309 z" style="stroke:#fff;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-opacity:.5;stroke-dasharray:none" />
						</g>
						<g class="data" transform="matrix(0.31048458,0,0,-0.31048458,5.7441379,49.731598)" fill="#fff">
							<g class="data-content">
								<rect width="37.807999" height="3.55" x="44.882" y="47.958" />
								<rect width="37.807999" height="3.5480001" x="44.882" y="54.528999" />
								<rect width="37.807999" height="3.5510001" x="44.882" y="61.805" />
								<rect width="3.546" height="22.013" x="79.144997" y="15.918" />
								<rect width="3.546" height="13.493" x="71.156998" y="24.438" />
								<rect width="3.546" height="5.5050001" x="63.168999" y="32.425999" />
								<path fill="rgba(255,255,255,0.4)" d="m 46.806,16.112 v 10.01 h 10.008 c -0.505,-5.31 -4.699,-9.498 -10.008,-10.01 z" />
								<path fill="rgba(255,255,255,0.8)" d="M 56.814,28.253 H 46.271 l -7.566,7.564 c 1.926,1.572 4.354,2.555 7.036,2.555 5.812,0 10.532,-4.448 11.073,-10.119 z" />
								<path fill="rgba(255,255,255,1)" d="m 44.675,16.112 c -5.671,0.544 -10.117,5.265 -10.117,11.075 0,2.728 1.013,5.193 2.634,7.134 l 7.483,-7.486 V 16.112 z" />
							</g>
						</g>
						<text class="plus" x="39.828812" y="-34.573624" transform="scale(1,-1)" xml:space="preserve" style="font-size:32px;font-style:normal;font-weight:normal;line-height:120.00000477%;letter-spacing:0px;word-spacing:0px;fill:#fff;fill-opacity:1;stroke:none;font-family:Sans">
							<tspan x="39.828812" y="-34.573624" style="font-size:8px;line-height:120.00000477%">+</tspan>
						</text>
						<g class="design" transform="matrix(0.17341649,0.06330445,0.06330445,-0.17341649,49.277209,42.453518)" fill="#fff">
							<g class="design-content">
								<g>
									<path d="m 44.8,70.1 c 0.7,-0.5 1.7,-1.1 2.8,-1.9 l -9.1,-9.1 c -0.8,1.2 -1.4,2.1 -1.9,2.9 1.8,0.7 3.5,1.7 5,3.2 1.5,1.4 2.6,3.1 3.2,4.9 z" />
									<path d="m 50.2,66.1 c 0,0 6.6,-5.2 9.2,-7.8 8.1,-8.1 37.9,-40.8 33.9,-44.8 -4,-4 -36.8,25.9 -44.8,33.9 -2.6,2.6 -7.8,9.2 -7.8,9.2 l 9.5,9.5 z" />
								</g>
								<path fill="#fffbbd" d="m 39.4,67.4 c -3.8,-3.8 -10.7,-3.2 -13.9,0 -2.6,2.6 -2.8,4.6 -2.8,13.3 0,2.6 -3.3,4.6 -3.3,4.6 0,0 10.6,5.4 20,-4 3.8,-3.8 3.8,-10 0,-13.9 z" />
								<path fill="#fffbbd" d="m 14.8,68.6 c 0,0 0,0 0,0 -0.1,-0.2 -0.2,-0.2 -0.2,-0.2 l 0,0 c -0.8,-1.1 -2.2,-1.8 -3.7,-1.8 -2.6,0 -4.6,2.1 -4.6,4.6 0,2.4 1.9,4.4 4.3,4.6 0,0 0.1,0 0.1,0 0.1,0 0.2,0 0.3,0 0,0 0.1,0 0.1,0 0,0 0.1,0 0.1,0 4.6,-0.4 6,2.7 6,2.7 0,-6 -1.8,-9 -2.4,-9.9 z" />
							</g>
						</g>
					</g>
				</svg>
			</div>
		</div>
	</div>
	<div id="network_block" class="about-block right clearfix">
		<div class="container">
			<div class="four columns">
				<svg version="1.1" viewBox="0 0 100 100">
					<g>
						<path id="i0" d="M94.466,0.5H18.958c-2.78,0-5.034,2.254-5.034,5.034v75.508c0,2.78,2.254,5.034,5.034,5.034h75.508    c2.78,0,5.034-2.254,5.034-5.034V5.534C99.5,2.754,97.246,0.5,94.466,0.5z M94.466,81.042H18.958V5.534h75.508V81.042z"/>
						<rect x="23.992" y="10.568" width="25.169" height="25.169"/>
						<rect x="54.195" y="10.568" width="35.237" height="5.034"/>
						<rect x="54.195" y="20.636" width="35.237" height="5.034"/>
						<rect x="54.195" y="30.704" width="35.237" height="5.034"/>
						<rect x="23.992" y="40.771" width="65" height="5.034"/>
						<rect x="23.992" y="50.839" width="65" height="5.034"/>
						<rect x="23.992" y="60.907" width="65" height="5.033"/>
					</g>
				</svg>
			</div>
			<div class="eight columns">
				<div class="block-text">
					<h2><?php _e('Journalists and<br/>citizen network', 'infoamazonia'); ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget congue nunc. Donec dapibus erat eu eros vulputate mollis eget sit amet ipsum.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_template_part('section', 'main-widget'); ?>

<?php get_footer(); ?>