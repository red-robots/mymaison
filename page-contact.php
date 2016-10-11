<?php 

/**

* Template Name: Contact

*/

 get_header(); ?>







<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>





<div id="main-wrapper">

<div id="main2">







<div class="page-content">



     <div id="page-heading"><h1><?php the_title()?></h1></div>



 <div id="page-text-left" class="contact"><?php the_content(); ?></div>

     





<div id="page-right-column">
  <?php get_template_part('inc/offices'); ?>
</div><!-- page-right-column -->











 </div><!-- / page content -->











<?php endwhile; endif; ?>







<?php //get_sidebar(); ?>



<?php get_footer(); ?>