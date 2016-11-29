<?php get_header(); ?>

<div id="home-row1">
  <div id="home-slider">

<?php 
remove_all_filters('posts_orderby');
// Query the Post type Slides
$querySlides = array(
  'post_type' => 'neighborhood',
  'posts_per_page' => '-1',
  'orderby'        => 'rand',
  'tax_query' => array(
      array(
        'taxonomy' => 'featured', // your custom taxonomy
        'field' => 'slug',
        'terms' => array( 'featured' ) // the terms (categories) you created
      )
    )
);

// The Query

$the_query = new WP_Query( $querySlides );

// The Loop


 if ( $the_query->have_posts()) : ?>
    <div class="flexslider">
      <ul class="slides">
        <?php while ( $the_query->have_posts() ) : ?>
        <?php $the_query->the_post(); ?>
        <li>
          <?php
        $image = get_field('featured_photo');
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];
        // thumbnail or custom size that will go
        // into the "thumb" variable.
        $size = 'large';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];
          ?>
          <div class="communities-photo">
            <?php
              
             
              if( !empty($image) ): ?>
           <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
            <?php endif; ?>
          </div>
          <div class="communities-short-description-wrapper">
            <div class="communities-short-description-content">
              <div class="communities-short-description">
                <h3>
                  <?php //echo $myTerm; ?>
                  <?php echo 'Featured'; ?>
                </h3>
                <h2><a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                  </a></h2>
                <a href="<?php the_permalink(); ?>">
                <?php the_field("short_description"); ?>
                </a> </div>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
      <!-- slides --> 
      
    </div>
    <!-- .flexslider -->
    <?php endif; // end loop ?>
    <?php wp_reset_postdata(); ?>
    
    


  </div><!-- home slider -->
</div><!-- row 1 -->

<?php get_template_part('inc/quick-search'); ?>




<div id="home-row2">
  <div id="home-row2-row1">
    <div id="home-row2-row1-content">
      <div id="home-row2-row1-content-heading"><a href="<?php bloginfo('url'); ?>/neighborhoods">SHOP BY NEIGHBORHOOD</a></div>
      
      <!-- -->
      
      <div id="home-slider2">
        <?php 
        // Query the Post type Slides
        $querySlides = array(
          'post_type' => 'neighborhood',
          'posts_per_page' => '-1'
        );
        // The Query
        $the_query = new WP_Query( $querySlides );
        // The Loop
       if ( $the_query->have_posts()) : ?>
        <div class="flexslider2 carousel">
          <ul class="slides">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li> 
                <?php
                  if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    <div class="communities-slide-box">
                      <div class="communities-photo2">
                      <?php 
                    

                          $image = get_field('featured_photo');
                          $url = $image['url'];
                          $title = $image['title'];
                          $alt = $image['alt'];
                          $caption = $image['caption'];
                          // thumbnail or custom size that will go
                          // into the "thumb" variable.
                          $size = 'communities-gallery';
                          $thumb = $image['sizes'][ $size ];
                          $width = $image['sizes'][ $size . '-width' ];
                          $height = $image['sizes'][ $size . '-height' ];
                          if( !empty($image) ): ?>
                             <a href="<?php the_permalink(); ?>">
                             <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                             </a>
                          <?php endif; ?>
                      </div><!-- communities-photo2 -->
                      <div class="communities-slide-title">
                        <h2>
                          <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?><span class="price-range"><?php the_field("price_range"); ?></span>
                          </a>
                        </h2>
                      </div><!-- communities-slide-title -->
                    </div><!-- communities-slide-box -->
              </li>
            <?php endwhile; ?>
          </ul><!-- slides -->
        </div><!-- .flexslider -->
      <?php endif; // end loop ?>
      <?php wp_reset_postdata(); ?>
      </div><!-- home-slider2 -->


      </div><!-- home-row2-row1-content -->
    </div><!-- home-row2-row1 -->

    <div id="home-row2-row2">
      <div id="home-row2-row2-box1">
        <?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>
          <?php the_content(); ?>
        <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
      </div><!-- home-row2-row2-box1 -->
      <div id="home-row2-row2-box2">
        <div id="home-row2-row2-box2-text1">
          We’d like to be your realtor for this home and the next. 
        </div><!-- home-row2-row2-box2-text1 -->
        <div id="home-row2-row2-box2-text2">(And the one after that.)</div><!-- home-row2-row2-box2-text2 -->
        <div id="home-row2-row2-box2-text3">Whether searching for a townhome, single family home or home to lease, our priority is earning your trust and delivering value.</div><!-- home-row2-row2-box2-text3 -->
        <div id="home-row2-row2-box2-logos">
          <a href="http://www.mytownhome.com/" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/maison-properties-logo.png" alt="" border="0">
          </a>
          <br>
          <a href="http://myhomeleasing.com/" target="_blank">
            <img src="<?php bloginfo('template_url'); ?>/images/my-home-leasing-logo.png" alt="" border="0">
          </a>
        </div><!-- home-row2-row2-box2-logos -->
      </div><!-- home-row2-row2-box2 -->
    </div><!-- home-row2-row2 -->
  </div><!-- home-row2 -->


<div id="home-row3">
  <div id="home-row3-content">
    <div id="home-row3-content-heading">SELLING?  KNOWLEDGE IS EVERYTHING.</div><!-- home-row3-content-heading -->
      <?php $recent = new WP_Query("page_id=22"); while($recent->have_posts()) : $recent->the_post();?>
        
        <div id="home-row3-content-box1" class="home-row3-content-box">
          <a href="<?php the_field("link_one"); ?>">
            <div class="home-icon">
              <img src="<?php bloginfo('template_url'); ?>/images/box1image.png" alt="" border="0">
            </div><!-- home icon -->
            <div class="home-row3-content-link">
              <?php the_field("link_one_text"); ?>
            </div><!-- home-row3-content-link -->
           </a>
        </div><!-- home-row3-content-box1 -->

        <div id="home-row3-content-box2" class="home-row3-content-box">
          <a href="<?php the_field("link_two"); ?>">
            <div class="home-icon">
              <img src="<?php bloginfo('template_url'); ?>/images/box2image.png" alt="" border="0">
            </div><!-- home icon -->
            <div class="home-row3-content-link">
                <?php the_field("link_two_text"); ?>
            </div><!-- home-row3-content-link -->
          </a>
        </div><!-- home-row3-content-box2 -->

        <div id="home-row3-content-box3" class="home-row3-content-box">
          <a href="<?php the_field("link_three"); ?>">
            <div class="home-icon">
              <img src="<?php bloginfo('template_url'); ?>/images/box3image.png" alt="" border="0">
            </div><!-- home icon -->
            <div class="home-row3-content-link">
                <?php the_field("link_three_text"); ?>
            </div><!-- home-row3-content-link -->
          </a>
        </div><!-- home-row3-content-box3 -->

      <?php endwhile; wp_reset_postdata(); // end of the loop. ?>
  </div><!-- home-row3-content -->
</div><!-- home-row3 -->



<div id="home-row4">
  <div id="home-row4-content">
    <h2>OUR AGENTS</h2>
    
    <!-- -->
    
    <div id="home-agents">
      <?php
// WP_User_Query arguments
$args = array (
  'role' => 'Agent',
  'number' => 4,
  'orderby' => 'rand',
);
// Create the WP_User_Query object
$wp_user_query = new WP_User_Query($args);
// Get the results
$authors = $wp_user_query->get_results();
// Check for results
if (!empty($authors)) {
    // loop trough each author
    foreach ($authors as $author)
    {
        // get all the user's data
        $author_info = get_userdata($author->ID);
		$author_id = $author_info->ID;
$link = get_author_posts_url($author_id);
$agentName = get_field( 'first_name', 'user_'.$author_id );
$agentName2 = get_field( 'last_name', 'user_'.$author_id );
$image = get_field( 'photo', 'user_'.$author_id );
$size = 'agent_feed';
$thumb = $image['sizes'][ $size ];
?>
      <div class="agent-profile-box">
        <div class="agent-photo"><a href="<?php echo $link; ?>"><img src="<?php echo $thumb; ?>" /></a></div>
        <div class="agent-profile-box-content">
          <h2><a href="<?php echo $link; ?>"><?php echo $agentName; ?> <?php echo $agentName2; ?></a></h2>
        </div>
      </div>
      <?php 
}
} 
?>
    </div>
    
    <!-- -->
    
    

    <div class="mobile-agent">

      <div id="view-all-agents">
        <div id="view-all-agents-box">
          <a href="<?php bloginfo('url'); ?>/our-agents">VIEW ALL AGENTS</a>
        </div><!-- view-all-agents-box -->
      </div><!-- view-all-agents -->
      
      <div id="agents-box">
        <div id="agents-box-padding">
          <h2>Need help selecting an agent?</h2>
          Fill out a simple form to get matched with an agent that meet your needs.
          <a href="<?php bloginfo('url'); ?>/need-help-selecting-an-agent">
            <img src="<?php bloginfo('template_url'); ?>/images/agents-go-arrow.png" alt="" border="0">
          </a>
        </div><!-- agents-box-padding -->
      </div><!-- agents-box -->

    </div><!-- mobile agent -->

     <div class="desktop-agent">

      <div id="agents-box">
        <div id="agents-box-padding">
          <h2>Need help selecting an agent?</h2>
          Fill out a simple form to get matched with an agent that meet your needs.
          <a href="<?php bloginfo('url'); ?>/need-help-selecting-an-agent">
            <img src="<?php bloginfo('template_url'); ?>/images/agents-go-arrow.png" alt="" border="0">
          </a>
        </div><!-- agents-box-padding -->
      </div><!-- agents-box -->

      <div id="view-all-agents">
        <div id="view-all-agents-box">
          <a href="<?php bloginfo('url'); ?>/our-agents">VIEW ALL AGENTS</a>
        </div><!-- view-all-agents-box -->
      </div><!-- view-all-agents -->

    </div><!-- desk agent -->



  </div>
</div>
<div id="home-wrapper"> 
  
  <!-- home row1 --> 
  
  <!-- home row2 --> 
  
</div>
<?php get_footer(); ?>
