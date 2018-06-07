<?php /* Template Name: Case-Study-Single Template */ get_header(); ?>
<title>Cog1 - Case Study - <?php the_title(); ?></title>
<div class="universe">
	<div class="group m-scene">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php 
			$image = get_field('dark_background_image');
			if( !empty($image) ): ?>
				<div class="single-bg" style="background-image:url('<?php echo $image['url']; ?>');"></div>
		<?php endif; ?>
		
		<section class="case-study-hero">
			<div class="grid group">
				<h1 class="h3 waypoint"><a href="/case-studies" class="hero-link">Case Studies</a><span>&mdash;<?php the_title(); ?></span></h1>
				<?php
					$phrase = get_field('phrase');
					if( $phrase ): ?>
					<h2 class="waypoint h1 delay"><?php echo $phrase; ?></h2>
				<?php endif; ?>
				<div class="grid-6 group waypoint delay2">
					<?php the_content(); ?>
					<?php
						$link = get_field('external_link');
						if( $link ): ?>
						<a class="text-link on-black large no-ajax new-window-icon" target="_blank" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
					<?php endif; ?>
				</div>
				<div class="grid-6 group waypoint delay3">
					<?php if( have_rows('service_list') ): ?>
						<ul>
							<li>Services Provided:</li>
							<?php while( have_rows('service_list') ): the_row(); 
								// vars
								$content = get_sub_field('service_name');
								$link = get_sub_field('service_link');
							?>
							<li>
								<?php if( $link ): ?>
									<a href="<?php echo $link; ?>" class="text-link on-black service-link"><?php echo $content; ?>
								<?php endif; ?>
								<?php if( $link ): ?>
									</a>
								<?php endif; ?>
							</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</section>
		
		<div class="gradient-container">
			<div class="grid group single-hero-image waypoint delay2">
				<?php the_post_thumbnail(); ?>
			</div>
			
			<section class="challenge-solution">
				<div class="grid group standard-padding challenge">
					<div class="grid-6 group waypoint">
						<h2 class="h2 on-black">Challenge:</h2>
					</div>
					<div class="grid-6 group waypoint delay2">
						<?php if( have_rows('challenges') ): $count = 0; ?>
							<ol>
								<?php while( have_rows('challenges') ): the_row(); 
									// vars
									$content = get_sub_field('challenge');
								?>
								<li>
									<?php $count++; echo '<span>0',$count,'.</span>'; ?>
									<?php echo $content ?>
								</li>
								<?php endwhile; ?>
							</ol>
						<?php endif; ?>
					</div>
				</div>
				<div class="hr"></div>
				<div class="grid group standard-padding solution">
					<div class="grid-6 group waypoint">
						<h2 class="h2 on-black">Solution:</h2>
					</div>
					<div class="grid-6 group waypoint delay2">
						<p><?php the_field('solution_overview'); ?></p>
					</div>
				</div>
			</section>
			
			<section class="solutions on-black">
				<div class="grid group">
					<?php if( have_rows('solution') ): $count = 0; ?>
						<?php while( have_rows('solution') ): the_row(); 
							// vars
							$header = get_sub_field('solution_header');
							$paragraph = get_sub_field('solution_paragraph');
							$image = get_sub_field('solution_image');
							$img = $image['url'];
							?>
							<div class="process-container group">
								<div class="grid-6">
									<h6 class="h6 waypoint">0<?php $count++; echo $count;?>.</h6>
									<h3 class="h3 waypoint"><?php echo $header; ?></h3>
									<p class="waypoint"><?php echo $paragraph; ?></p>
								</div>
								<div class="grid-6 waypoint">
									
									<img src="<?php echo $img; ?>"/>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section>
			
			<section class="results group">
				<div class="fifty">
					<div class="panel one waypoint">
						<h2 class="h2">Results:</h2>
						<p><?php the_field('result_overview'); ?></p>
					</div>
					<div class="panel two">
						<?php if( have_rows('result') ): ?>
							<ul class="waypoint delay1 big-list">
								<?php while( have_rows('result') ): the_row(); 
									// vars
									$header = get_sub_field('result_header');
									$paragraph = get_sub_field('result_detail');
								?>
								<li>
									<span><?php echo $header; ?></span><?php echo $paragraph; ?>
								</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</section>
			
			<section class="pdf-download">
				<div class="grid">
					<?php
						$quote = get_field('quote');
						$quoteauthor = get_field('quote_author');
						if( $quote ): ?>
						<h2 class="waypoint h2">&ldquo;<?php echo $quote; ?>&rdquo;</h2>
						<h4 class="h4 waypoint delay1">&mdash;<?php echo $quoteauthor; ?></h4>
					<?php endif; ?>
				</div>
			</section>

			<section class="pagination">
				<div class="fifty">
					<div class="panel one">
						<?php
							$prev_post = get_adjacent_post(false, '', false);
							if(!empty($prev_post)) {
								echo '
									<a class="pagination-link" href="' . get_permalink($prev_post->ID) . '">Prev</a>
									<h3 class="h4 waypoint">Prev</h3>
									<h2 class="h2 waypoint delay1">' . $prev_post->post_title . '</h2>
								'; 
							} else	{
								echo '<h2 class="h2 waypoint delay2"></h2><div class="no-hover"></div>';
							}
						?>
					</div>
					<div class="panel two">
						<?php
							$next_post = get_adjacent_post(false, '', true);
							if(!empty($next_post)) {
								echo '
									<a class="pagination-link" href="' . get_permalink($next_post->ID) . '">Next</a>
									<h3 class="h4 waypoint">Next</h3>
									<h2 class="h2 waypoint delay1">' . $next_post->post_title . '</h2>
								'; 
							} else	{
								echo '<h2 class="h2 waypoint delay1">This is the End, My Friend</h2><div class="no-hover two"></div>';
							}
						?>
					</div>
				</div>
			</section>
			
			<div class="back-to">
				<div class="grid group">
					<div class="back-to-container">
						
						<a href="/case-studies" class="h2 waypoint delay1">View All Case Studies</a>
					</div>
				</div>
			</div>
			
			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>		
	</div>
<?php get_footer(); ?>
