<section id="about">
  <header class="site-main__header section__headline">
    <h2>Sobre nuestras medias</h2>
  </header>
  <div class="container-fluid about__wrapper">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php the_field('img-about') ?>" alt="">
      </div>
      <div class="col-md-6">
        <?php while(have_rows('iconos')): the_row();?>
          <div class="about__wrapper-item">
            <img src="<?php the_sub_field('icono') ?>" alt="">
            <p><?php the_sub_field('texto') ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
