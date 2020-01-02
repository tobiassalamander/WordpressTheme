<?php get_header(); ?>



<h1><?php the_title(); ?></h1>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
<p><?php the_content(); ?></p>



<?php get_footer(); ?>
