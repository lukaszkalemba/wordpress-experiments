<?php

/*
  Template Name: Blog
*/

get_header(); ?>

<div class="container-fluid px-5 my-5">

  <h1><?php the_title(); ?></h1>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>

  <?php
    endwhile;
    wp_reset_query();
  ?>

</div>

<div class="container-fluid px-5 my-5">
  <ul>
  <?php

  global $post;
  $args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );

  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
  	<li>
  		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  	</li>
  <?php endforeach;
  wp_reset_postdata();?>

  </ul>
</div>

<div class="container-fluid px-5 my-5">
<?php

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
  );

  $blogposts = new WP_Query($args);

  while($blogposts->have_posts()) {
    $blogposts->the_post();
?>

    <a href="<?php the_permalink(); ?>">
      <h3><?php the_title(); ?></h3>
    </a>
    <hr>
    <?php the_excerpt(); ?>

<?php
  }

?>
</div>


<?php get_footer(); ?>