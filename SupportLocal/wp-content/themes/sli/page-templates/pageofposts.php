<?php
/*
Template Name: Page Of Posts
*/

/* if you are not using this in a child of Twenty Eleven, 
*  you need to replicate the html structure of your own theme.
*/

get_header(); 
?>

<section id="primary" class = "site-content">
  <div id="content" role="main">

 <?php $loop = new WP_Query( array( 'post_type' => 'business', 'posts_per_page' => 50 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

 
<?php endwhile;  ?>

  </div><!-- /#content -->
</section><!-- /#primary -->
<?php get_sidebar();
get_footer();
?>