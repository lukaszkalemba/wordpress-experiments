<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
<h2><?php the_field('podtytul_dodany_wtyczka'); ?></h2>
<p><?php the_field('opis_dodany_wtyczka'); ?></p>
<img src="<?php the_field('zdjecie_dodane_wtyczka'); ?>" alt="">


<?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>

<?php
  endwhile;
  wp_reset_query();
?>

<?php get_footer(); ?>
