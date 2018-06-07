<?php
/* Template Name: Homepage Template */

get_header();
?>

<div id="page">
<h1><?php the_title(); ?></h1>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; endif;?>
</div>

<?php get_footer(); ?>
