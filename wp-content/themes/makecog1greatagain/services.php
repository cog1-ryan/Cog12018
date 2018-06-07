<?php /* Template Name: Services Template */ get_header(); ?>
<title>Cog1 - Services Overview</title>
<div class="universe">
	<div class="group m-scene">
		<section class="main-hero">
			<h1 class="eyebrow waypoint">Digital Marketing Services</h1>
			<h2 class="h1 waypoint delay2">Solutions For Your Business</h2>
			<p class="h3 waypoint delay3">We work with your team to identify opportunities that unlock the potential of your brand. Our digital marketing services are structured to provide your business with the most current and innovative solutions to your digital challenges.</p>
		</section>
		
		<section class="services-hub-list">
			<div class="grid group">
				<div class="service-container group">
					<div class="grid-3">
						<div class="line"></div>
						<h2 class="h3 waypoint">Digital Marketing &amp; Content</h2>
						<a href="/digital-marketing-content" class="text-link on-black waypoint delay1">Read More</a>
					</div>
					<div class="grid-9 services-list waypoint delay2">
						<ul>
							<li>Digital Marketing Strategy</li>
							<li>Campaigns</li>
							<li>Content Development</li>
							<li>Social Media</li>
							<li>Email Marketing</li>
							<li>PPC</li>
							<li>Reporting</li>
							<li>Analytics</li>
							<li>SEO</li>
							<li>SEM</li>
							<li>CRM</li>
							<li>Print</li>				
						</ul>
					</div>
				</div>
				<div class="service-container group">
					<div class="grid-3">
						<div class="line"></div>
						<h2 class="h3 waypoint">Web Design &amp; Development</h2>
						<a href="/web-design-development" class="text-link on-black waypoint delay1">Read More</a>
					</div>
					<div class="grid-9 services-list waypoint delay2">
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
				<div class="service-container group">
					<div class="grid-3">
						<div class="line"></div>
						<h2 class="h3 waypoint">Brand Identity</h2>
						<a href="/brand-identity" class="text-link on-black waypoint delay1">Read More</a>
					</div>
					<div class="grid-9 services-list waypoint delay2">
						<ul>
							<li>Strategy</li>
							<li>Positioning</li>
							<li>Naming</li>
							<li>Identity</li>
							<li>Design</li>
							<li>Messaging</li>
							<li>Tagline</li>
							<li>Collateral</li>
							<li>Guidelines</li>
						</ul>
					</div>
				</div>										
			</div>
		</section>
		
		<section class="our-process"> 
			<h4 class="eyebrow waypoint">Our Process</h4>
			<h2 class="h1 waypoint delay2">The Steps to Success</h2>
			<div class="grid group">
				<div class="process-container group">
					<div class="grid-6">
						<h6 class="h6 waypoint">01.</h6>
						<h3 class="h3 waypoint">Discovery <span>&amp;</span> Strategy</h3>
						<p class="waypoint">The first step of all projects at Cog1 is to learn everything we can about your brand, industry, audience, competitors, the state of your current system, and project goals. This information is necessary for creating a clearly defined strategy that includes trackable goals and milestones for your project.</p>
					</div>
					<div class="grid-6 waypoint">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/process-01.jpg"/>
					</div>
				</div>
				<div class="process-container group">
					<div class="grid-6">
						<h6 class="h6 waypoint">02.</h6>
						<h3 class="h3 waypoint">Design <span>&amp;</span> Messaging</h3>
						<p class="waypoint">We utilize the strategy documentation to craft a consistent look, feel, message, and tone of voice to communicate to your audience and set your business apart in the market. We create the core user experience and visual interactions to define nuances in function and inform upcoming visual design and engineering efforts.</p>
					</div>
					<div class="grid-6 waypoint">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/process-02.jpg"/>
					</div>
				</div>
				<div class="process-container group">
					<div class="grid-6">
						<h6 class="h6 waypoint">03.</h6>
						<h3 class="h3 waypoint">Implementation <span>&amp;</span> Content</h3>
						<p class="waypoint">Applied to the right channels, a focused strategy, compelling content, and eye catching visuals will attract the attention and provide value to your audience. Throughout the digital ecosystem, we implement content and messaging into web content, social media campaigns, and digital ad campaigns.</p>
					</div>
					<div class="grid-6 waypoint">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/process-03.jpg"/>
					</div>
				</div>
				<div class="process-container group">
					<div class="grid-6">
						<h6 class="h6 waypoint">04.</h6>
						<h3 class="h3 waypoint">Analytics <span>&amp;</span> Optimization</h3>
						<p class="waypoint">After the launch of your project, we begin to monitor and review your digital marketing system and campaign goals. Data analysis and reporting allows us to make informed decisions and optimize as the market evolves. We utilize these metrics to adapt and make clear and measurable growth.</p>
					</div>
					<div class="grid-6 waypoint">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/process-04.jpg"/>
					</div>
				</div>
			</div>
		</section>
		
		<section class="pdf-download">
			<div class="grid">
				<h2 class="waypoint h2">Download the PDF version of our services overview to share with your team.</h2>
				<div class="button download waypoint on-pink icon no-ajax">
					<?php 
						$file = get_field('service_deck_pdf');
						if( $file ) {
							$url = wp_get_attachment_url( $file );
							?><a target="_blank" download class="no-ajax" href="<?php echo $url; ?>" >Download</a><?php
						}
					?>
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
