<?php /* Template Name: web-design Template */ get_header(); ?>
<title>Cog1 - Services - Web Design &amp; Development</title>
<div class="universe">
	<div class="group m-scene">
		<section class="main-hero">
			<h1 class="eyebrow waypoint">Services</h1>
			<h2 class="h1 waypoint delay2">Web Design &amp; Development</h2>
		</section>
		
		<section class="services-hub-list">
			<div class="grid group">
				
				<div class="service-container group">
					<div class="grid-4">
						<h2 class="h3 waypoint single">Services</h2>
					</div>
					<div class="grid-8 services-list waypoint delay2">
						<ul>
							<li>Content Strategy</li>
							<li>Prototyping</li>
							<li>UX / UI Design</li>
							<li>Visual Design</li>
							<li>Copywriting</li>
							<li>CMS</li>
							<li>Quality Assurance</li>
							<li>Deployment</li>
							<li>Regression</li>
							<li>Hosting</li>
							<li>Support</li>
							<li>Website Training</li>			
						</ul>
					</div>
				</div>
								
									
			</div>
		</section>
		
		<section class="infographic">
			<div class="grid group">
				<div class="infographic-holder group">
					<div class="grid-6">
						<h3 class="h3 waypoint">An effective website is the hub of your digital marketing ecosystem.</h3>
						<p class="waypoint">Modern businesses need an integrated experience to cross-promote content from all digital channels (Facebook, Instagram, Adwords, LinkedIn, etc..) in order to maximize brand reach and influence. An integrated web experience leverages marketing tools, content, and analytics to provide targeted information that inspires visitors to take action and become customers.
</p>
					</div>
					<div class="grid-6 waypoint">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/cog1-2018-services-web-design-dev-infographic-1440px.png"/>
					</div>
				</div>
			</div>
		</section>
		
		<section class="how-we-do-it">
			<div class="grid group">
				<h2 class="h1 waypoint">How We Do It</h2>
				<div class="grid-20 waypoint">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-strategy.svg"/>
					<h3 class="h3"><span>01.</span><br/>Plan</h3>
					<p>Create a strategy around business goals and digital standards</p>
				</div>
				<div class="grid-20 waypoint">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-design.svg"/>
					<h3 class="h3"><span>02.</span><br/>Design</h3>
					<p>Create the digital design system and user experience</p>
				</div>
				<div class="grid-20 waypoint">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-development.svg"/>
					<h3 class="h3"><span>03.</span><br/>Development</h3>
					<p>Coding functional product based on design specifications</p>
				</div>
				<div class="grid-20 waypoint">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-qa.svg"/>
					<h3 class="h3"><span>04.</span><br/>QA</h3>
					<p>Test against acceptance criteria to assure quality across product</p>
				</div>
				<div class="grid-20 waypoint">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-deployment.svg"/>
					<h3 class="h3"><span>04.</span><br/>Deployment</h3>
					<p>Rollout planning to Go Live and ongoing monitoring and support</p>
				</div>
			</div>
		</section>
		
		<section class="home-case-studies">
			<h2 class="h1 waypoint">Web Design &amp; Development Case Studies</h2>
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
						<div class="case-study-grid-medium bogle image waypoint">
							<a href="/case-study/bogle">View Project</a>
							<div class="project-info">
								<h3 class="h4">Bogle</h3>
								<h4 class="h2">Artisan Wine For Any Occasion</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="button on-black waypoint"><a href="/case-studies">View All Case Studies</a></div>
		</section>
			
		<section class="pdf-download form-top gated">
			<div class="grid">
				<div class="grid-6">
					<h2 class="waypoint h2">Download the PDF version of our web design &amp; development services to share with your team.</h2>
				</div>
				<div class="grid-6">
					<?php gravity_form( 5, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = true, $tabindex, $echo = true ); ?>
				</div>
			</div>
		</section>
			
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
