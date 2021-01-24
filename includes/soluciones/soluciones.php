<section id="soluciones">
  <div class="container-fluid">
    <header class="site-main__header">
      <h2>Nuestras soluciones</h2>
    </header>
    <div class="soluciones__wrapper row" style="background-image: url(<?php the_field('fondo1') ?>);">
      <?php
      while(have_rows('soluciones')): the_row();
      ?>
        <div class="soluciones__wrapper-item">
          <div class="box_servicios">
            <figure>
              <img src="<?php the_sub_field('imagen') ?>" alt="">
            </figure>
            <div class="soluciones__wrapper-item-info">
            <?php the_sub_field('descripcion') ?>
            </div>
          </div>
        </div>
      <?php endwhile;?>
    </div>
    <div class="soluciones2__wrapper row" style="background-image: url(<?php the_field('fondo2') ?>);">
      <?php
      while(have_rows('soluciones2')): the_row();
      ?>
        <div class="soluciones__wrapper-item">
          <div class="box_servicios">
            <figure>
              <img src="<?php the_sub_field('imagen') ?>" alt="">
            </figure>
            <div class="soluciones__wrapper-item-info">
            <?php the_sub_field('descripcion') ?>
            </div>
          </div>
        </div>
      <?php endwhile;?>
    </div>
  </div>
</section>
