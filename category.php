<?php

/**

* A Simple Category Template

*/



get_header(); ?> 



	<div id="main2">



<div class="page-content">





<!-- -->

<!-- h1 will print the Category's name you're searching -->			

<div id="page-heading"><h1><?php printf( __( '%s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1></div>



<div id="page-text"><?php $recent = new WP_Query("page_id=10"); while($recent->have_posts()) : $recent->the_post();?>

 <?php the_content(); ?>

<?php endwhile; wp_reset_postdata(); // end of the loop. ?>	

</div>



<!--  -->

<div id="filter-by"><h2>Filter by Neighborhood</h2></div>

<div id="filter-by-categories"><ul><li><a href="<?php bloginfo('url'); ?>/townhome-communities">ALL</a></li><?php wp_list_cats('sort_column=name') ?></ul></div>

<!-- /  -->



<?php

	/* Start the Loop 

	

		Number of posts on a category page, 

		before it paginates, will be determined 

		by the WordPress Admin in Settings > Reading

	

	*/

	

	while ( have_posts() ) : the_post(); ?>

    

   <div class="community-box">

 <div class="communities-box-photo">

<?php

$image = get_field('featured_photo');

  $image = get_field('featured_photo');

  $url = $image['url'];

  $title = $image['title'];

  $alt = $image['alt'];

  $caption = $image['caption'];

 

  // thumbnail or custom size that will go

  // into the "thumb" variable.

  $size = 'communities-main';

  $thumb = $image['sizes'][ $size ];

  $width = $image['sizes'][ $size . '-width' ];

  $height = $image['sizes'][ $size . '-height' ];

if( !empty($image) ): ?>

	<a href="<?php the_permalink() ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /></a>

<?php endif; ?>

</div>

 <div class="communities-box-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?><span class="price-range"><?php the_field("price_range"); ?></span></a>

 </div></div>

    



<?php endwhile;?>



    <div class="clear"></div>

    <?php pagi_posts_nav(); ?>

    









<!-- 



<h2>Monthly Archives</h2>

<ul class="archives"><?php wp_get_archives('type=monthly&show_post_count=1') ?></ul>

-->









	</div><!-- #content -->

</div><!-- #container -->



<?php get_footer(); ?>