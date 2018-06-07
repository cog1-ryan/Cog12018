<?php /* Template Name: marketing-audit Template */ get_header(); ?>
<title>Cog1 - Free Digital Marketing Audit</title>
<div class="universe">
	<div class="group m-scene">
		<section class="main-hero">
			<h1 class="eyebrow waypoint">Free Digital Marketing Audit</h1>
			<h2 class="h1 waypoint delay2">Let Us Know About Your Business</h2>
			<p class="h3 waypoint delay3">We’ll take a snapshot of your current digital brand and provide data on social media, website statistics, search analytics, and inbound marketing. Then we can set up a time to discuss your goals and how we can get there together.</p>
		</section>
		
		<section class="contact-form audit form-top on-black">
			<div class="grid group waypoint">
				<h2 class="h2">Submit this form and we'll get started on your audit.</h2>
				<?php gravity_form( 7, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = true, $tabindex, $echo = true ); ?>
			</div>
		</section>
		
		<section class="pdf-download red-bg">
			<div class="grid">
				<h2 class="h2 waypoint">Ready to get your project started?</h2>
				<h3 class="h3 waypoint delay1">We’d love to hear from you.</h2>
				<div class="button waypoint on-black delay2"><a href="/contact">Get Started</a></div>
			</div>
		</section>				
	</div>
	<?php get_footer(); ?>
