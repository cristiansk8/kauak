<?php
    /*
        Logos
            logo
    */
    $logos = get_field('logos');
    if($logos):
?>
<section id="SliderLogos" class="slider row">
    <div class="slider__wrapper2">
        <?php while(have_rows('logos')): the_row();?>
            <figure class="slider__wrapper-item">
                    <img src="<?php the_sub_field('logo')?>" alt="">
            </figure>
        <?php endwhile;?>
    </div>
</section>
<?php
    endif;
