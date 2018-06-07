<?php /* Template Name: Front Template */ get_header(); ?>
<title>Cog1 - Digital Marketing Agency</title>
<div class="universe">
	<section class="main-hero">
		<h1 class="eyebrow waypoint">A San Francisco Digital Marketing Agency</h1>
		<h2 class="h1 waypoint delay2">Creating Digital Experiences that <span>Engage</span> & <span>Convert</span></h2>
	</section>
	
	<section class="home-our-mission">
		<div class="fifty">
			<div class="panel one waypoint delay4">
				<div class="line"></div>
				<h2 class="h3 waypoint">Cog1 is a digital marketing agency focused on creating experiences and products that elevate brands.<br/><br/>Located in the heart of San Francisco, we constantly innovate, learn, and evolve to provide cutting-edge digital solutions for businesses.</h2>
			</div>
			<div class="panel two waypoint delay6">
				<?php
					$announce = get_field('announcement');
					if( $announce ): ?>
					<div class="announcement">
						<a href="<?php echo $announce['url']; ?>">
							<div class="decagon">
								<div class="rct"></div>
								<div class="rct"></div>
								<div class="rct"></div>
								<div class="rct"></div>
								<div class="rct"></div>
								<div class="rct"></div>
								<div class="announcement-holder">
									<div class="table">
										<h6 class="h6"><?php echo $announce['title']; ?></h6>
										<p>Read More</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	
	<section class="home-solutions">
		<h4 class="eyebrow waypoint">Digital Marketing</h4>
		<h2 class="h1 waypoint delay2">Solutions For Your Business</h2>
		<div class="grid group">
			<div class="grid-3 waypoint">
				<div class="solutions-icon">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/reach.png"/>
				</div>
				<h3 class="h3">Reach</h3>
				<p>Utilize social, PPC, SEO and analytics to reach your audience, increase action, and build brand advocates.</p>
			</div>
			<div class="grid-3 waypoint delay2">
				<div class="solutions-icon">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/convert.png"/>
				</div>
				<h3 class="h3">Convert</h3>
				<p>Tailored solutions for E-commerce, publications, and businesses to generate leads and drive conversions.</p>
			</div>
			<div class="grid-3 waypoint delay4">
				<div class="solutions-icon">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/engage.png"/>
				</div>
				<h3 class="h3">Engage</h3>
				<p>Build customer loyalty and repeat purchases through your site, social, email, and direct interaction.</p>
			</div>
			
		</div>
		<div class="button waypoint"><a href="/services">View Service List</a></div>
	</section>
	
	<section class="home-case-studies">
		<h4 class="eyebrow waypoint">Case Studies</h4>
		<h2 class="h1 waypoint delay2">Producing Results For Our Clients</h2>
		<div class="grid group">
			<div class="row">
				<div class="case-study-grid-big phantom image waypoint">
					<a href="/case-study/phantom-by-bogle">View Project</a>
					<div class="project-info">
						<h3 class="h4">Phantom by Bogle</h3>
						<h4 class="h2">Bringing Home the Legend of the Phantom</h4>
					</div>
				</div>
				<div class="case-study-grid-big two">
					<div class="case-study-grid-medium corrus image one waypoint">
						<a href="/case-study/corrus">View Project</a>
						<div class="project-info">
							<h3 class="h4">Corrus</h3>
							<h4 class="h2">Harmonious Brand Identity</h4>
						</div>
					</div>
					<div class="case-study-grid-medium robson image waypoint">
						<a href="/case-study/robson-homes">View Project</a>
						<div class="project-info">
							<h3 class="h4">Robson Homes</h3>
							<h4 class="h2">Lorem Ipsum Dolor Sit Amet</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="case-study-grid-big small">
					<div class="case-study-grid-medium usmc image one waypoint">
						<a href="/case-study/united-states-marine-corps-mlv-for-launch-forth">View Project</a>
						<div class="project-info">
							<h3 class="h4">United States Marine Corps MLV For Launch Forth</h3>
							<h4 class="h2">Powering Up with the United States Marine Corps</h4>
						</div>
					</div>
					<div class="case-study-grid-medium">
						<div class="case-study-grid-small workday image waypoint">
							<a href="/case-study/workday">View Project</a>
							<div class="project-info">
								<h3 class="h4">Workday</h3>
								<h4 class="h2">Designing a Compelling Product Story for a Disruptor</h4>
							</div>
						</div>
						<div class="case-study-grid-small blue-bear image two waypoint delay1">
							<a href="/case-study/blue-bear">View Project</a>
							<div class="project-info">
								<h3 class="h4">Blue Bear</h3>
								<h4 class="h2">Extending the Reach of a Local Music School</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="case-study-grid-big irei image two last waypoint">
					<a href="/case-study/irei">View Project</a>
					<div class="project-info">
						<h3 class="h4">IREI</h3>
						<h4 class="h2">Publication, Communication &amp; E-commerce</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="button on-black waypoint"><a href="/case-studies">View All Case Studies</a></div>
	</section>
	
<!--
	<section class="home-journal">
		<h4 class="eyebrow waypoint">Journal</h4>
		<div class="grid group">
			<ul>
				<li class="waypoint"><a class="h2" href="#">Brands That Do: Building Behavior Brands</a></li>
				<li class="waypoint"><a class="h2" href="#">Surviving Disruption as a Non-Disruptor Brand</a></li>
				<li class="waypoint"><a class="h2" href="#">Why a Solid Content Strategy Needs to be Part of Your Customer-Experience Strategy</a></li>
			</ul>
		</div>
		<div class="button waypoint"><a href="#">Read More</a></div>
	</section>
-->
	
	<section class="home-contact">
		<div class="fifty">
			<div class="panel one">
				<h2 class="h2 waypoint">Ready to get your project started?</h2>
				<h3 class="h3 waypoint delay1">We’d love to hear from you.</h2>
					<div class="button waypoint on-black delay2"><a href="/contact">Get Started</a></div>
			</div>
			<div class="panel two">
				<div class="line"></div>
				<h3 class="h3 waypoint delay1">Or start with a free digital marketing audit.</h3>
				<div class="button waypoint delay2"><a href="/free-digital-marketing-audit">Learn More</a></div>
			</div>
		</div>
	</section>
	
	
</div>

<?php get_footer(); ?>
