<?php

/**
 * Related News
 */

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="news news--related">
  <header class="section__headline">
    <h2 class="subtitle subtitle--1">
      Depurando
    </h2>
  </header>
  <div class="container">
    <div class="row">
    <?php
    while($query->have_posts()):$query->the_post();
        ?>
      <div class="news__item col-md-4">
        <figure class="news__image image-ar image-ar--32">
          <a href="<?php the_permalink(); ?>" class="d-block">
            <?php the_post_thumbnail('large')?>
          </a>
        </figure>
        <div class="news__caption">
          <h3 class="headline headline--4">
            <?php the_title(); ?>
          </h3>
          <h4>
            <?php the_time('F j, Y'); ?>
          </h4>
          <a href="<?php the_permalink(); ?>" class="body body--bd">Leélo aquí></a>
        </div>
      </div>
        <?php
    endwhile;
    ?>
    </div>
  </div>
</section>
    <?php
endif;
