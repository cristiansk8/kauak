<section class="hacemos">
  <div class="banner-hacemos">
    <img src="<?php the_field('banner_hacemos') ?>" alt="">
  </div>
  <div class="container">
    <div class="row descripcion">
      <?php the_field('descripcion') ?>
    </div>
    <?php
    $category= the_field('categoria');
    echo do_shortcode( '[recent_products per_page="6" columns="3" category="'.$category.'"]' );
     ?>
  </div>
</section>
