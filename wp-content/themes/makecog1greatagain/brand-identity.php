<?php /* Template Name: Brand Identity Template */ get_header(); ?>
<title>Cog1 - Services - Brand Identity</title>
<div class="universe">
	<div class="group m-scene">
		<section class="main-hero">
			<h1 class="eyebrow waypoint">Services</h1>
			<h2 class="h1 waypoint delay2">Brand Identity</h2>
		</section>
		
		<section class="services-hub-list">
			<div class="grid group">
				
				<div class="service-container group">
					<div class="grid-4">
						<h2 class="h3 waypoint single">Services</h2>
					</div>
					<div class="grid-8 services-list waypoint delay2">
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
		
		<section class="infographic">
			<div class="grid group">
				<div class="infographic-holder group">
					<div class="grid-6">
						<h3 class="h3 waypoint">An effective brand strategy and identity builds trust and credibility in the marketplace.</h3>
						<p class="waypoint">It’s essential to differentiate yourself from your competition. A brand identity influences your customers’ experiences at every touchpoint. Your brand identity needs a solid foundation to build on and flexibility to meet the needs of future business goals.<br/><br/>Cog1 offers a full range of brand strategy and identity services for businesses of any level. We work with your team to produce desired outcomes that set your brand up for success in the marketplace.
</p>
					</div>
					<div class="grid-6 waypoint delay1">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/cog1-2018-services-brand-identity-infographic-1440px.png"/>
					</div>
				</div>
			</div>
		</section>
		
		<section class="how-we-do-it branding">
			<div class="grid group">
				<h2 class="h1 waypoint">How We Do It</h2>
				<div class="grid-20 waypoint">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-discovery.svg"/>
					<h3 class="h3"><span>01.</span><br/>Discovery</h3>
					<p>Business goals, audience, competition, and inspiration</p>
				</div>
				<div class="grid-20 waypoint">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-ideation.svg"/>
					<h3 class="h3"><span>02.</span><br/>Ideation</h3>
					<p>Brainstorming exercises for names, story, and visual identity of the brand </p>
				</div>
				<div class="grid-20 waypoint">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-design.svg"/>
					<h3 class="h3"><span>03.</span><br/>Design</h3>
					<p>Logo design, color palette, typography, iconography, and design system</p>
				</div>
				<div class="grid-20 waypoint">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/icon-guidelines.svg"/>
					<h3 class="h3"><span>04.</span><br/>Guidelines</h3>
					<p>Clear guidelines for your brand identity and rules to promote uniformity through many applications</p>
				</div>
			</div>
		</section>
		
		<section class="home-case-studies">
			<h2 class="h1 waypoint">Brand Identity Case Studies</h2>
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
		
		<section class="pdf-download gated">
			<div class="grid">
				<div class="grid-6">
					<h2 class="waypoint h2">Download the PDF version of our brand identity services to share with your team.</h2>
				</div>
				<div class="grid-6">
					<?php gravity_form( 8, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = true, $tabindex, $echo = true ); ?>
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
