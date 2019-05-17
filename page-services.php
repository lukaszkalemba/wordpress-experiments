<?php

/*
  Template Name: Usługi
*/

get_header(); ?>


<div class="container-fluid px-5 my-5">

  <h1><?php the_title(); ?></h1>

  <?php

function object_to_array($obj) {
  if(is_object($obj)) $obj = (array) $obj;
      if(is_array($obj)) {
          $new = array();
          foreach($obj as $key => $val) {
              $new[$key] = object_to_array($val);
          }
      }
      else $new = $obj;
      return $new;
  }

    $args = array(
    	'post_parent' => 197,
    	'post_type'   => 'page',
    	'numberposts' => -1,
    	'post_status' => 'any'
    );
    $pages = get_children( $args );

?>


<div class="services-container">

  <?php
  if ( $pages ) {
  		foreach ( $pages as $page ) {
  ?>

    <div class="container-fluid px-2 my-5">

      <div class="col">
        <div class="services-image-container">
          <?php echo get_the_post_thumbnail($page->ID, "post-thumbnail-size"); ?>
        </div>

        <p class="services__desc"><?php echo(object_to_array($page)["post_title"]); ?></p>

        <a class="service__link" href="<?php the_permalink($page->ID); ?>"><button class="service__button">Przejdź do podstrony <?php echo strtolower((object_to_array($page)["post_title"])); ?></button></a>
      </div>
    </div>

    <?php
      }
  	}
  ?>
</div>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

  <?php
    endwhile;
    wp_reset_query();
  ?>

</div>


<?php get_footer(); ?>
