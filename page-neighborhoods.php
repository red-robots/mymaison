<?php 

/**

* Template Name: Neighborhoods

*/

get_header(); 

if ( have_posts() ) : while ( have_posts() ) : the_post();
  $theContent = get_the_content();
endwhile; endif;
?>
<div id="main-wrapper">
<div id="main2">
<div class="page-content">
<div id="page-heading"><h1><?php the_title()?></h1></div>
<div id="page-text"><?php echo $theContent; ?></div>
<!-- -->
<?php 
$args = array(
  'posts_per_page' => -1,
  'post_type' => 'neighborhood'
);
$the_query = new WP_Query( $args ); ?>
<?php if($the_query -> have_posts()) : 

while ($the_query -> have_posts()) : $the_query -> the_post(); 

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
?>
<div class="community-box js-blocks">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<?php


if( !empty($image) ): ?>
<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?>


 <div class="communities-box-title">
      <h3><?php the_title(); ?></h3>
      
       <span class="price-range">
        <?php the_field("price_range"); ?>
       </span>
    </div><!-- community-box title -->

  </div><!-- community-box -->
<?php endwhile;?>
<?php endif;?>
<?php wp_reset_postdata(); ?>
</div><!-- / page content -->

<?php get_footer(); ?>