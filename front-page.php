<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<h2><?php the_field('podtytul_dodany_wtyczka'); ?></h2>
<p><?php the_field('opis_dodany_wtyczka'); ?></p>
<img src="<?php the_field('zdjecie_dodane_wtyczka'); ?>" alt="">


<!-- repeater -->
<div class="links">
  <?php

  if( have_rows('linki_na_stronie_glownej') ):
      while ( have_rows('linki_na_stronie_glownej') ) : the_row(); ?>
        <a targer="_blank" href="<?php the_sub_field('button_url'); ?>"><button type="button" name="button"><?php the_sub_field('button_text'); ?></button></a>

  <?php
    endwhile;
  else :
  endif;

  ?>
</div>

<?php
  $images = get_field('galeria_strony_glownej');
?>

<div class="container-fluid">
  <div class="row">
      <?php
        if( $images ): ?>
            <?php foreach( $images as $image ): ?>
            <div class="col-3">
                <li>
                  <a href="<?php echo $image['url']; ?>">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="500"/>
                  </a>
                  <p><?php echo $image['caption']; ?></p>
                </li>
              </div>
              <?php endforeach; ?>
      <?php endif; ?>
  </div>
</div>

<?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>

<?php
  endwhile;
  wp_reset_query();
?>

<?php get_footer(); ?>
